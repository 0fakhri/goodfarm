<?php

namespace App\Http\Controllers;

use App\m_pesan;
use Illuminate\Http\Request;

class c_pesan extends Controller
{
    public function listGroupKomunitas()
    {
        $data = m_pesan::join('users', 'grup komunitas.id_user', '=', 'users.id')
        ->get();

        // if (Auth::check()) {
        //     if (Auth::user()->role_id == 1) {
        //         return view('komunitas.v_groupkomunitas', compact('data'));
        //     }elseif(Auth::user()->role_id == 3){
        //         return view('komunitas.v_groupkomunitas', compact('data'));
        //     }else{
        //         return view('home');
        //     }
        // }else{
        //     return view('auth.login');
        // }

        return view('komunitas.v_groupkomunitas', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function setGroupKomunitas(Request $request)
    {
        
        m_pesan::create([
            'customer_id' => $request->id,
            'cv_id' => $request->id,
            'pesan' => $request->komen,
            'waktu' => date("Y-m-d H:i:s")
        ]);

        return redirect('komunitas')->with('status', 'Berhasil Menambahkan Data Pencatatan Perkembangan Melon');
        
    }
}
