<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class AccesoPlataformaComandos extends Model
{
    protected $table='accesoplataformacomandos';
    protected $primaryKey='IdAccesoComandos';
    public $timestamps=false;

    protected $fillable=[
      'IdAccesoComandos',
      'IdAccesoDetalle',
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
