<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    //

    function createDepartment(Request $req){
        $user = new Department;
        $user->department_name = $req->dept_name;
        $user->department_coordinator = 0;

        $user->save();

        $req->session()->flash('success','<div class="alert alert-success" role="alert">
        <strong>Success - </strong> A simple success alert - check it out!
    </div>');
        return redirect('admin/departments');
    }

    function showDepartments(Request $req){
        $data = Department::all();
        return view('admin/departments', ['depts'=>$data]);
    }
}
