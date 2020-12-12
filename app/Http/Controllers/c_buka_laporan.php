<?php

namespace App\Http\Controllers;

use App\m_buka_laporan;
use App\m_Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class c_buka_laporan extends Controller
{
    public function showForm(){
        $getid = Auth()->User()->id;
        $idcus = m_Mitra::where('id_user',$getid)->get();
        foreach ($idcus as $li){
            $idnya = $li->id_petani;
        }
        // dd($idcus);
        // dd($idnya);
        return view('petani.v_buka_laporan',['data'=>$idcus]);
    }

    public function saveDataBukaInvestasi(Request $data){
        // dd($data['img']);
        // $data->validate([
        //     'id' => 'required',
        //     'bank' => 'required',
        //     'namaRek' => 'required',
        //     'noRek'  => 'required',
        //     'img' => 'required|image|mimes:jpeg,png,jpg,svg',
        // ]);
        // dd($data['id']);

        $file = $data->file('foto');
        $name = time();
        $extension = $file->getClientOriginalExtension();
        $newName = $name . '.' .$extension;
        // dd($newName);
        Storage::putFileAs('public/img', $data->file('foto'), $newName);

        m_buka_laporan::create([
            'petani_id' => $data['id'],
            'nama_tanaman'  => $data['namaTanaman'],
            'hasil_petani'  => $data['petani'],
            'hasil_investor'  => $data['investor'],
            'harga_perbenih'  => $data['hargaBenih'],
            'total_lot'  => $data['lot'],
            'periode'  => $data['periode'],
            'foto' => 'storage/img/' . $newName,
        ]);

        return redirect('/petani/profil')->with('bayar', 'Data berhasil disimpan');
    }
}
