
<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Tablas_Detalle extends Model
{
    protected $table='tablas_detalle',


    protected $primarykey='IdTablaDetalle',

    publis $timetamps='false',

    protected $fillable=[



       ];
       protected $guarded[
         'IdTabla'
         'Descripcion',
         'FchCrea',
         'UsrCrea',
         'WksCrea',
         'FchMod',
         'UsrMod',
         'WksMod',
         'FlgEli'

      ];
    }
 }
