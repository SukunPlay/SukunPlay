<?php

namespace App\Http\Controllers\Facebook;

use App\Facebook\StoreVideo;
use App\Facebook\Thumbnail;
use App\Http\Controllers\Controller;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class getVideo extends Controller
{
    public function storevideo(){


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

        while (isset($me->getMetaData()['paging']['next'])){

            $response = $fb->next($me);
            $me = $response;
            $this->storefbvidz($me);

        }

        //need to update this later @Todo
        return redirect('/');


    }


    public function storefbvidz($data){

        foreach ($data as $n){

            if (!StoreVideo::where('fb_id','=',$n['id'])->exists()){

                DB::beginTransaction();
                $new_video = new StoreVideo();
                try {
                    $new_video->fb_id = $n['id'];
                    $new_video->link = $n['source'];
                    $new_video->desc = $n['description'];
                    $new_video->title = $n['title'];
                    $new_video->fb_created =$n['created_time'];
                    $new_video->save();
                }catch (\Exception $e){
                    DB::rollBack();
                }


                foreach ($n['thumbnails'] as $thumbnail){


                    $new_thumbnail = new Thumbnail();

                    try {
                        $new_thumbnail->video_id = $n['id'];
                        $new_thumbnail->link = $thumbnail['uri'];
                        $new_thumbnail->save();

                    }catch (\Exception $e){

                        DB::rollBack();
                    }

                }


                DB::commit();

            }


        }
    }

    //
}
