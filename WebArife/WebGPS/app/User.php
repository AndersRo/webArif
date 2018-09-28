<?php

namespace webGps;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //use Notifiable;
     protected $table='users';
     protected $primarykey='id';
     protected $fillable = [
        /*'name', 'email', 'password',*/
        'login',
        'password',
        'createt_at',
        'updated_at',
        'IdEmpresa',
        'IdActor'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
