<?php

namespace App\Http\Controllers\Facebook;

use App\Facebook\Config;
use App\Facebook\StoreVideo;
use App\Http\Controllers\Controller;
use App\User;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
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

    public function webhooksubs(){
        /* PHP SDK v5.0.0 */
        /* make the API call */

        try {
            $fb = new Facebook([
                'app_id' => config('app.fb_app_id'),
                'app_secret' => config('app.fb_app_secret'),
                'graph_api_version' => config('app.fb_graph_version'),
            ]);

        } catch (FacebookSDKException $e) {

        }

        try {
            // Returns a `Facebook\FacebookResponse` object
            $response = $fb->get(
                '/108039337384349/subscribed_apps',
                'EAAkf5GFcAV8BAF5aF3EanP2GfMyBFs2nAdGdVLhzoawPFXqTQQ2gpmwWxZC7LlD9ZAUZCEZAuJstyXldmJirfM9eFU2x2Rj1s8wQbHUDnQWHf4Byif4DCeWsKhDehaxRyMooW2pIoVBrmzwjf4dFFVcz6YLPSmhuK5gmZB65gsn0oWs6fNbSuIWTq5heFIqgZD'
            );
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
        $graphNode = $response->getGraphNode();
        /* handle the result */

        echo $graphNode;
    }


    public function privacy(){
        return view('front.privacy');
    }

    public function terms(){

        return view('front.terms');
    }
    //
}
