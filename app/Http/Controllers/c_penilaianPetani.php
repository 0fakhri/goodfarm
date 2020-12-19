<?php

namespace App\Http\Controllers;

use App\m_Mitra;
use App\m_penilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class c_penilaianPetani extends Controller
{
    public function showDataPenilaian()
    {
        $idUser = Auth::user()->id;
        $get = m_Mitra::where('id_user',$idUser)->get();
        foreach($get as $li){
            $id = $li->id_petani;
        }
        $review = m_penilaian::join('ca_farmer', 'penilaian.petani_id', '=', 'ca_farmer.id_petani')->join('ca_investor', 'penilaian.id_investor', '=', 'ca_investor.id_investor')->where(['id_petani'=>$id])->get();
        // dd($review);
        return view('petani.v_penilaianPetani', compact('review'));
    }
}
