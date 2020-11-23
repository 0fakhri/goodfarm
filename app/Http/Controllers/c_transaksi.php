<?php

namespace App\Http\Controllers;

use App\m_Investor;
use App\m_transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class c_transaksi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function showFormInvestasi()
    {
        return view('investor.v_investasi');
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
        dd($idInve);
        $request->validate([
            'jumlah' => 'required',
            'bank' => 'required',
            'img' => 'required',
        ],[
            'jumlah.required' => 'Mohon mengisi data dengan lengkap',
            'bank.required' => 'Mohon mengisi data dengan lengkap',
            'img.required' => 'Mohon mengisi data dengan lengkap',
        ]);
        $file = $request->file('img');
            $name = time();
            $extension = $file->getClientOriginalExtension();
            $newName = $name . '.' .$extension;
            Storage::putFileAs('public/img', $request->file('img'), $newName);

        m_transaksi::create([
            'id_investor' => $idInve,
            'jumlah_modal' => $request['jumlah'],
            'nama_bank' => $request['bank'],
            'bukti_pembayaran' => 'storage/img/' . $newName,
        ]);
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
