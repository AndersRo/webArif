<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Dispositivos extends Model
{
    protected $table = 'dispositivos';
    protected $primaryKey='IdDispositivo';

    public $timestamps = false;

    protected $fillable=[
        'IdDispositivo',
        'Serie',
        'IMEI',
        'IdModelo',
        'NroSim',
        'NroIDN',
        'IdEmpresa',
    ];
   protected $guarded = [

  ];
}
