<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    protected $fillable=[
        'nama_petani',
        'no_ponsel_petani',
        'tanggal_lahir_petani',
        'jenis_kelamin',
        'jenis_identitas',
        'no_identitas_petani',
        'id_alamat',
        'email_petani',
        'foto_ktp_petani',
        'foto_lahan_hidroponik',];

    public function user(){
        return $this->belongsTo('App\Register', 'user_id');
    }
}
