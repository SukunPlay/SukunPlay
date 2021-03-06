<?php

namespace App\Http\Controllers\Facebook;

use App\Facebook\getVideoInsights;
use App\Facebook\StoreVideo;
use App\Facebook\Thumbnail;
use App\Http\Controllers\Controller;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class getVideo extends Controller
{
    public function storevideo()
    {

//
//        try {
//            $fb = new Facebook([
//                'app_id' => config('app.fb_app_id'),
//                'app_secret' => config('app.fb_app_secret'),
//                'graph_api_version' => config('app.fb_graph_version'),
//            ]);
//
//        } catch (FacebookSDKException $e) {
//
//        }
//
//
//        try {
//            $response = $fb->get('me?fields=videos{created_time,id,description,thumbnails,source,title}', config('app.fb_access'));
//
//        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
//            echo 'Graph returned an error: ' . $e->getMessage();
//            exit;
//        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
//            echo 'Facebook SDK returned an error: ' . $e->getMessage();
//            exit;
//        }
//
//        $me = $response->getGraphNode()['videos'];

        $endpoint = 'me?fields=videos{created_time,id,description,thumbnails,source,title}';
        $graphNode = getVideoInsights::queryfb($endpoint);

        $videos = $graphNode['node']['videos'];

        $this->storefbvidz($videos);

        while (isset($videos->getMetaData()['paging']['next'])) {

            $response = $graphNode['fb']->next($videos);
            $videos = $response;
            $this->storefbvidz($videos);

        }

        $this->sortz();
        //need to update this later @Todo
        return redirect('/');


    }


    public function storefbvidz($data)
    {

        foreach ($data as $n) {

            if (!StoreVideo::where('fb_id', '=', $n['id'])->exists()) {

                DB::beginTransaction();
                $new_video = new StoreVideo();
                try {
                    $new_video->fb_id = $n['id'];
                    $new_video->link = $n['source'];
                    $new_video->desc = $n['description'];
                    $new_video->title = $n['title'];
                    $new_video->fb_created = $n['created_time'];
                    $new_video->save();
                } catch (\Exception $e) {
                    DB::rollBack();

                }


                foreach ($n['thumbnails'] as $thumbnail) {


                    $new_thumbnail = new Thumbnail();

                    try {
                        $new_thumbnail->video_id = $n['id'];
                        $new_thumbnail->link = $thumbnail['uri'];
                        $new_thumbnail->save();

                    } catch (\Exception $e) {

                        DB::rollBack();
                    }

                }


                DB::commit();

            }


        }

    }


    public function sortz()
    {

        $num = 0;
        $sort = 0;


        DB::beginTransaction();

        if (StoreVideo::whereNotNull('sort')->exists()) {
            $last_sort = StoreVideo::whereNotNull('sort')->orderBy('sort', 'DESC')->first();
            $sort = StoreVideo::whereNull('sort')->get()->sortBy('fb_created');
            $num = $last_sort->sort;

            try {
                foreach ($sort as $s) {

                    $s->sort = $num + 1;
                    $num++;
                    $s->save();

                }
            } catch (\Exception $e) {
                DB::rollBack();
            }
        } else {
            $sort = StoreVideo::all()->sortByDesc('fb_created');
            $num = $sort->count();

            try {
                foreach ($sort as $s) {

                    $s->sort = $num;
                    $num--;
                    $s->save();

                }
            } catch (\Exception $e) {
                DB::rollBack();
            }
        }


        DB::commit();
    }


    function aload_more(Request $request)
    {
        $last_sort_id = StoreVideo::all()->sortByDesc('sort')->first()->sort;

        if ($request->ajax()) {
            if ($request->id > 0) {

                $data = StoreVideo::where('sort', '<', $request->id)
                    ->orderby('sort', 'DESC')
                    ->limit(12)
                    ->get();

            } else {

                $data = DB::table('store_videos')
                    ->orderBy('sort', 'DESC')
                    ->where('sort', '!=', $last_sort_id)
                    ->limit(12)
                    ->get();

            }
            $output = '';
            $last_id = '';

            if (!$data->isEmpty()) {
                foreach ($data as $row) {

                    $thumbnail = Thumbnail::where('video_id', '=', $row->fb_id)->first()->link;
                    $output .= '



             <div class="col-6 col-md-3 col-lg-3" style="margin-bottom: 50px;padding-right:0.5rem;padding-left:0.5rem">
                                <div class="card"
                                    style="border-radius: 0!important;"
                                     data-toggle="modal"
                                     data-target="#myModal"
                                     data-url="' . $row->link . '"
                                     data-xid="' . $row->fb_id . '">

                                    <div class="videos">
                                      <a class="video">
                                        <span></span>
                                        <img src="' . $thumbnail . '" alt="My Awesome Video" />
                                      </a>
                                    </div>
                                    <div class="p-2" style="text-align: center; font-family: MVAWAHEED; font-size:2vh; min-height: 50px;direction: rtl">' . $row->title . '</div>


                                </div>
            </div>



        ';
                    $last_id = $row->sort;
                }
                $output .= '

            <div class="container" id="load_more">
            <div class="row justify-content-center">
            <div class="">
        <button type="button" name="load_more_button" class="btn btn-success form-control" data-id="' . $last_id . '" id="load_more_button" style="font-family: MVAWAHEED; font-size: 15px; direction: rtl">އިތުރަށް</button>
       </div>
       </div>
       </div>
       ';
            } else {
                $output .= '
       <div class="container" id="load_more">
            <div class="row justify-content-center">
            <div class="">
        <button type="button" name="load_more_button" class="btn btn-info form-control"style="font-family: MVAWAHEED; font-size: 15px;direction: rtl">ނިމުނީ<button>
         </div>
       </div>
       </div>
       ';
            }
            echo $output;
        }
    }


    public function newlink($id)
    {

        $graphNode = getVideoInsights::queryfb($id . "?fields=source");


        $new_link = $graphNode['node'];

        DB::beginTransaction();
        try {
            $find_video = StoreVideo::where('fb_id', '=', $id)->first();
            $find_video->link = $new_link['source'];
            $find_video->save();
        } catch (\Exception $e) {

            DB::rollBack();
        }


        DB::commit();

        return $new_link['source'];

    }
}
