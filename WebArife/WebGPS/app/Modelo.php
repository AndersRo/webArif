<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
  protected $table = 'dispositivos';



  protected $primarykey='idModelo';
  public $timestamps = false;

  protected $fillable =[
      'Descripcion',
      'FchCrea',
      'UsrCrea',
      'WksCrea',
      'FchMod',
      'WksMod',
      'FlgEli',
      'FotoReferencial',
      'idMarca',

  ];
 protected $guarded = [

    ];
}
