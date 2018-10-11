<?php

namespace webGps\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContratoFormRequest extends FormRequest
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
          'IdContrato'=>'required|max:11',
          'CodTipoServicio'=>'required|max:6',
          'FechaInicio'=>'required|max:19',
          'FechaFin'=>'max:19',
          'IdCliente'=>'required|max:11',
          'CodTipoContrato'=>'required|max:6',
          'IdEmpresa'=>'required|max:11',
          'IdVehiculo'=>'required|max:11',
          'EstadoContrato'=>'required|max:6',
          'FchCrea'=>'max:19',
          'UsrCrea'=>'max:30',
          'WksCrea'=>'max:30',
          'FchMod'=>'max:19',
          'UsrMod'=>'max:30',
          'WksMod'=>'max:30',
          'FlgEli'=>'max:1'
        ];
    }
}
