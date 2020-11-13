<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_Investor extends Model
{
    public $timestamps = false;
    protected $table = 'ca_investor';
    protected $fillable=[
        'id_user',
        'nama_investor',
        'no_ponsel_investor',
        'tanggal_lahir_investor',
        'jenis_kelamin',
        'jenis_identitas',
        'no_identitas_investor',
        'id_alamat',
        'email_investor',
        'foto_ktp_investor',];

    public function user(){
        return $this->belongsTo('App\Register', 'id_user');
    }
}
