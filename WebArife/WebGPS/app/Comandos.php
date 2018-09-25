<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Comandos extends Model
{

      protected $table = 'comandos';
      protected $primarykey = 'IdComandos';

      public $timetamps=true;

      protected $fillable =[
          'CodTipoComandos',
          'comandos',
          'IdModelo'
      ];

      protected $guarded[

      ];
  }
  }
