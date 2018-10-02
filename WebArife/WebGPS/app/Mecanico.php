<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Mecanico extends Model
{
  protected $table = 'mecanico';
  protected $primarykey='IdMecanico';
  public $timestamps = false;

  protected $fillable =[
       'IdMecanico',
       'IdActor',
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
