<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Tablas_Detalle extends Model
{
    protected $table='tablas_detalle';
    protected $primaryKey='IdTablaDetalle';
    public $timestamps=false;

    protected $fillable=[
        'IdTablaDetalle',
        'IdTabla',
        'Descripcion',
        'FchCrea',
        'UsrCrea',
        'WksCrea',
        'FchMod',
        'UsrMod',
        'WksMod',
        'FlgEli'
       ];
    protected $guarded=[

    ];
}
