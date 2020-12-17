<?php

namespace App\Http\Controllers;

use App\m_labaRugi;
use App\m_Mitra;
use Illuminate\Http\Request;

class c_labaRugi extends Controller
{
    public function showFormLabaRugi(){
        $getid = Auth()->User()->id;
        $idcus = m_Mitra::where('id_user',$getid)->get();

        // dd($idcus);
        // dd($idnya);
        return view('petani.v_labaRugi',['data'=>$idcus]);
    }

    public function saveDataLabaRugi(Request $data){
        // dd($data['img']);
        $data->validate([
            'id' => 'required',
            'cost' => 'required',
            'jumlah' => 'required',
            'harga'  => 'required',
        ],[
            'cost.required' => 'Data tidak boleh kosong',
            'jumlah.required' => 'Data tidak boleh kosong',
            'harga.required' => 'Data tidak boleh kosong',
        ]);

        $TR = $data['jumlah'] * $data['harga'];
        // dd($data['id']);
        // dd($TR);
        

        m_labaRugi::create([
            'id_petani' => $data['id'],
            'biaya_pengeluaran'  => $data['cost'],
            'jumlah_produk_terjual'  => $data['jumlah'],
            'harga_terjual_masa_panen'  => $data['harga'],
            'laba_rugi'  => $TR,
            
        ]);

        return redirect('/petani/profil#chart')->with('bayar', 'Data berhasil disimpan');
    }
}
