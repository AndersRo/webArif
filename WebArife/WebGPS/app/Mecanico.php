<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Mecanico extends Model
{

  protected $table = 'mecanico';



  protected $primarykey='idMecanico';
  public $timestamps = false;

  protected $fillable =[
       'idActor',
       'FchCrea',
       'UsrCrea',
       'WksCrea',
       'UsrMod',
       'FchMod',
       'WksMod',
       'FlgEli'




  ];
  protected $guarded = [

    ];
 }
