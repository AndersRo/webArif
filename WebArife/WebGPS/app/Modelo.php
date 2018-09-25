<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
  protected $table = 'modelo';


  protected $primarykey='idActor';

  public $timestamps = false;

  protected $fillable =[

        'Descripcion',
        'FchCrea',
        'UsrCrea',
        'WksCrea',
        'FchMod',
        'UsrMod',
        'WksMod',
        'FlgEli',
        'FotoReferencial',
        'idMarca'

  ];
 protected $guarded = [

    ];
}
