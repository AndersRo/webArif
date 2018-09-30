<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Contrato_Anexo extends Model
{

  protected $table = 'contrato_anexo';
  protected $primarykey = 'IdContrato_Anexo';

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
