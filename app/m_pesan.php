<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_pesan extends Model
{
    protected $table = 'pesan';
    public $timestamps = false;
    protected $fillable = [
        'id','petani_id','investor_id', 'pesan', 'waktu'
    ];
}
