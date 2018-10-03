<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Comandos extends Model
{
      protected $table = 'comandos';
      protected $primarykey = 'IdComandos';

      public $timestamps=false;

      protected $fillable =[
          'IdComandos',
          'CodTipoComandos',
          'Comandos',
          'IdModelo'
      ];

      protected $guarded=[

      ];
}
