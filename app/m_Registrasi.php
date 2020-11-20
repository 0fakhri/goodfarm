<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class m_Registrasi extends Authenticatable
{
    use Notifiable;
    public $timestamps = false;
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $guarded = [];
    protected $fillable = [
        'role', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    
    public function farmer()
        {
            return $this->hasOne('m_Mitra::class');
        }
    
    // public function investor()
    // {
    //     return $this->hasOne('App\m_Investor', 'id_user');
    // }
}
