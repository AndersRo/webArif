<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Contrato_Ordenes extends Model
{

  protected $table = 'contrato_ordenes';
  protected $primaryKey = 'IdContrato';
  public $timestamps=false;

  protected $fillable =[
    'IdContrato',
    'IdOrden',
    'FchCrea',
    'UsrCrea',
    'WksCrea',
    'FchMod',
    'WksMod',
    'UsrMod',
    'FlgEli'
  ];

  protected $guarded=[

  ];

}
