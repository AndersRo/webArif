<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Tablas extends Model
{
      protected $table = 'tablas';
      protected $primaryKey = 'IdTabla';
      public $timestamps=false;

      protected $fillable =[
        'IdTabla',
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
