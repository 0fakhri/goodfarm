<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class c_Login extends Controller
{   

    public function mengeklikMenu()
    {
        return view('auth.login');
    }

    public function getData(Request $request) {
        // dd($request->password);

        // $username='admin';
        // $pass='admin';
        if (Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')])) {
            // dd(Auth::attempt($request->only('username', 'password')));
            // Auth::check();
            // $user = \App\m_Registrasi::where('username', $request->username)->first();
            // dd(Auth()->user()->role);
            if (Auth()->user()->role == "admin") {
                // dd(Auth::attempt($request->only('username', 'password')),Auth::user()->role);
                return redirect('/dashboard');
            }
            else if (Auth()->user()->role == 'petani') {
                // dd(Auth()->user()->role);
                return redirect('/petani/dashboard');
            }
            else if (Auth()->user()->role == 'investor') {
                return redirect('/investor/dashboard');
            }
        }
        return redirect('/login')->with('sukses', 'Harap memasukan data dengan benar');
    }

    
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    // public function logout(Request $request) {
    //     Auth::logout();
    //     return redirect('/');
    // }
    
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

//     public function __construct()
// {
//     $this->middleware(['checkRole:admin,petani,investor']);
// }
}
