<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    public $timestamps = false;
    protected $table = 'ca_farmer';
    protected $fillable=[
        'id_user',
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

    public function register(){
        return $this->belongsTo('App\Register', 'id_user');
    }
}
