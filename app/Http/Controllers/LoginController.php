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

    public function postlogin(Request $request)
    {   
        if (Auth::attempt($request->only('username', 'password'))) {
            // dd(Auth::attempt($request->only('username', 'password')));
            // dd(Auth()->user()->role);
            if (Auth()->user()->role == 'admin') {
                return redirect('/dashboard');
            }else if (Auth()->user()->role == 'petani') {
                return view(404);
            }else if (Auth()->user()->role == 'investor') {
                return view(404);
            }
        }
        return redirect('/login')->with('error', 'Harap memasukan data dengan benar');
    }

    // public function postloginAshgakj(Request $request)
    // {   
    //     // $user = Auth::user();
        
    //     if (Auth::attempt($request->only('username', 'password'))) {
    //         // dd(Auth::user()->role);
    //         if (Auth::user()->role==='admin') {
    //             return redirect('/dashboard');
    //         }else if (Auth::user()->role == 'petani') {
    //             return view('home');
    //         }else if (Auth::user()->role == 'investor') {
    //             return view('home');
    //         }
    //     }
    //     dd(Auth::attempt($request->only('username', 'password')));
    //     return redirect('/login');
    // }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
