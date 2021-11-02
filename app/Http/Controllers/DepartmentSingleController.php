<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DepartmentSingle;

class DepartmentSingleController extends Controller
{
    //
    function getDepartment($id){
        $data = DepartmentSingle::find($id);
        return view('admin/dept-single', ['data'=>$data]);
    }
}
