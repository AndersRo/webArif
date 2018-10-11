<?php

namespace webGps\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdenTrabajoFormRequest extends FormRequest
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
     *
     *
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

                    'IdEmpresa'=>'required|max:11',
                    'IdMecanico'=>'required|max:11',
                    'IdCliente'=>'required|max:11',
                    'IdVehiculo'=>'required|max:11',
                    'FchCrea'=>'max:19',
                    'UsrCrea'=>'max:30',
                    'WksCrea'=>'max:30',
                    'FchMod'=>'max:19',
                    'UsrMod'=>'max:30',
                    'WksMod'=>'max:30',
                    'FlgEli'=>'max:1',
                    'EstadoOrden'=>'required|max:6',
                    'Obsvacion'=>'required|max:250',
                    'FechaRegistro'=>'required|max:20',
                    'FechaProgramada'=>'required|max:20',
                    'FechaEjecutada'=>'required|max:20',
                    'IdTaller'=>'required|max:11'
        ];
    }
}
