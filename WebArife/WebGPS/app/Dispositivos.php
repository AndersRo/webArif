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
        'idModelo',
        'NroSim',
        'NroIDN',
        'idEmpresa',
    ];
   protected $guarded = [

  ];
}
