<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class UsuarioOpciones extends Model
{
      protected $table = 'usuariosopciones';
      protected $primarykey = 'IdUsuariosOpciones';
      public $timestamps=false;

      protected $fillable=[
          'IdOpciones',
          'Id'
      ];

      protected $guarded=[

     ];
}
