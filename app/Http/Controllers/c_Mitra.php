<?php

namespace App\Http\Controllers;

use App\m_Mitra;
use Illuminate\Http\Request;

class c_Mitra extends Controller
{
    public function klikMenuMitra($id) {
        
        $data = m_Mitra::join('alamat','ca_farmer.id_alamat','=','alamat.id_alamat')->where('id_petani',$id)->get();
        // dd($data);
        return view('investor.v_detail_mitra',['mitra'=>$data]);
    }
}
