<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Comandos extends Model
{

      protected $table = 'comandos';


      protected $primarykey = 'IdComandos';

      //protected $foreingkey = 'IdActor';

      public $timetamps=true;
      protected $fillable =[

          'CodTipoComandos',
          'comandos',
          'idModelo'
      ];

      protected $guarded[

      ];
  }
  }
