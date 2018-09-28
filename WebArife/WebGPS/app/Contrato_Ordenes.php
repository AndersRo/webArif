<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Contrato_Ordenes extends Model
{

  protected $table = 'contrato_ordenes';


  protected $primarykey = 'IdContrato';

  //protected $foreingkey = 'IdActor';
  public $timetamps=false;



  protected $fillable =[
    'IdContrato',
    'IdOrden',
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
