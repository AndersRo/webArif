<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class UsuarioOpciones extends Model
{
    //

          //


          protected $table = 'usuariosopciones';


          protected $primarykey = 'IdUsuariosOpciones';

          //protected $foreingkey = 'IdActor';



          public $timetamps=false;

          protected $fillable =[

            'IdOpciones',
            'Id'



           ];

            protected $guarded[

           ];
         }
      }
