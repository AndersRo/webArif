<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'IdCliente';
    public $timestamps=false;

    protected $fillable=[
      'IdCliente',
      'IdActor',
    	'FchCrea',
    	'UsrCrea',
    	'WksCrea',
    	'FchMod',
    	'WksMod',
    	'UsrMod',
    	'FlgEli'
    ];

    protected $guarded=[

    ];
}
