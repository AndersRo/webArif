<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class AccesosPlataforma extends Model
{
    protected $table = 'accesosplataforma';
    protected $primarykey = 'IdAcceso';

    public $timestamps=false;

    protected $fillable=[
      'IdCliente',
      'FlgAccesoApp',
      'FlgAccesoWeb',
      'IdEmpresa',
      'MaxConexiones',
      'LoginAcceso',
      'ContrasnaPlataforma',
      'ContrasenaComados',
      'FchCrea',
      'WksCrea',
      'UsrCrea',
      'FchMod',
      'WksMod',
      'UsrMod',
      'FlgEli',
      'EstadoAcceso'
    ];
    protected $guarded=[

    ];
}
