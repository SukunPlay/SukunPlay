<?php

namespace App\Http\Controllers\Facebook;

use App\Facebook\Config;
use App\Facebook\StoreVideo;
use App\Http\Controllers\Controller;
use App\User;
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

    public function fbwebhookpost(Request $request){

        $u = new Config();
        $u->app_id = "dafsdfasdf";
        $u->secret = "secret";
        $u->version = 1.1;
        $u->access_token = "dsfsdf";
        $u->save();
    }


    public function privacy(){
        return view('front.privacy');
    }

    public function terms(){

        return view('front.terms');
    }
    //
}
