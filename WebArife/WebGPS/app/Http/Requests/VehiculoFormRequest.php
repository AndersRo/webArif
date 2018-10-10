<?php

namespace webGps\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiculoFormRequest extends FormRequest
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
            'IdVehiculo'=>'required|max:11',
            'Placa'=>'required|max:15',
            'Chasis'=>'required|max:50',
            'Motor'=>'required|max:50',
            'Modelo'=>'required|max:100',
            'Color'=>'required|max:100',
            'FchCrea'=>'max:19',
            'UsrCrea'=>'required|max:30',
            'WksCrea'=>'required|max:30',
            'FchMod'=>'max:19',
            'UsrMod'=>'required|max:30',
            'WksMod'=>'required|max:30',
            'FlgEli'=>'max:1',
            'RutaReferencia'=>'required|max:18',
            'RutaTarjeta'=>'required|max:18',
            'IdEmpresa'=>'required|max:11'

        ];
    }
}
