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
     */
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [



                    'IdEmpresa'=> 'required|max:11',
                    'IdMecanico'=> 'required|max:11',
                    'IdCliente'=> 'required|max:11',
                    'IdVehiculo'=> 'required|max:11',
                    'FchCrea'=> 'required|max:10',
                    'UsrCrea'=> 'required|max:30',
                    'WksCrea'=> 'required|max:30',
                    'FchMod'=> 'required|max:10',
                    'UsrMod'=> 'required|max:30',
                    'WksMod'=> 'required|max:30',
                    'FlgEli'=> 'required|max:1',
                    'EstadoOrden'=> 'required|max:6',
                    'Obsvacion'=> 'required|max:250',
                    'FechaRegistro'=> 'required|max:10',
                    'FechaProgramada'=> 'required|max:10',
                    'FechaEjecutada'=> 'required|max:10',
                    'IdTaller'=> 'required|max:11'
        ];
    }
}
