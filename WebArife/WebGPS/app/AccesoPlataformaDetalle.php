<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class AccesoPlataformaDetalle extends Model
{
  protected $table='accesoplataformadetalle';
  protected $primarykey='IdAccesoDetalle';

  public $timestamps=false;

  protected $fillable=[
    'IdAcceso',
    'IdContrato'
    'FchCrea',
    'UsrCrea',
    'WksCrea',
    'FchMod',
    'UsrMod',
    'WksMod',
    'FlgEli'
  ];

  protected $guarded=[

  ];
}
