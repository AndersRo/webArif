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
          'IdEmpresa'=>'required|max:11',
          'RUC'=>'required|max:11',
          'RazonSocial'=>'required|max:100',
          'NombreComercial'=>'required|max:100',
          'RutaLogo'=>'mimes:jpeg,bmp,png',
          'UsrCrea'=>'max:30',
          'WksCrea'=>'max:30',
          'FchCrea'=>'max:19',
          'FchMod'=>'max:19',
          'UsrMod'=>'max:30',
          'WksMod'=>'max:30',
          'FlgEli'=>'max:1',
          'Representante'=>'max:80'
        ];
    }
}
