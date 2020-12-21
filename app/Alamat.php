<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    public $timestamps = false;
    protected $table = 'alamat';
    protected $fillable = ['alamat'];

    public function farmer()
        {
            return $this->hasOne('App\Farmer', 'id_petani');
        }
    
    public function investor()
    {
        return $this->hasOne('App\Investor', 'id_investor');
    }
}
