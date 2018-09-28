<?php

namespace webGps\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdenTrabajo_DetalleFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          
            //
            'IdOrden',=>'required|MAX:11',
            'IdDispositivo'=>'required|MAX:11',,
            'CodTipoTrabajo'=>'required|MAX:6',,
            'FchCrea'=>'required|MAX:10',,
            'UsrCrea'=>'required|MAX:30',,
            'WksCrea'=>'required|MAX:30',,
            'FchMod'=>'required|MAX:10',,
            'UsrMod'=>'required|MAX:30',,
            'WksMod'=>'required|MAX:30',,
            'FlgEli'=>'required|MAX:1',,
            'FechaInicio'=>'required|MAX:10',,
            'FechaFin'=>'required|MAX:10'
        ];
    }
}
