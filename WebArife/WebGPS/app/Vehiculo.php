<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table='vehiculo';
    protected $primaryKey='IdVehiculo';
    public $timestamps=false;

  protected $fillable=[
  'IdVehiculo',
  'Placa',
  'Chasis',
  'Motor',
  'Modelo',
  'Color',
  'FchCrea',
  'UsrCrea',
  'WksCrea',
  'FchMod',
  'UsrMod',
  'WksMod',
  'FlgEli',
  'RutaReferencia',
  'RutaTarjeta',
  'IdEmpresa'
];

protected $guarded=[

    ];
}
