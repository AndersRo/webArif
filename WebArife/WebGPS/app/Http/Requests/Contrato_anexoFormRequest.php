<?php

namespace webGps\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Contrato_anexoFormRequest extends FormRequest
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
          'CodTipoServicio'=>'required|max:6',
          'IdContrato '=>'required|max:11',
          'CodDocumentoAnexo'=>'required|max:6',
          'RutaDocumento'=>'required|max:250',
          'FchCrea'=>'required|max:10',
          'UsrCrea'=>'required|max:30',
          'WksCrea'=>'required|max:30',
          'FchMod'=>'required|max: 10' ,
          'UsrMod'=>'required|max:30',
          'WksMod'=>'required|max:30',
          'FlgEli'=>'max:1'
        ];
    }
}
