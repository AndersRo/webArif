<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Dispositivos extends Model
{
    protected $table = 'dispositivos';

    protected $primarykey='IdDispositivo';
    public $timestamps = false;

    protected $fillable =[
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
