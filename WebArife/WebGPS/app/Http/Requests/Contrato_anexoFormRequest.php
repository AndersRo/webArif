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
          'IdContrato ',
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
    }
}
