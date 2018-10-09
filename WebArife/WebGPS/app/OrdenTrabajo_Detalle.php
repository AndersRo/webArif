<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class OrdenTrabajo_Detalle extends Model
{

    protected $table = 'ordentrabajo_detalle';
    protected $primaryKey = 'IdOrdenDetalle';
    public $timestamps=false;

    protected $fillable =[
      'IdOrden',
      'IdDispositivo',
      'CodTipoTrabajo',
      'FchCrea',
      'UsrCrea',
      'WksCrea',
      'FchMod',
      'UsrMod',
      'WksMod',
      'FlgEli',
      'FechaInicio',
      'FechaFin'
    ];

    protected $guarded=[

    ];
  }
