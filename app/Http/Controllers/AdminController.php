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

    

    public function editadmin($id){
        $users = \App\Register::find($id);
        return view('admin.editadmin', ['users' => $users]);
    }

    

    public function updateadmin(Request $request, $id){
        //dd($request->all());
        $users = \App\Register::find($id);
        //$users->password = bcrypt($users->password);
        $users->update($request->all());
        return redirect('/dataku/{id}')->with('sukses', 'data berhasil diubah');
    }

    public function IndexVerifikasi(){
        $user= DB::table('user')->join('ca_investor','user.id_user','=','ca_investor.id_user')->join('alamat','ca_investor.id_alamat','=','alamat.id_alamat')->get();
        $user2= DB::table('user')->join('ca_farmer','user.id_user','=','ca_farmer.id_user')->join('alamat','ca_farmer.id_alamat','=','alamat.id_alamat')->get();
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
        
        return redirect('/dashboard');
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
        
        return redirect('/dashboard');
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
