<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});



Route::get('/','DashboardController@index')->name('home');

Route::get('/fbupdate','Facebook\getVideo@storevideo')->name('storevideo');

//Route::get('/fbsort','Facebook\getVideo@sortz')->name('sortvideo');

Route::post('/loadmore/aload_more', 'Facebook\getVideo@aload_more')->name('loadmore.aload_more');

Route::get('privacy','Facebook\Main@privacy')->name('privacy');

Route::get('terms','Facebook\Main@terms')->name('terms');

Route::get('webhooksubs','Facebook\Main@webhooksubs')->name('webhooksubs');

Route::get('fbwebhook','Facebook\Main@fbwebhook')->name('fbwebhook');

Route::post('fbwebhook','Facebook\Main@fbwebhookpost')->name('fbwebhookpost');

Route::get('/video/info/{video_id}','DashboardController@getInfo')->name('get-video-info');

Route::get('/search/videos','SearchVideo@search')->name('search.videos');


Route::get('/refreshvideo/{id}','Facebook\getVideo@newlink')->name('refreshvideo');


//test routes


Route::get('/test', function (){
    return view('front.test.graph');
});

//Route::get('/test','Facebook\Main@test')->name('test');
//
//Route::post('/test','Facebook\Main@queryvideoinsights')->name('testpost');
//Route::get('/search/action', 'SearchController@action')->name('search.action');
