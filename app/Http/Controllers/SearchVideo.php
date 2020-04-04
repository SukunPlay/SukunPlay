<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchVideo extends Controller
{
    //

    public function search(Request $request){

        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
                $data = DB::table('store_videos')
                    ->where('id', 'like', '%'.$query.'%')
                    //  ->orWhere('fb_id', 'like', '%'.$query.'%')
                    //  ->orWhere('link', 'like', '%'.$query.'%')
                    ->orWhere('desc', 'like', '%'.$query.'%')
                    ->orWhere('title', 'like', '%'.$query.'%')
                    //  ->orWhere('approved', 'like', '%'.$query.'%')
                    //  ->orWhere('category_id', 'like', '%'.$query.'%')
                    ->orWhere('dh_desc', 'like', '%'.$query.'%')
                    ->orWhere('dh_title', 'like', '%'.$query.'%')
                    //  ->orWhere('created_at', 'like', '%'.$query.'%')
                    //  ->orderBy('created_at', 'desc')
                    ->get()->where('deleted_at', null);

            }
            else
            {
                $data = 'lol';
            }


            $total_row = $data->count();


            $data = array(
                'data'  => $data,
                'total_data'  => $total_row
            );

            echo json_encode($data);
        }
    }
}
