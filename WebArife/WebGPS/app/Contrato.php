<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{

  protected $table = 'contrato';
  protected $primaryKey='IdContrato';
  public $timestamps = false;

  protected $fillable =[
    'IdContrato',
    'CodTipoServicio',
    'FechaFnicio',
    'FechaFin',
    'IdCliente',
    'CodTipoContrato',
    'IdEmpresa',
    'IdVehiculo',
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
