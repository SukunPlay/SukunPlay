<?php

namespace App\Http\Controllers;

use App\Covid\ContactTracing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactTracingController extends Controller
{


    public function index()
    {

        $data = \App\Covid\ContactTracing::all();

        $var = null;

        $case = null;


        foreach ($data as $v) {

            $var = $var . $v->case . " = " . '"' . $v->case_color . '",';
            $parent = null;
            $full_name = null;
            $nationality = null;
            $location = null;
            $age = null;
            $perm_add = null;
            $curr_add = null;
            $work_add = null;
            $date = null;
            $status = null;

            if ($v->parent != '' || $v->parent != null) {
                $parent = '<b>Infected from Case: </b>' . $v->parent . '<br>';
            }

            if ($v->full_name != '' || $v->full_name != null) {
                $full_name = '<b>Full Name: </b>' . $v->full_name . '<br>';
            }

            if ($v->nationality != '' || $v->nationality != null) {
                $nationality = '<b>Nationality: </b>' . $v->nationality . '<br>';
            }

            if ($v->location != '' || $v->location != null) {
                $location = '<b>Location: </b>' . $v->location . '<br>';
            }

            if ($v->age != '' || $v->age != null) {
                $age = '<b>Age: </b>' . $v->age . '<br>';
            }

            if ($v->perm_add != '' || $v->perm_add != null) {
                $perm_add = '<b>Permanent Address: </b>' . $v->perm_add . '<br>';
            }

            if ($v->curr_add != '' || $v->curr_add != null) {
                $curr_add = '<b>Current Address: </b>' . $v->curr_add . '<br>';
            }

            if ($v->work_add != '' || $v->work_add != null) {
                $work_add = '<b>Work Address: </b>' . $v->work_add . '<br>';
            }

            if ($v->date != '' || $v->date != null) {
                $date = '<b>Date: </b>: </b>' . $v->date . '<br>';
            }

            if ($v->status == 0) {
                $status = '<b>Status: Active</b>';
            } elseif ($v->status == 1) {
                $status = '<b>Status: Recovered</b>';

            } elseif ($v->status == 2) {
                $status = '<b>Status: Deceased</b>';
            }


            $case = $case . 'case ' . $v->case . ': ' . 'console.log(' . $v->case . ');' .
                'info ="' . $date . $parent . $full_name . $nationality . $location . $age . $perm_add . $curr_add .
                $work_add . $status . '"; break;';


//                 case mv21:
//                            console.log(mv21);
//                            info = "is aadasdons <br> hhsadasd"
//                            break;
        }


        $return = [
            'data' => $data,
            'var' => $var,
            'case' => $case,

        ];


        return view('front.test.graph')->with('return', $return);
    }

    //

    public function update(Request $request)
    {

        DB::beginTransaction();
        $new = new ContactTracing;

        try {

            $new->case = $request->case;
            $new->case_color = $request->case_color;
            $new->parent = $request->parent;
            $new->full_name = $request->full_name;
            $new->nationality = $request->nationality;
            $new->location = $request->location;
            $new->perm_add = $request->perm_add;
            $new->curr_add = $request->curr_add;
            $new->work_add = $request->work_add;
            $new->date = $request->date;
            $new->age = $request->age;
            $new->status = $request->status;
            $new->radius = $request->radius;
            $new->save();

        } catch (\Exception $e) {
            DB::rollBack();

            return $e;
        }

        DB::commit();

        return redirect('/admin');
    }
}
