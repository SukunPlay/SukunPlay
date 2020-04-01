<?php

namespace App\Facebook;

use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Database\Eloquent\Model;

class getVideoInsights extends Model
{
    //

    public function queryfb($endpoint){
        try {
            $fb = new Facebook([
                'app_id' => config('app.fb_app_id'),
                'app_secret' => config('app.fb_app_secret'),
                'graph_api_version' => config('app.fb_graph_version'),
            ]);

        } catch (FacebookSDKException $e) {

        }

        try {
            $response = $fb->get($endpoint, config('app.fb_access'));

        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        $graphNode = $response->getGraphNode();

        return $graphNode;

    }



}
