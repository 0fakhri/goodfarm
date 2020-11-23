<?php

namespace App\Http\Controllers;

use App\m_transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class c_veriftransaksi extends Controller
{
    
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function mengeklikMenu(){
        $user= m_transaksi::join('ca_investor','transaksi.id_investor','=','ca_investor.id_investor')->where('transaksi.status',null)->get();
        // $user2= DB::table('users')->join('ca_farmer','users.id','=','ca_farmer.id_user')->join('alamat','ca_farmer.id_alamat','=','alamat.id_alamat')->where('status',null)->get();
        // dd($user);
        return view('admin.v_veriftransaksi',['data'=>$user]);
    }

    public function diterima(Request $request) {

        DB::table('transaksi')->where('id_investor',$request->id)->update([
            'status' => $request->status,
        ]);
        
        return redirect('/verif-transaksi');
    }

    public function ditolak(Request $request) {

        DB::table('transaksi')->where('id_investor',$request->id)->update([
            'status' => $request->status,
        ]);
        
        return redirect('/verif-transaksi');
    }

    
    //     Mail::send('email', ['nama' => $request->nama, 'pesan' => $request->pesan], function ($message) use ($request)
    //     {
    //         $message->subject($request->judul);
    //         $message->from('goodfarm@gmail.com', '');
    //         $message->to($request->email);
    //     });
    //     Mail::send('isiemail', array('pesan' => $request->pesan) , function($pesan) use($request){
    //         $pesan->to($request->penerima,'Verifikasi')->subject('Pemberitahuan');
    //         $pesan->from(env('MAIL_USERNAME','didikprab@gmail.com'),'Verifikasi Akun email anda');
    //     });
    

    
}
