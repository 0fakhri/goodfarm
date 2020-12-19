<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_penilaian extends Model
{
    public $timestamps = false;
    protected $table = 'penilaian';
    protected $fillable=[
        'id_investor',
        'petani_id',
        'bintang',
        'komentar',
    ];
}
