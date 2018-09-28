<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $primarykey = 'IdCliente';
    public $timetamps=false;

    protected $fillable =[
      'IdActor',
    	'FchCrea',
    	'UsrCrea',
    	'WksCrea',
    	'FchMod',
    	'WksMod',
    	'UsrMod',
    	'FlgEli'
    ];

    protected $guarded[

    ];
}
}
