<?php

namespace App\Http\Controllers;

use App\m_buka_laporan;
use App\m_profile_petani;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class c_profile_petani extends Controller
{
    public function showPengajuan(){
        $idUser = Auth()->user()->id;
        // dd($idUser);
        $get = m_buka_laporan::join('ca_farmer','buka_laporan.petani_id','=','ca_farmer.id_petani')->where('id_user',$idUser)->get();
        // dd($get);
        return view('petani.v_pengajuan',['ajuan'=>$get]);
    }

    public function showFormLaporan($id){
        $idUser = Auth()->user()->id;
        // dd($idUser);
        $get = m_buka_laporan::join('ca_farmer','buka_laporan.petani_id','=','ca_farmer.id_petani')->where('id_buka',$id)->get();
        // dd($get);
        return view('petani.v_formLaporan',['ajuan'=>$get]);
    }

    public function saveDataLaporanHidro(Request $data){
        date_default_timezone_set("Asia/Jakarta");

        // dd();
        $data->validate([
            'foto' => 'image|mimes:jpeg,png,jpg,svg',
            'video' => 'mimes:mp4,mov,ogg | max:20000',
        ]);
        // dd($data['id']);
        
        $file = $data->file('foto');

        if($file != null){
            $name = time();
            $extension = $file->getClientOriginalExtension();
            $newName = $name . '.' .$extension;
            // dd($newName);
            Storage::putFileAs('public/img', $data->file('foto'), $newName);

            $file2 = $data->file('video');
            $name2 = 'v'.time();
            $extension2 = $file2->getClientOriginalExtension();
            $newName2 = $name2 . '.' .$extension2;

            Storage::putFileAs('public/img', $data->file('video'), $newName2);

            m_profile_petani::create([
                'ajuan_id' => $data['id'],
                'benih_awal'  => $data['benihAwal'],
                'benih_ditanam'  => $data['benihTanam'],
                'benih_mati'  => $data['benihMati'],
                'foto_perkembangan'  => 'storage/img/' . $newName,
                'video_perkembangan'  => 'storage/img/' . $newName2,
                'tanggal' => date("Y-m-d H:i:s"),
            ]);
        }
        elseif($file == null){
            m_profile_petani::create([
                'ajuan_id' => $data['id'],
                'benih_awal'  => $data['benihAwal'],
                'benih_ditanam'  => $data['benihTanam'],
                'benih_mati'  => $data['benihMati'],
                'harga_total_tanaman' => $data['total'],
                'tanggal' => date("Y-m-d H:i:s"),
            ]);
        }

        return redirect('/petani/profil')->with('bayar', 'Data berhasil disimpan');
    }
}
