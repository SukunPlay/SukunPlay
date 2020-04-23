<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CovidRumorController extends Controller
{
    //
    public function index(){

        return view('front.test.rumor');
    }
}
