<?php

namespace App\Http\Controllers;

use App\Investor;
use App\m_Investor;
use App\m_Registrasi;
use App\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class c_Register extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mengeklikMenu()
    {
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    
    public function menyimpanData(Request $data)
    {
        // dd($data);
        $data->validate([
            'username' => 'required|unique:users',
            'password' => 'required',
            'alamat' => 'required',
            'img' => 'required',
            'nama' => 'required',
            'nohp' => 'required',
            'tgllahir'=> 'required',
            'jeniskelamin' => 'required',
            'jenisidentitas' => 'required',
            'noidentitas' => 'required',
            'email' => 'required',
        ],[
            'username.required' => 'Mohon mengisi data dengan lengkap',
            'password.required' => 'Mohon mengisi data dengan lengkap',
            'alamat.required' => 'Mohon mengisi data dengan lengkap',
            'img.required' => 'Mohon mengisi data dengan lengkap',
            'nama.required' => 'Mohon mengisi data dengan lengkap',
            'nohp.required' => 'Mohon mengisi data dengan lengkap',
            'tgllahir.required'=> 'Mohon mengisi data dengan lengkap',
            'jeniskelamin.required' => 'Mohon mengisi data dengan lengkap',
            'jenisidentitas.required' => 'Mohon mengisi data dengan lengkap',
            'noidentitas.required' => 'Mohon mengisi data dengan lengkap',
            'email.required' => 'Mohon mengisi data dengan lengkap',
        ]);
        // dd($data);

        

        if ($data['role'] == "petani") {
            

            $data->validate([
                'selfie' => 'required',
                'logo' => 'required',
                'surat' => 'required',
                'portofolio' => 'required',
                'pernyataan' => 'required',
                'norek' => 'required',
                'tabungan' => 'required',
            ]);

            $user =  m_Registrasi::create([
                'role'      => $data['role'],
                'username'  => $data['username'],
                'password'  => Hash::make($data['password']),
            ]);

            $alamat = \App\Alamat::create([
                    'alamat' => $data['alamat'],
                    'kota' => $data['ddlKota'],
                    'provinsi' => $data['ddlProvinsi'],
            ]);

            $file = $data->file('img');
            $name = time();
            $extension = $file->getClientOriginalExtension();
            $newName = $name . '.' .$extension;

            $file2 = $data->file('img2');
            $name2 = time()+1;
            $extension2 = $file2->getClientOriginalExtension();
            $newName2 = $name2 . '.' .$extension2;

            $file3 = $data->file('selfie');
            $name3 = 'selfie'.time();
            $extension3 = $file3->getClientOriginalExtension();
            $newName3 = $name3 . '.' .$extension3;

            $file4 = $data->file('logo');
            $name4 = 'logo'.time();
            $extension4 = $file4->getClientOriginalExtension();
            $newName4 = $name4 . '.' .$extension4;

            $file5 = $data->file('surat');
            $name5 = 'surat'.time();
            $extension5 = $file5->getClientOriginalExtension();
            $newName5 = $name5 . '.' .$extension5;

            $file6 = $data->file('portofolio');
            $name6 = 'portofolio'.time();
            $extension6 = $file6->getClientOriginalExtension();
            $newName6 = $name6 . '.' .$extension6;

            $file7 = $data->file('pernyataan');
            $name7 = 'pernyataan'.time();
            $extension7 = $file7->getClientOriginalExtension();
            $newName7 = $name7 . '.' .$extension7;

            $file8 = $data->file('tabungan');
            $name8 = 'tabungan'.time();
            $extension8 = $file8->getClientOriginalExtension();
            $newName8 = $name8 . '.' .$extension8;
            // dd($newName,$newName2);
            // dd();
            Storage::putFileAs('public/img', $data->file('img'), $newName);
            Storage::putFileAs('public/img', $data->file('img2'), $newName2);
            Storage::putFileAs('public/img', $data->file('selfie'), $newName3);
            Storage::putFileAs('public/img', $data->file('logo'), $newName4);
            Storage::putFileAs('public/img', $data->file('surat'), $newName5);
            Storage::putFileAs('public/img', $data->file('portofolio'), $newName6);
            Storage::putFileAs('public/img', $data->file('pernyataan'), $newName7);
            Storage::putFileAs('public/img', $data->file('tabungan'), $newName8);

            \App\m_Mitra::create([
                'id_user' => $user->id,
                'nama_petani'    => $data['nama'],
                'no_ponsel_petani'    => $data['nohp'],
                'tanggal_lahir_petani'    => $data['tgllahir'],
                'jenis_kelamin'    => $data['jeniskelamin'],
                'jenis_identitas'   => $data['jenisidentitas'],
                'no_identitas_petani'    => $data['noidentitas'],
                'id_alamat'    => $alamat->id,
                'email_petani'    => $data['email'],
                'foto_ktp_petani'    => 'storage/img/' . $newName,
                'foto_lahan_hidroponik' => 'storage/img/' . $newName2,
                'selfie_ktp' => 'storage/img/' . $newName3,
                'logo_usaha' => 'storage/img/' . $newName4,
                'surat_izin_usaha' => 'storage/img/' . $newName5,
                'portofolio_perusahaan' => 'storage/img/' . $newName6,
                'surat_pernyataan' => 'storage/img/' . $newName7,
                'nomer_rekening' => $data['norek'],
                'foto_halaman_tabungan' => 'storage/img/' . $newName8,
            ]);
        }

        elseif ($data['role'] == "investor") {

            

            $data->validate([
                'pernyataan' => 'required',
            ]);

            $user =  m_Registrasi::create([
                'role'      => $data['role'],
                'username'  => $data['username'],
                'password'  => Hash::make($data['password']),
            ]);

            $alamat = \App\Alamat::create([
                'alamat' => $data['alamat'],
                'kota' => $data['ddlKota'],
                'provinsi' => $data['ddlProvinsi'],
            ]);

            $file = $data->file('img');
            $name = time();
            $extension = $file->getClientOriginalExtension();
            $newName = $name . '.' .$extension;

            $file2 = $data->file('pernyataan');
            $name2 = 'pernyataan'.time();
            $extension2 = $file2->getClientOriginalExtension();
            $newName2 = $name2 . '.' .$extension2;

            // dd($newName2);
            Storage::putFileAs('public/img', $data->file('img'), $newName);
            Storage::putFileAs('public/img', $data->file('img'), $newName2);
            

            \App\m_Investor::create([
                'id_user' => $user->id,
                'nama_investor'    => $data['nama'],
                'no_ponsel_investor'    => $data['nohp'],
                'tanggal_lahir_investor'    => $data['tgllahir'],
                'jenis_kelamin'    => $data['jeniskelamin'],
                'jenis_identitas'    => $data['jenisidentitas'],
                'no_identitas_investor'    => $data['noidentitas'],
                'id_alamat'    => $alamat->id,
                'email_investor'    => $data['email'],
                'foto_ktp_investor'    => 'storage/img/' . $newName,
                'surat_pernyataan' => 'storage/img/' . $newName2,
            ]);
            
        }
        
        return redirect('login')->with('reg', 'Selamat anda berhasil membuat akun');;
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Investor  $investor
     * @return \Illuminate\Http\Response
     */
    public function edit(m_Investor $investor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Investor  $investor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, m_Investor $investor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Investor  $investor
     * @return \Illuminate\Http\Response
     */
    public function destroy(m_Investor $investor)
    {
        //
    }
}
