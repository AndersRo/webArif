<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
  protected $table = 'modelo';


  protected $primarykey='idActor';

  public $timestamps = false;

  protected $fillable =[
<<<<<<< HEAD
      'Descripcion',
      'FchCrea',
      'UsrCrea',
      'WksCrea',
      'FchMod',
      'WksMod',
      'FlgEli',
      'FotoReferencial',
      'IdMarca',
=======

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
>>>>>>> 19fa0cf9cdfeaf118450d3df9563d1e00d6b5e1b

  ];
 protected $guarded = [

    ];
}
