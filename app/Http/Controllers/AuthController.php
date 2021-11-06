<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;
use Hash;


class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }  
      

    public function signIn(Request $request)
    {
        $request->validate([
            'idnum' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('idnum', 'password');
        //dd(Hash::make($request->input('password')));
        if (Auth::attempt($credentials)) {
           $request->session()->regenerate();
           $idnum = $request->input('idnum');
           $data = User::where('idnum',$idnum)->get();
           $role = $data[0]['role'];
           $redirect = $role."/dashboard";
           Session::put('data', $data);
            return redirect()->intended($redirect)
                        ->withSuccess('Logged-in');
        }
        return redirect("/")->withErrors('Credentials are wrong.');
    }


    


    // public function createUser(array $data)
    // {
    //   return User::create([
    //     'name' => $data['name'],
    //     'email' => $data['email'],
    //     'password' => Hash::make($data['password'])
    //   ]);
    // }    
    

    public function logout(Request $request) 
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}