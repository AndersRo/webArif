<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
  protected $table = 'actor';

  protected $primarykey = 'IdActor';

  //protected $foreingkey = 'IdEmpresa';

  public $timetamps=false;

  protected $fillable =[
    'TipoPersona',
    'Apellido_Paterno',
    'Apellido_Materno',
    'PrimerNombre',
    'SegundoNombre',
    'RazonSocial',
    'TipoDocumento',
    'CodigoIdentificacion',
    'RUC',
    'IdEmpresa',
    'FchCrea',
    'UsrCrea',
    'WksCrea',
    'FchMod',
    'WksMod',
    'UsrMod',
    'FlgEli'
  ];

  protected $guarded[

  ];
}
