<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class UsuarioEmpresa extends Model
{
      protected $table='usuarioempresa',
      protected $primarykey='IdUsuarioEmpresa',
      public $timestamps='false',

      protected $fillable=[
          'Id'
         ];

         protected $guarded=[
        ];
}
