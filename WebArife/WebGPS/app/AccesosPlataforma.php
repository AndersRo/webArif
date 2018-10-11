<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class AccesosPlataforma extends Model
{
    protected $table = 'accesosplataforma';
    protected $primaryKey = 'IdAcceso';
    public $timestamps=false;

    protected $fillable=[
      'IdAcceso',
      'IdCliente',
      'FlgAccesoApp',
      'FlgAccesoWeb',
      'IdEmpresa',
      'MaxConexiones',
      'LoginAcceso',
      'ContrasnaPlataforma',
      'ContrasenaComandos',
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
