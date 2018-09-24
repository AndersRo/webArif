<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
  protected $table = 'empresa';

  protected $primarykey = 'IdEmpresa';

  //protected $foreingkey = 'IdActor';

  public $timetamps=false;

  protected $fillable =[
    'RUC'
    'RazonSocial',
    'NombreComercial',
    'RutaLogo',
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
