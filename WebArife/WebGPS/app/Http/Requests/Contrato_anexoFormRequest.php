<?php

namespace webGps\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Contrato_AnexoFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'IdContratoAnexo'=>'required|max:6',
          'IdContrato'=>'required|max:11',
          'CodDocumentoAnexo'=>'required|max:6',
          'RutaDocumento'=>'required|max:250',
          'FchCrea'=>'max:19',
          'UsrCrea'=>'max:30',
          'WksCrea'=>'max:30',
          'FchMod'=>'max:19' ,
          'UsrMod'=>'max:30',
          'WksMod'=>'max:30',
          'FlgEli'=>'max:1'
        ];
    }
}
