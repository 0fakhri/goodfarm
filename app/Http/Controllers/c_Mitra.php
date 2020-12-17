<?php

namespace App\Http\Controllers;

use App\Chat;
use App\m_Investor;
use App\m_Mitra;
use App\m_pesan;
use App\m_Registrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class c_Mitra extends Controller
{
    public function klikMenuMitra($id) {
        
        $data = m_Mitra::join('buka_laporan','ca_farmer.id_petani','=','buka_laporan.petani_id')->join('alamat','ca_farmer.id_alamat','=','alamat.id_alamat')->where('id_petani',$id)->get();
        // dd($data);
        return view('investor.v_detail_mitra',['mitra'=>$data]);
    }

    public function klikTombolChat($id) {
        // dd($id);
        
        $user = m_Mitra::join('users','ca_farmer.id_user','=','users.id')->where('id_petani',$id)->get();
        foreach($user as $p){
            $id = $p->id_user; 
        }

        $user2 = m_Investor::where('id_user',Auth::user()->id)->get();
        foreach($user2 as $li){
            $idnya = $li->id_investor; 
        }
        // dd($user2);
        // $data = m_pesan::join('users','pesan.investor_id','=','users.id')->where(['pesan.petani_id' => $id, 'pesan.investor_id' => $idnya])->orWhere->where(['pesan.petani_id' => $idnya, 'pesan.investor_id' => $id])->get();
        $data = m_pesan::join('users','pesan.investor_id','=','users.id')->where(['pesan.petani_id' => auth()->id(), 'pesan.investor_id' => $id])->orWhere->where(['pesan.petani_id' => $id, 'pesan.investor_id' => auth()->id()])->get();
        // foreach($data as $li){
        //     $idnya = $li->petani_id; 
        // }
        // dd($data);
        return view('investor.v_chat', compact('data','user','user2'));
        // return view('investor.v_chat', ['data'=>$data],['data2'=>$user]);
    }

    public function setPesan(Request $request)
    {
        // $user = m_Investor::where('id_user',Auth::user()->id)->get();
        // foreach($user as $li){
        //     $id = $li->id_investor; 
        // }
        // dd($id , $request->idcv);
        m_pesan::create([
            'petani_id' => $request->idcv,
            'investor_id' => $request->id,
            // 'petani_id' => $id,
            // 'investor_id' => $request->idcv,
            'pesan' => $request->pesan,
            'waktu' => date("Y-m-d H:i:s")
        ]);

        return redirect('investor/list-mitra/detail/'.$request->idurl.'/chat');

    }

    // public function fetchMessages()
    // {
    //     return Chat::with('user')->get();
    // }
   
    // public function privateMessages(m_Registrasi $user)
    // {
    //     $privateCommunication= Chat::with('user')
    //     ->where(['id_user'=> auth()->id(), 'receiver_id'=> $user->id])
    //     ->orWhere(function($query) use($user){
    //         $query->where(['user_id' => $user->id, 'receiver_id' => auth()->id()]);
    //     })
    //     ->get();

    //     return $privateCommunication;
    // }

    // public function sendMessage(Request $request)
    // {


    //     if(request()->has('file')){
    //         $filename = request('file')->store('chat');
    //         $message=Chat::create([
    //             'user_id' => request()->user()->id,
    //             'image' => $filename,
    //             'receiver_id' => request('receiver_id')
    //         ]);
    //     }else{
    //         $message = auth()->user()->messages()->create(['message' => $request->message]);

    //     }


    //     broadcast(new MessageSent(auth()->user(),$message->load('user')))->toOthers();
        
    //     return response(['status'=>'Message sent successfully','message'=>$message]);

    // }

    // public function sendPrivateMessage(Request $request,m_Registrasi $user)
    // {
    //     if(request()->has('file')){
    //         $filename = request('file')->store('chat');
    //         $message=Chat::create([
    //             'user_id' => request()->user()->id,
    //             'image' => $filename,
    //             'receiver_id' => $user->id
    //         ]);
    //     }else{
    //         $input=$request->all();
    //         $input['receiver_id']=$user->id;
    //         $message=auth()->user()->messages()->create($input);
    //     }

    //     broadcast(new PrivateMessageSent($message->load('user')))->toOthers();
        
    //     return response(['status'=>'Message private sent successfully','message'=>$message]);

    // }

}
