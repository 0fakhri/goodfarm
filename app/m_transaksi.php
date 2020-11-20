<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_transaksi extends Model
{
    public $timestamps = false;
    protected $table = 'transaksi';
    protected $fillable = [
        'id_investor','jumlah_modal','nama_bank',
    ];
    
}
