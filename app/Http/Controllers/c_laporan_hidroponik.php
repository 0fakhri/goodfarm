<?php

namespace App\Http\Controllers;

use App\m_buka_laporan;
use App\m_Investor;
use App\m_profile_petani;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class c_laporan_hidroponik extends Controller
{
    public function setDataPetani()
    {
        $idUser = Auth()->User()->id;
        $user = m_Investor::join('transaksi','ca_investor.id_investor','=','transaksi.id_investor')
        ->join('buka_laporan','transaksi.buka_id','=','buka_laporan.id_buka')
        ->join('ca_farmer','buka_laporan.petani_id','=','ca_farmer.id_petani')
        ->where(['ca_investor.id_user'=> $idUser,'transaksi.status'=>'Diterima'])->get();
        
        // dd($user);

        return view('investor.v_laporan_hidroponik',['data'=>$user]);
    }

    public function setDetailLaporan($id)
    {
        // dd($id);
        $idUser = Auth()->User()->id;
        $get = m_Investor::where('id_user',$idUser)->get('id_investor');
        foreach($get as $li){
            $idnya = $li->id_investor;
        }
        // dd($idnya);

        $user = m_profile_petani::join('buka_laporan','laporan_kondisi_hidroponik.petani_id','=','buka_laporan.id_buka')
        ->join('transaksi','buka_laporan.id_buka','=','transaksi.buka_id')
        ->where(['laporan_kondisi_hidroponik.petani_id'=> $id])->get();
        
        // $user = m_buka_laporan::join('transaksi','buka_laporan.id_buka','=','transaksi.buka_id')->where(['ajuan_id'=> $id])->get();
        // dd($user);

        return view('investor.v_laporanDetail',['data'=>$user]);
    }
}
