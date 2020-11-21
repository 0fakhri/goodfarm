<?php

namespace App\Http\Controllers;

use App\m_Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class c_profil_petani extends Controller
{
    public function klikMenuProfil()
    {
        $idUser = Auth()->user()->id;
        // dd($idUser);
        $user = m_Mitra::join('alamat','ca_farmer.id_alamat','=','alamat.id_alamat')->where('id_user', $idUser)->get();
        // dd($user);
        return view('petani.v_profil_petani',['data'=>$user]);
    }
}
