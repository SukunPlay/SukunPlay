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

Route::get('/', 'Facebook\Main@index')->name('home');

Route::get('/fbupdate','Facebook\getVideo@storevideo')->name('storevideo');

Route::get('/fbsort','Facebook\getVideo@sortz')->name('sortvideo');

Route::post('/loadmore/aload_more', 'Facebook\getVideo@aload_more')->name('loadmore.aload_more');

Route::get('privacy','Facebook\Main@privacy')->name('privacy');

Route::get('terms','Facebook\Main@terms')->name('terms');

Route::get('webhooksubs','Facebook\Main@webhooksubs')->name('webhooksubs');



Route::get('fbwebhook','Facebook\Main@fbwebhook')->name('fbwebhook');

Route::post('fbwebhook','Facebook\Main@fbwebhookpost')->name('fbwebhookpost');




Route::get('/dashboard/home','DashboardController@home')->name('dashboard.home');

Route::get('/home','DashboardController@index')->name('home');



Route::get('/test3','DashboardController@test3')->name('test3');

Route::get('/video/info/{video_id}','DashboardController@getInfo')->name('get-video-info');

