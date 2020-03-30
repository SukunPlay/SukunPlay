<?php

namespace App\Http\Controllers\Facebook;

use App\Facebook\Config;
use App\Facebook\StoreVideo;
use App\Facebook\Thumbnail;
use App\Http\Controllers\Controller;
use App\User;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main extends Controller
{

    public function index(){

        $videos = StoreVideo::first();

        $return = [
            'item' => $videos,
        ];

        return view('welcome')->with('return', $return);

    }


    public function fbwebhook(Request $request){
        if (isset($request['hub_challenge'])){
            $challenge = $request['hub_challenge'];
            $token = $request['hub_verify_token'];
        }

        if ($token=='SunkunWebhook'){
            echo $challenge;
        }
    }



    //this is the gem
    public function fbwebhookpost(Request $request){

        $this->getfbVideos();
        $this->sortfbVideo();

    }

    public function getfbVideos(){

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


        $this->storefbvideo($me);

        //need to update this later @Todo
        return true;

    }


    public function storefbvideo($data)
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


    public function sortfbVideo(){

        $num=0;
        $sort=0;

        DB::beginTransaction();

        if (StoreVideo::whereNotNull('sort')->exists()){
            $last_sort = StoreVideo::whereNotNull('sort')->first();
            $sort = StoreVideo::whereNotNull('sort')->get()->sortBy('fb_created');
            $num = $last_sort->sort;

            try {
                foreach ($sort as $s) {

                    $s->sort = $num;
                    $num++;
                    $s->save();

                }
            }catch (\Exception $e){
                DB::rollBack();
            }
        }else{
            $sort = StoreVideo::all()->sortByDesc('fb_created');
            $num = $sort->count();

            try {
                foreach ($sort as $s) {

                    $s->sort = $num;
                    $num--;
                    $s->save();

                }
            }catch (\Exception $e){
                DB::rollBack();
            }
        }



        DB::commit();
    }




    public function privacy(){
        return view('front.privacy');
    }

    public function terms(){

        return view('front.terms');
    }
    //
}
