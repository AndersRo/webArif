<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
  protected $table = 'modelo';
  protected $primaryKey='IdModelo';

  public $timestamps = false;

  protected $fillable =[
      'IdModelo',
      'Descripcion',
      'FchCrea',
      'UsrCrea',
      'WksCrea',
      'FchMod',
      'WksMod',
      'FlgEli',
      'FotoReferencial',
      'IdMarca'
  ];
 protected $guarded = [

    ];
}
