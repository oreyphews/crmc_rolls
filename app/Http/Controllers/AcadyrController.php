<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Academicyear;

class AcadyrController extends Controller
{
    //
    function addNewAcadyr(Request $req){
        $acad = new Academicyear;
        $acad->acad_year = $req->acad_year;
        $acad->period = $req->period;
        $acad->status = "unused";
        $acad->save();

        $req->session()->flash('success','<div class="alert alert-success" role="alert">
        <strong>Success - </strong> A simple success alert - check it out!
    </div>');
        return redirect('admin/academicyear');
        
    }

    function showAcadyrs(){
        $data = Academicyear::all();
        return view('admin/academicyear', ['acadyrs'=>$data]);
    }

    // function showAcadData($id){
    //     $data = Academicyear::find($id);
    //     return view('admin/academicyear', ['data' => $data]);
    // }
}
