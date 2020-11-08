<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    

    // public function dataUser(Request $request)
    // {
    //     $admin = \App\Register::all();
    // }

    
    public function index() {
       return view ('admin.dashboard');
    }


    public function IndexVerifikasi(){
        $user= DB::table('users')->join('ca_investor','users.id_user','=','ca_investor.id_user')->join('alamat','ca_investor.id_alamat','=','alamat.id_alamat')->where('status','')->get();
        $user2= DB::table('users')->join('ca_farmer','users.id_user','=','ca_farmer.id_user')->join('alamat','ca_farmer.id_alamat','=','alamat.id_alamat')->where('status','')->get();
        // dd($user2);
        return view('admin.verifikasi',['data'=>$user], ['data2'=>$user2]);
    }

    public function diterima(Request $request) {

        if($request->role == 'investor'){
            DB::table('ca_investor')->where('id_investor',$request->id)->update([
                'status' => $request->status,
            ]);
        }
        elseif($request->role == 'petani'){
            DB::table('ca_farmer')->where('id_petani',$request->id)->update([
                'status' => $request->status,
            ]);
        }

        $data = [];
        Mail::send('admin.email', $data, function($message) use ($request)
            {
                $message->from('do-notreply@domain.com', "Goodfarm");
                $message->subject("Welcome to Goodfarm");
                $message->to($request['email']);
            });
        
        return redirect('/verifikasi');
    }

    public function ditolak(Request $request) {

        if($request->role == 'investor'){
            DB::table('ca_investor')->where('id_investor',$request->id)->update([
                'status' => $request->status,
            ]);
        }
        elseif($request->role == 'petani'){
            DB::table('ca_farmer')->where('id_petani',$request->id)->update([
                'status' => $request->status,
            ]);
        }

        $data = [];
        Mail::send('admin.emailF', $data, function($message) use ($request)
            {
                $message->from('do-notreply@domain.com', "Goodfarm");
                $message->subject("Welcome to Goodfarm");
                $message->to($request['email']);
            });
        
        return redirect('/verifikasi');
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
