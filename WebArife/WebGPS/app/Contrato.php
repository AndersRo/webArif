<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{

  protected $table = 'contrato';
  protected $primaryKey='IdContrato';
  public $timestamps = false;

  protected $fillable =[

    'CodTipoServicio',
    'Fechainicio'.
    'Fechafin',
    'IdCliente',
    'CodTipoContrato',
    'idEmpresa',
    'idVehiculo',
    'EstadoContrato',
    'FchCrea',
    'UsrCrea',
    'WksCrea',
    'FchMod',
    'UsrMod',
    'WksMod',
    'FlgEli'

  ];
      protected $guarded = [

    ];
  }
