<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    

    // public function dataUser(Request $request)
    // {
    //     $admin = \App\Register::all();
    // }

    
    public function index() {
       return view ('admin.dashboard');
    }

    

    public function editadmin($id){
        $users = \App\Register::find($id);
        return view('admin.editadmin', ['users' => $users]);
    }

    

    public function updateadmin(Request $request, $id){
        //dd($request->all());
        $users = \App\Register::find($id);
        //$users->password = bcrypt($users->password);
        $users->update($request->all());
        return redirect('/dataku/{id}')->with('sukses', 'data berhasil diubah');
    }

    public function verifikasi(){
        $users = \App\Farmer::all()->where('status', null);
        $users2 = \App\Investor::all()->where('status', null);
        // return response()->json(['data' => $users, $users2]);
        return view('admin.verifikasi');
    }

    public function getDataUser() {
        
    }

    
}