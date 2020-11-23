<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_transaksi extends Model
{
    public $timestamps = false;
    protected $table = 'transaksi';
    protected $fillable = [
        'id_investor','id_petani','jumlah_modal','nama_bank','bukti_pembayaran','status',
    ];
    
    public function investor(){
        return $this->belongsTo(m_Investor::class);
    }
}
