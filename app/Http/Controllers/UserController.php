<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;

class UserController extends Controller
{
    //

    function addNewUser(Request $req){
        $user = new User;
        $user->idnum = $req->idnum;
        $user->name = $req->fname." ".$req->lname;
        $user->role = $req->role;
        $user->password = $req->idnum;
        $user->save();

        $req->session()->flash('success','<div class="alert alert-success" role="alert">
        <strong>Success - </strong> A simple success alert - check it out!
    </div>');
        return redirect('admin/accounts');
    }

    function showDepartments(Request $req){
        $data = Department::all();
        return view('admin/accounts', ['depts'=>$data]);
    }

}
