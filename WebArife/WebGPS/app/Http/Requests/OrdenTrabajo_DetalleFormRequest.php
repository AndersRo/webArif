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
            'IdOrdenDetalle'=>'required|max:11',
            'IdOrden'=>'required|MAX:11',
            'IdDispositivo'=>'required|MAX:11',
            'CodTipoTrabajo'=>'required|MAX:6',
            'FchCrea'=>'MAX:19',
            'UsrCrea'=>'MAX:30',
            'WksCrea'=>'MAX:30',
            'FchMod'=>'MAX:19',
            'UsrMod'=>'MAX:30',
            'WksMod'=>'MAX:30',
            'FlgEli'=>'MAX:1',
            'FechaInicio'=>'required|MAX:20',
            'FechaFin'=>'required|MAX:20'
        ];
    }
}
