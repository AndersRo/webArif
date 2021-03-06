<?php

namespace webGps;

use Illuminate\Database\Eloquent\Model;

class Contrato_Anexo extends Model
{

  protected $table = 'contrato_anexo';
  protected $primaryKey = 'IdContratoAnexo';
  public $timestamps=false;

  protected $fillable =[
      'IdContratoAnexo',
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

  protected $guarded=[

    ];
}
