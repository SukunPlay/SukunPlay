<?php

namespace App\Http\Controllers;

use App\Facebook\StoreVideo;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home() {
        return view('dashboard.home');
    }
    public function index() {
        return view('home');
    }

    public function testz(){
        return view('front.home');
    }


    public function getInfo(Request $request)
    {
        $video_id = $request->video_id;

        //find video
        $video = StoreVideo::where('fb_id','=',$video_id)->first();

        if($video){
            return $video->toArray();
        }
    }
}
