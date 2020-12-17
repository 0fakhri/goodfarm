<?php

namespace App\Http\Controllers;

use App\m_Investor;
use App\m_Mitra;
use App\m_pesan;
use App\m_Registrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class c_dashboard extends Controller
{
    public function klikTombolChat($id) {
        // dd($id);
        
        $user = m_Investor::join('users','ca_investor.id_user','=','users.id')->where('id_investor',$id)->get();
        foreach($user as $li){
            $idnya = $li->id_user; 
        }
        $user2 = m_Mitra::where('id_user',Auth::user()->id)->get();
        foreach($user2 as $li){
            $id = $li->id_petani; 
        }
        // $a = m_Registrasi::where('id',auth()->id())->get();
        // dd($idnya);
        // $data = m_pesan::join('users','pesan.investor_id','=','users.id')->where(['pesan.petani_id' => $id, 'pesan.investor_id' => $idnya])->orWhere->where(['pesan.petani_id' => $idnya, 'pesan.investor_id' => $id])->get();
        $data = m_pesan::join('users','pesan.investor_id','=','users.id')->where(['pesan.petani_id' => auth()->id(), 'pesan.investor_id' => $idnya])->orWhere->where(['pesan.petani_id' => $idnya, 'pesan.investor_id' => auth()->id()])->get();
        // dd($data);

        return view('petani.v_chat', compact('data','user','user2'));
        // return view('petani.v_chat', ['data'=>$data],['data2'=>$user]);
    }

    public function setPesan(Request $request)
    {
        // $user = m_Mitra::where('id_user',Auth::user()->id)->get();
        // foreach($user as $li){
        //     $id = $li->id_petani; 
        // }
        // dd($request->id , $request->idcv);

        m_pesan::create([
            'petani_id' => $request->idcv,
            'investor_id' => $request->id,
            // 'petani_id' => $id,
            // 'investor_id' => $request->idcv,
            'pesan' => $request->pesan,
            'waktu' => date("Y-m-d H:i:s")
        ]);

        return redirect('/petani/pesan/'.$request->idurl.'/chat');

    }
}
