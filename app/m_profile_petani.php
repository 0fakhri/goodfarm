<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_profile_petani extends Model
{
    public $timestamps = false;
    protected $table = 'laporan_kondisi_hidroponik';
    protected $fillable=[
        'petani_id',
        'benih_awal',
        'benih_ditanam',
        'benih_mati',
        'foto_perkembangan',
        'video_perkembangan',
        'harga_total_tanaman',
        'tanggal',];
}
