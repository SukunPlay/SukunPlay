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


use App\Covid\Master;

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

Route::get('/admin', function(){

    $trace = \App\Covid\ContactTracing::all();
    $master = Master::all();

    $return = [
        'trace' => $trace,
        'master' => $master,
    ];
    return view('dashboard.home')->with('return', $return);
})->name('dashboard.home')->middleware('auth');

Route::post('/admin', 'ContactTracingController@update')->name('recordcase');

//test routes


//Route::get('/test',function (){
//    return view('front.test.graph');
//});

Route::get('/test','CovidRumorController@index')->name('viewtrace');

Route::get('/test1','Test\TestController@test1');
Route::get('/test2','Test\TestController@test2');


//Route::get('/test','Facebook\Main@test')->name('test');
//
//Route::post('/test','Facebook\Main@queryvideoinsights')->name('testpost');
//Route::get('/search/action', 'SearchController@action')->name('search.action');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
