<?php

namespace App\Http\Controllers\Facebook;

use App\Facebook\StoreVideo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

        return "aRtCVKzuJMviYKnRbqOvcuVbZ3FL5D7JZnBcOQ6o";
    }
    //
}
