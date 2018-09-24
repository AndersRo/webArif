<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
  protected $table = 'Marca';

  protected $primarykey = 'idMarca';

  //protected $foreingkey = 'IdActor';


  public $timetamps=false;

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

  protected $guarded[

  ];
}
