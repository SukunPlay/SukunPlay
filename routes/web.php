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

Route::post('fbwebhook','Facebook\test@fbwebhook')->name('fbwebhook');

Route::get('/dashboard/home','DashboardController@home')->name('dashboard.home');

Route::get('/home','DashboardController@index')->name('home');

