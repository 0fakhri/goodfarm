<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{   

    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request) {
    
        if (Auth::attempt($request->only('username', 'password'))) {
            // dd(Auth::attempt($request->only('username', 'password')));
            
            // $user = \App\Register::where('username', $request->username)->first();
            // dd($user);
            if (Auth()->user()->role == 'admin') {
                return redirect('/dashboard');
            }
            else if (Auth()->user()->role == 'petani') {
                return redirect('/dashboard');
            }
            else if (Auth()->user()->role == 'investor') {
                return redirect('/dashboard');
            }
        }
        return redirect(404)->with('error', 'Harap memasukan data dengan benar');
    }

    
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
    
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
}
