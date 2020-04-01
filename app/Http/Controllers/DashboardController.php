<?php

namespace App\Http\Controllers;

use App\Facebook\StoreVideo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        return view('dashboard.home');
    }


    public function index()
    {

        $item = StoreVideo::all()->sortByDesc('fb_created');

        $sample = StoreVideo::all()->sortByDesc('sort')->first();

        $return = [
            'item' => $item,
            'sample' => $sample,
        ];

        return view('front.home')->with('return', $return);
    }

    public function getInfo(Request $request)
    {
        $video_id = $request->video_id;

        //find video
        $video = StoreVideo::where('fb_id', '=', $video_id)->first();


//        $carbon = Carbon::make($video->fb_created);

        $date = \Carbon\Carbon::make($video->fb_created);
        $month = $date->month;
        $dmonth = null;

        switch ($month) {

            case 1;

                $dmonth = "ޖަނަވަރީ";

                break;

            case 2;

                $dmonth = "ފެބުރުވަރީ";

                break;

            case 3;

                $dmonth = "މާރިޗު";

                break;

            case 4;

                $dmonth = "އެޕްރީލު";

                break;

            case 5;

                $dmonth = "މޭ";

                break;

            case 6;

                $dmonth = "ޖޫން";

                break;

            case 7;

                $dmonth = "ޖުލައި";

                break;

            case 8;

                $dmonth = "އޮގަސްޓް";

                break;

            case 9;

                $dmonth = "ސެޕްޓެންބަރު";

                break;

            case 10;

                $dmonth = "އޮކްޓޫބަރު";

                break;

            case 11;

                $dmonth = "ނޮވެންބަރު";

                break;

            case 12;

                $dmonth = "ޑިސެންބަރު";

                break;


        }


        $video->diffz = $date->year."&#x202b;".$date->day."&nbsp;".$dmonth."&nbsp;";

        if ($video) {
            return $video->toArray();
        }
    }
}
