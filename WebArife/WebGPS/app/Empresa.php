<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
  protected $table = 'empresa';
  protected $primarykey = 'IdEmpresa';

  public $timetamps=false;

  protected $fillable =[
    'RUC'
    'RazonSocial',
    'NombreComercial',
    'UsrCrea',
    'WksCrea',
    'FchCrea',
    'FchMod',
    'UsrMod',
    'WksMod',
    'FlgEli',
    'Respresentante'
  ];

  protected $guarded[

  ];
}
