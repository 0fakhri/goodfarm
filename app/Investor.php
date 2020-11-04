<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    protected $fillable=[
        'nama_petani',
        'no_ponsel_investor',
        'tanggal_lahir_investor',
        'jenis_kelamin',
        'jenis_identitas',
        'no_identitas_investor',
        'id_alamat',
        'email_investor',
        'foto_ktp_investor',];

    public function user(){
        return $this->belongsTo('App\Register', 'user_id');
    }
}
