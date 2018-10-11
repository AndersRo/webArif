<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class AccesoPlataformaDetalle extends Model
{
  protected $table='accesoplataformadetalle';
  protected $primaryKey='IdAccesoDetalle';
  public $timestamps=false;

  protected $fillable=[
    'IdAccesoDetalle',
    'IdAcceso',
    'IdContrato',
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
