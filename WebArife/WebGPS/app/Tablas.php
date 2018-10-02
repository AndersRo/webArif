<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Tablas extends Model
{
      protected $table = 'tablas';
      protected $primarykey = 'IdTabla';
      public $timestamps=false;

      protected $fillable =[
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