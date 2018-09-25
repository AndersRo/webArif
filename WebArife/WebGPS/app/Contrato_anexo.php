<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Contrato_anexo extends Model
{

  protected $table = 'contrato_anexo';



  protected $primarykey = 'IdContrato_Anexo';

  //protected $foreingkey = 'IdActor';



  public $timetamps=false;

  protected $fillable =[
      'IdContrato',
      'CodDocumentoAnexo',
      'RutaDocumento',
      'FchCrea',
      'UsrCrea',
      'WksCrea',
      'FchMod',
      'UsrMod',
      'WksMod',
      'FlgEli'
  ];

  protected $guarded[

    ];
  }
}
