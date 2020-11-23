<?php

namespace App\Http\Controllers;

use App\Chat;
use App\m_Mitra;
use App\m_Registrasi;
use Illuminate\Http\Request;

class c_Mitra extends Controller
{
    public function klikMenuMitra($id) {
        
        $data = m_Mitra::join('alamat','ca_farmer.id_alamat','=','alamat.id_alamat')->where('id_petani',$id)->get();
        // dd($data);
        return view('investor.v_detail_mitra',['mitra'=>$data]);
    }

    public function klikTombolChat() {
        
        // $data = m_Mitra::join('alamat','ca_farmer.id_alamat','=','alamat.id_alamat')->where('id_petani',$id)->get();
        // dd($data);
        return view('investor.v_chat');
    }

    public function fetchMessages()
    {
        return Chat::with('user')->get();
    }
   
    public function privateMessages(m_Registrasi $user)
    {
        $privateCommunication= Chat::with('user')
        ->where(['id_user'=> auth()->id(), 'receiver_id'=> $user->id])
        ->orWhere(function($query) use($user){
            $query->where(['user_id' => $user->id, 'receiver_id' => auth()->id()]);
        })
        ->get();

        return $privateCommunication;
    }

    public function sendMessage(Request $request)
    {


        if(request()->has('file')){
            $filename = request('file')->store('chat');
            $message=Chat::create([
                'user_id' => request()->user()->id,
                'image' => $filename,
                'receiver_id' => request('receiver_id')
            ]);
        }else{
            $message = auth()->user()->messages()->create(['message' => $request->message]);

        }


        broadcast(new MessageSent(auth()->user(),$message->load('user')))->toOthers();
        
        return response(['status'=>'Message sent successfully','message'=>$message]);

    }

    public function sendPrivateMessage(Request $request,m_Registrasi $user)
    {
        if(request()->has('file')){
            $filename = request('file')->store('chat');
            $message=Chat::create([
                'user_id' => request()->user()->id,
                'image' => $filename,
                'receiver_id' => $user->id
            ]);
        }else{
            $input=$request->all();
            $input['receiver_id']=$user->id;
            $message=auth()->user()->messages()->create($input);
        }

        broadcast(new PrivateMessageSent($message->load('user')))->toOthers();
        
        return response(['status'=>'Message private sent successfully','message'=>$message]);

    }

}
