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




Route::post('fbwebhook','Facebook\test@fbwebhook')->name('fbwebhook');

Route::get('/dashboard/home','DashboardController@home')->name('dashboard.home');

Route::get('/home','DashboardController@index')->name('home');

Route::get('/test','DashboardController@testz')->name('test');

Route::get('/video/info/{video_id}','DashboardController@getInfo')->name('get-video-info');

