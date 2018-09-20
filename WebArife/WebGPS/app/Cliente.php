<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    
    protected $primarykey = 'IdCliente';

    protected $foreingkey = 'IdActor';
    
    public $timetamps=false;

    protected $fillable =[
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
