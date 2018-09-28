<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class OrdenTrabajo extends Model
{
    //
    protected $table = 'ordentrabajo';


    protected $primarykey = 'IdOrden';

    //protected $foreingkey = 'IdActor';



    public $timetamps=false;

    protected $fillable =[




          'IdEmpresa',
          'IdMecanico',
          'IdCliente',
          'IdVehiculo',
          'FchCrea',
          'UsrCrea',
          'WksCrea',
          'FchMod',
          'UsrMod',
          'WksMod',
          'FlgEli',
          'EstadoOrden',
          'Obsvacion',
          'FechaRegistro',
          'FechaProgramada',
          'FechaEjecutada',
          'IdTaller'

     ];

    protected $guarded[

    ];
  }
  }
