<?php

namespace App\Http\Controllers;

use App\m_Investor;
use App\m_Mitra;
use App\m_Registrasi;
use App\m_transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class c_transaksi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function showFormInvestasi($id)
    {
        $data = m_Mitra::where('id_petani',$id)->get();
        // dd($data);
        return view('investor.v_investasi',['mitra'=>$data]);
    }

    public function showInvestasi($id)
    {
        $data = m_transaksi::join('ca_investor','transaksi.id_investor','=','ca_investor.id_investor')->where(['transaksi.id_transaksi'=>$id, 'transaksi.status'=>'Diterima'])->get();
        // dd($data);
        return view('petani.v_detailInves',['trans'=>$data]);
    }

    public function showNotif()
    {
        $id = Auth()->id();
        
        $getid = m_Registrasi::join('ca_farmer','users.id','=','ca_farmer.id_user')->where('id_user',$id)->get();
        foreach($getid as $li){
            $idnya = $li->id_petani;
        }
        // dd($idnya);
        $data = m_transaksi::where(['id_petani'=>$idnya, 'status'=>'Diterima'])->get();
        // dd($data);
        return view('petani.v_notifikasi',['trans'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveTransaction(Request $request)
    {
        $id = Auth()->User()->id;
        $idInve = m_Investor::where('id_user',$id)->first();
        // dd($idInve->id_investor);
        $request->validate([
            'jumlah' => 'required',
            'bank' => 'required',
            'img' => 'required',
        ],[
            'jumlah.required' => 'form masih ada yang kosong',
            'bank.required' => 'form masih ada yang kosong',
            'img.required' => 'form masih ada yang kosong',
        ]);
        $file = $request->file('img');
            $name = time();
            $extension = $file->getClientOriginalExtension();
            $newName = $name . '.' .$extension;
            Storage::putFileAs('public/img', $request->file('img'), $newName);

        m_transaksi::create([
            'id_investor' => $idInve->id_investor,
            'id_petani' => $request['idPetani'],
            'jumlah_modal' => $request['jumlah'],
            'nama_bank' => $request['bank'],
            'bukti_pembayaran' => 'storage/img/' . $newName,
        ]);

        return redirect('/investor/dashboard')->with('sukses','transaksi berhasil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\m_transaksi  $m_transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(m_transaksi $m_transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\m_transaksi  $m_transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(m_transaksi $m_transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\m_transaksi  $m_transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, m_transaksi $m_transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\m_transaksi  $m_transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(m_transaksi $m_transaksi)
    {
        //
    }
}
