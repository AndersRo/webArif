<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{

  protected $table = 'users';


  protected $primarykey = 'Id';

  //protected $foreingkey = 'IdActor';



  public $timetamps=false;

  protected $fillable =[
    'login'.
    'password'.
    'createt_at',
    'updated_at',
    'IdEmpresa',
    'IdActor',
  ];

  protected $guarded[

  ];
}
}
