<?php

namespace webGps\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccesosPlataformaFormRequest extends FormRequest
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
          'IdAcceso'=>'required|max:11',
          'IdCliente'=>'required|max:11',
          'FlgAccesoApp'=>'required|max:1',
          'FlgAccesoWeb'=>'required|max:1',
          'IdEmpresa'=>'required|max:11',
          'MaxConexiones'=>'required|max:11',
          'LoginAcceso'=>'required|max:30',
          'ContrasnaPlataforma'=>'required|max:30',
          'ContrasenaComados'=>'required|max:30',
          'FchCrea'=>'max:19',
          'WksCrea'=>'max:30',
          'UsrCrea'=>'max:30',
          'FchMod'=>'max:19',
          'WksMod'=>'max:30',
          'UsrMod'=>'max:30',
          'FlgEli'=>'max:1',
          'EstadoAcceso'=>'required|max:18'
        ];
    }
}
