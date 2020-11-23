<?php

namespace App\Http\Controllers;

use App\Alamat;
use App\m_Investor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class c_profil_investor extends Controller
{
    public function klikMenuProfil()
    {
        $idUser = Auth()->User()->id;
        $user = m_Investor::join('alamat','ca_investor.id_alamat','=','alamat.id_alamat')->where('id_user', $idUser)->get();
        // dd($user);
        return view('investor.v_profil_investor',['data'=>$user]);
    }

    public function saveDataInvestor(Request $data)
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
        
        m_Investor::where('id_investor', $id)->update([
                'nama_investor'    => $data['nama'],
                'no_ponsel_investor'    => $data['nohp'],
                'tanggal_lahir_investor'    => $data['tgllahir'],
                'jenis_kelamin'    => $data['jeniskelamin'],
                'jenis_identitas'   => $data['jenisidentitas'],
                'no_identitas_investor'    => $data['noidentitas'],
                'email_investor'    => $data['email'],
            ]);

        Alamat::where('id_alamat' , $data['idAlamat'])->update([
            'alamat' => $data['alamat'],
            // 'kota' => $data['ddlKota'],
            // 'provinsi' => $data['ddlProvinsi'],
        ]);

        return redirect('/investor/profil');
    }

}
