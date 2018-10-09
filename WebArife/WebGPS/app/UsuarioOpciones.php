<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class UsuarioOpciones extends Model
{
      protected $table = 'usuariosopciones';
      protected $primaryKey = 'IdUsuariosOpciones';
      public $timestamps=false;

      protected $fillable=[
          'IdOpciones',
          'Id'
      ];

      protected $guarded=[

     ];
}
