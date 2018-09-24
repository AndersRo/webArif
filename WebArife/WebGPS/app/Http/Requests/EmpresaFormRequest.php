<?php

namespace webGps\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaFormRequest extends FormRequest
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
          'RUC'=>'required|max:11',
          'RazonSocial',=>'required|max:100',
          'NombreComercial',=>'required|max100',
          'RutaLogo',=>'max:250',
          'UsrCrea',=>'required|max:30',
          'WksCrea',=>'required|max:30',
          'FchCrea',=>'max:10',
          'FchMod',=>'max:10',
          'UsrMod',=>'required|max:30',
          'WksMod',=>'required|max:30',
          'FlgEli',=>'required|max:1',
          'Respresentante'=>'max:80'
        ];
    }
}
