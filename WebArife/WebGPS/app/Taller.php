<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
  protected $table='taller';
  protected $primarykey='IdTaller';
  public $timestamps=false;

  protected $fillable=[
      'IdTaller',
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
