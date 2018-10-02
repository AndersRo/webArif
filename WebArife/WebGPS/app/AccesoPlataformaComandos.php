<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class AccesoPlataformaComando extends Model
{
    protected $table='accesoplataformacomandos';
    protected $primarykey='IdAccesoComandos';
    public $timestamps=false;

    protected $fillable=[
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
