<?php

namespace App\Http\Controllers;

use App\m_buka_laporan;
use App\m_Investor;
use App\m_profile_petani;
use Illuminate\Http\Request;

class c_laporan_hidroponik extends Controller
{
    public function setDataPetani()
    {
        $idUser = Auth()->User()->id;
        $user = m_Investor::join('transaksi','ca_investor.id_investor','=','transaksi.id_investor')->join('buka_laporan','transaksi.buka_id','=','buka_laporan.id_buka')->where(['ca_investor.id_user'=> $idUser,'transaksi.status'=>'Diterima'])->get();
        
        // dd($user);

        return view('investor.v_laporan_hidroponik',['data'=>$user]);
    }

    public function setDetailLaporan($id)
    {
        $user = m_profile_petani::join('buka_laporan','laporan_kondisi_hidroponik.ajuan_id','=','buka_laporan.id_buka')->join('transaksi','buka_laporan.id_buka','=','transaksi.buka_id')->where(['ajuan_id'=> $id])->get();
        
        // $user = m_buka_laporan::join('transaksi','buka_laporan.id_buka','=','transaksi.buka_id')->where(['ajuan_id'=> $id])->get();
        // dd($user);

        return view('investor.v_laporanDetail',['data'=>$user]);
    }
}
