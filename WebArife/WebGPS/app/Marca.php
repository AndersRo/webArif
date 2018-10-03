<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
  protected $table = 'marca';
  protected $primarykey = 'IdMarca';

  public $timestamps=false;

  protected $fillable =[
    'IdMarca',
    'Descripcion',
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
