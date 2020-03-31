<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    function action(Request $request)
    {
        
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
        $data = DB::table('store_videos')
        ->orderBy('created_at', 'desc')
        ->get()->where('deleted_at', null);
      }
      
      $total_row = $data->count();

      if($total_row <= 0)
      {
       $data = [ ['title' => 'not data'] ];
      }
      $data = array(
       'data'  => $data,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
