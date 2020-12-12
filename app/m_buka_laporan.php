<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_buka_laporan extends Model
{
    public $timestamps = false;
    protected $table = 'buka_laporan';
    protected $fillable=[
        'petani_id',
        'nama_tanaman',
        'foto',
        'hasil_petani',
        'hasil_investor',
        'harga_perbenih',
        'total_lot',
        'periode'];
}
