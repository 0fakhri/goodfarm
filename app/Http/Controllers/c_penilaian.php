<?php

namespace App\Http\Controllers;

use App\m_Investor;
use App\m_Mitra;
use App\m_penilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class c_penilaian extends Controller
{
    public function showListDataPetani()
    {
        $idUser = Auth::user()->id;
        $get = m_Investor::where('id_user',$idUser)->get();
        foreach($get as $li){
            $id = $li->id_investor;
        }
        // dd($id);
        $data = m_Mitra::join('buka_laporan', 'ca_farmer.id_petani', '=', 'buka_laporan.petani_id')->join('transaksi', 'buka_laporan.id_buka', '=', 'transaksi.buka_id')->where('transaksi.id_investor',$id)->get();
        $review = m_penilaian::join('ca_farmer', 'penilaian.petani_id', '=', 'ca_farmer.id_petani')->where(['id_investor'=>$id])->get();
        // dd($data);
        // dd($review);
        return view('investor.v_penilaian', compact('data','review'));
    }

    public function saveDataPenilaian(Request $data){
        date_default_timezone_set("Asia/Jakarta");

        // dd();
        $data->validate([
            'id' => 'required',
            'rating' => 'required',
            'review' => 'required',
        ]);
        // dd($data['id']);
        $idUser = Auth::user()->id;
        $get = m_Investor::where('id_user',$idUser)->get();
        foreach($get as $li){
            $id = $li->id_investor;
        }

        // dd($id);
        m_penilaian::create([
            'petani_id' => $data['id'],
            'id_investor'  => $id,
            'bintang'  => $data['rating'],
            'komentar'  => $data['review'],
            // 'tanggal' => date("Y-m-d H:i:s"),
        ]);
        

        return redirect('/investor/penilaian')->with('bayar', 'Data berhasil disimpan');
    }

    public function editDataPenilaian(Request $data){
        date_default_timezone_set("Asia/Jakarta");

        // dd();
        $data->validate([
            'id' => 'required',
            'rating' => 'required',
            'review' => 'required',
        ]);
        // dd($data['id']);
        $id = $data['id'];

        // dd($id);
        m_penilaian::where('id_penilaian', $id)->update([
            'bintang'  => $data['rating'],
            'komentar'  => $data['review'],
            // 'tanggal' => date("Y-m-d H:i:s"),
        ]);
        

        return redirect('/investor/penilaian')->with('bayar', 'Data berhasil disimpan');
    }
}
