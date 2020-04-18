<?php

namespace App\Http\Controllers;

use App\Covid\ContactTracing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactTracingController extends Controller
{
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
