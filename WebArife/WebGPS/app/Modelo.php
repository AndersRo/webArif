<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
  protected $table = 'modelo';
  protected $primarykey='IdActor';

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
      'IdMarca'
  ];
 protected $guarded = [

    ];
}
