<?php

namespace App\Http\Controllers\Facebook;

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


        try {
            $fb = new Facebook([
                'app_id' => config('app.fb_app_id'),
                'app_secret' => config('app.fb_app_secret'),
                'graph_api_version' => config('app.fb_graph_version'),
            ]);

        } catch (FacebookSDKException $e) {

        }


        try {
            $response = $fb->get('me?fields=videos{created_time,id,description,thumbnails,source,title}', config('app.fb_access'));

        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        $me = $response->getGraphUser()['videos'];


        $this->storefbvidz($me);

        while (isset($me->getMetaData()['paging']['next'])) {

            $response = $fb->next($me);
            $me = $response;
            $this->storefbvidz($me);

        }

        //need to update this later @Todo
        return redirect('/test');


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


        $sort = StoreVideo::all()->sortByDesc('fb_created');


        $num = $sort->count();


        foreach ($sort as $s) {

            $s->sort = $num;
            $num--;
            $s->save();


        }
    }


    function aload_more(Request $request)
    {
        if ($request->ajax()) {
            if ($request->id > 0) {

                $data = StoreVideo::where('sort', '<', $request->id)
                    ->orderby('sort', 'DESC')
                    ->limit(12)
                    ->get();

            } else {

                $data = DB::table('store_videos')
                    ->orderBy('sort', 'DESC')
                    ->limit(12)
                    ->get();

            }
            $output = '';
            $last_id = '';

            if (!$data->isEmpty()) {
                foreach ($data as $row) {

                    $thumbnail = Thumbnail::where('video_id', '=', $row->fb_id)->first()->link;
                    $output .= '



             <div class="col-6 col-md-4 col-lg-3" style="margin-bottom: 50px;padding-right:0.5rem;padding-left:0.5rem">
                                <div class="card"
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
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-family: MVAWAHEED; text-align: right; font-size: 20px">' . $row->title . '</h5>
                                    </div>
                                </div>
            </div>



        ';
                    $last_id = $row->sort;
                }
                $output .= '

            <div class="container" id="load_more">
            <div class="row justify-content-center">
            <div class="col-lg-12">
        <button type="button" name="load_more_button" class="btn btn-success form-control" data-id="' . $last_id . '" id="load_more_button" style="font-family: MVAWAHEED; font-size: 30px">އިތުރަށް</button>
       </div>
       </div>
       </div>
       ';
            } else {
                $output .= '
       <div class="container" id="load_more">
            <div class="row justify-content-center">
            <div class="col-lg-8">
        <button type="button" name="load_more_button" class="btn btn-info form-control"style="font-family: MVAWAHEED; font-size: 30px">ނިމުނީ<button>
         </div>
       </div>
       </div>
       ';
            }
            echo $output;
        }
    }

    //
}
