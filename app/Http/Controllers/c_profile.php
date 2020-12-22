<?php

namespace App\Http\Controllers;

use App\m_Investor;
use App\m_labaRugi;
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

    public function showDataInvestor($id)
    {
        $data = m_Investor::join('alamat','ca_investor.id_alamat','=','alamat.id_alamat')->where('id_investor',$id)->get();
        // dd($data);
        return view('admin.v_profill', compact('data'));
    }

    public function showDataPetani($id)
    {
        $data = m_Mitra::join('alamat','ca_farmer.id_alamat','=','alamat.id_alamat')->where('id_petani',$id)->get();
        $data3 = m_labaRugi::where('id_petani',$id)->get()->toArray();

        $data3 = array_column($data3, 'laba_rugi');
        $data3 = json_encode($data3,JSON_NUMERIC_CHECK);
        // dd($data3);
        return view('admin.v_profiled', compact('data','data3'));
    }
}
