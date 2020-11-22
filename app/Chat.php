<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = 'chat';
    protected $guarded=[];
    public function user()
    {
        return $this->belongsTo(m_Registrasi::class);
    }
}
