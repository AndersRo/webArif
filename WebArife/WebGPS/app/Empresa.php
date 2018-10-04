<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
  protected $table = 'empresa';
  protected $primaryKey = 'IdEmpresa';

  public $timestamps=false;

  protected $fillable =[
    'IdEmpresa',
    'RUC',
    'RazonSocial',
    'NombreComercial',
    'UsrCrea',
    'WksCrea',
    'FchCrea',
    'FchMod',
    'UsrMod',
    'WksMod',
    'FlgEli',
    'Representante'
  ];

  protected $guarded=[

  ];
}
