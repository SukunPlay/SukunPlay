<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test1(){

        return view('front.test.home3');
    }

    public function test2(){
        return view('front.test.test2');
    }
}
