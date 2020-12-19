<?php

namespace App\Http\Controllers;

use App\m_Investor;
use App\m_Mitra;
use Illuminate\Http\Request;

class c_profile extends Controller
{
    public function showDataAdmin()
    {
        $data = m_Mitra::join('alamat','ca_farmer.id_alamat','=','alamat.id_alamat')->get();
        $data2 = m_Investor::join('alamat','ca_investor.id_alamat','=','alamat.id_alamat')->get();
        return view('admin.v_profile', compact('data','data2'));
    }
}
