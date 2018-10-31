<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{

  protected $table = 'users';
  protected $primaryKey = 'Id';
  public $timestamps=false;

  protected $fillable =[
    'id',
    'login',
    'password',
    'createt_at',
    'updated_at',
    'IdEmpresa',
    'IdActor',
  ];

  protected $guarded=[

  ];
}
