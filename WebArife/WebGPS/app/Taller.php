<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{

  protected $table='Taller',


  protected $primarykey='IdTaller',

  publis $timetamps='false',

  protected $fillable=[



     ];
     protected $guarded[

       'Descripcion',
       'FchCrea',
       'UsrCrea',
       'WksCrea',
       'FchMod',
       'UsrMod',
       'WksMod',
       'FlgEli'

    ];
  }
  }
