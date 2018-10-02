<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
  protected $table = 'marca';

  protected $primarykey = 'idMarca';

  //protected $foreingkey = 'IdActor';


  public $timestamps=false;

  protected $fillable =[
    'Descripcion'
    'UsrCrea',
    'WksCrea',
    'FchMod',
    'UsrMod',
    'WksMod',
    'FlgEli',
    'FchCrea'
  ];

  protected $guarded=[

  ];
}
