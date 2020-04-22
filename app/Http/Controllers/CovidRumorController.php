<?php

namespace App\Http\Controllers;

use App\CovidRumor;
use Illuminate\Http\Request;

class CovidRumorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

     return view('front.rumor.home');
        //
    }

}
