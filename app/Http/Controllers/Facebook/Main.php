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
        if (isset($request['hub_challenge'])){
            $challenge = $request['hub_challenge'];
            $token = $request['hub_verify_token'];
        }

        if ($token=='SunkunWebhook'){
            echo $challenge;
        }
    }
    //
}
