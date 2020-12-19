<?php

namespace App\Http\Controllers;

use App\Alamat;
use App\m_buka_laporan;
use App\m_labaRugi;
use App\m_Mitra;
use App\m_profile_petani;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class c_profil_petani extends Controller
{
    public function klikMenuProfil()
    {
        $idUser = Auth()->user()->id;
        // dd($idUser);
        $data = m_Mitra::leftJoin('laporan_kondisi_hidroponik','ca_farmer.id_petani','=','laporan_kondisi_hidroponik.petani_id')->join('alamat','ca_farmer.id_alamat','=','alamat.id_alamat')->leftJoin('buka_laporan','ca_farmer.id_petani','=','buka_laporan.petani_id')->where('id_user', $idUser)->get();
        foreach ($data as $li) {
            $idpet = $li->id_petani;
        }
        
        $data2 = m_buka_laporan::join('transaksi','buka_laporan.id_buka','=','transaksi.buka_id')->where('petani_id',$idpet)->get();
        $data3 = m_labaRugi::where('id_petani',$idpet)->get()->toArray();

        $data3 = array_column($data3, 'laba_rugi');
        $data3 = json_encode($data3,JSON_NUMERIC_CHECK);
        // dd($data);
        // dd($data2);
        // dd($data3);
        
        return view('petani.v_profil_petani', compact('data','data2','data3'));
        // return view('petani.v_profil_petani',['data'=>$user],['data2'=>$inves]);
    }

    public function saveDataPetani(Request $data)
    {
        $id = $data['id'];
        // dd($data['idAlamat']);
        $data->validate([
            'alamat' => 'required',
            // 'ddlKota' => 'required',
            // 'ddlProvinsi' => 'required',
            'nama' => 'required',
            'nohp' => 'required',
            'tgllahir'=> 'required',
            'jeniskelamin' => 'required',
            'jenisidentitas' => 'required',
            'noidentitas' => 'required',
            'email' => 'required',
        ],[
            'alamat.required' => 'Form harus diisi',
            // 'ddlKota.required' => 'Form harus diisi',
            // 'ddlProvinsi.required' => 'Form harus diisi',
            'nama.required' => 'Form harus diisi',
            'nohp.required' => 'Form harus diisi',
            'tgllahir.required'=> 'Form harus diisi',
            'jeniskelamin.required' => 'Form harus diisi',
            'jenisidentitas.required' => 'Form harus diisi',
            'noidentitas.required' => 'Form harus diisi',
            'email.required' => 'Form harus diisi',
        ]);
        
        m_Mitra::where('id_petani', $id)->update([
                'nama_petani'    => $data['nama'],
                'no_ponsel_petani'    => $data['nohp'],
                'tanggal_lahir_petani'    => $data['tgllahir'],
                'jenis_kelamin'    => $data['jeniskelamin'],
                'jenis_identitas'   => $data['jenisidentitas'],
                'no_identitas_petani'    => $data['noidentitas'],
                'email_petani'    => $data['email'],
            ]);

        Alamat::where('id_alamat' , $data['idAlamat'])->update([
            'alamat' => $data['alamat'],
            // 'kota' => $data['ddlKota'],
            // 'provinsi' => $data['ddlProvinsi'],
        ]);

        return redirect('/petani/profil');
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
                'petani_id' => $data['id'],
                'benih_awal'  => $data['benihAwal'],
                'benih_ditanam'  => $data['benihTanam'],
                'benih_mati'  => $data['benihMati'],
                'foto_perkembangan'  => 'storage/img/' . $newName,
                'video_perkembangan'  => 'storage/img/' . $newName2,
                // 'tanggal' => date("Y-m-d H:i:s"),
            ]);
        }
        elseif($file == null){
            m_profile_petani::create([
                'petani_id' => $data['id'],
                'benih_awal'  => $data['benihAwal'],
                'benih_ditanam'  => $data['benihTanam'],
                'benih_mati'  => $data['benihMati'],
                'harga_total_tanaman' => $data['total'],
                // 'tanggal' => date("Y-m-d H:i:s"),
            ]);
        }

        return redirect('/petani/profil')->with('bayar', 'Data berhasil disimpan');
    }
}
