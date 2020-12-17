<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_labaRugi extends Model
{
    public $timestamps = false;
    protected $table = 'laba_rugi';
    protected $fillable=[
        'id_petani',
        'biaya_pengeluaran',
        'jumlah_produk_terjual',
        'harga_terjual_masa_panen',
        'laba_rugi',
        ];
}
