<?php

namespace App\Http\Controllers;

use App\Alamat;
use App\m_Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class c_profil_petani extends Controller
{
    public function klikMenuProfil()
    {
        $idUser = Auth()->user()->id;
        // dd($idUser);
        $user = m_Mitra::join('alamat','ca_farmer.id_alamat','=','alamat.id_alamat')->where('id_user', $idUser)->get();
        // dd($user);
        return view('petani.v_profil_petani',['data'=>$user]);
    }

    public function saveDataInvestor(Request $data)
    {
        $id = $data['id'];
        // dd($data['idAlamat']);
        $data->validate([
            'alamat' => 'required',
            'ddlKota' => 'required',
            'ddlProvinsi' => 'required',
            'nama' => 'required',
            'nohp' => 'required',
            'tgllahir'=> 'required',
            'jeniskelamin' => 'required',
            'jenisidentitas' => 'required',
            'noidentitas' => 'required',
            'email' => 'required',
        ],[
            'alamat.required' => 'Form harus diisi',
            'ddlKota.required' => 'Form harus diisi',
            'ddlProvinsi.required' => 'Form harus diisi',
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
            'kota' => $data['ddlKota'],
            'provinsi' => $data['ddlProvinsi'],
        ]);

        return redirect('/petani/profil');
    }
}
