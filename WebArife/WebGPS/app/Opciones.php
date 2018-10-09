<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Opciones extends Model
{

    protected $table = 'opciones';
    protected $primaryKey = 'IdOpciones';
    public $timestamps=false;

    protected $fillable =[
      'IdParent',
      'Nombre',
      'Ruta',
      'Icono'
    ];

    protected $guarded=[

    ];
}
