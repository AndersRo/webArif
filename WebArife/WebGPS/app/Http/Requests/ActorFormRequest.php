<?php

namespace webGps\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActorFormRequest extends FormRequest
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
            'TipoPersona'=>'required|MAX:6',
            'Apellido_Paterno'=>'required|MAX:80',
            'Apellido_Materno'=>'required|MAX:80',
            'PrimerNombre'=>'required|MAX:80',
            'SegundoNombre'=>'requided|MAX:80',
            'RazonSocial'=>'MAX:100',
            'TipoDocumento'=>'MAX:6',
            'CodigoIdentificacion'=>'MAX:15',
            'RUC'=>'MAX:11',
            'IdEmpresa'=>'required',
            'FchCrea'=>'required',
            'UsrCrea'=>'required|MAX:30',
            'WksCrea'=>'required|MAX:30',
            'FchMod'=>'required',
            'WksMod'=>'required|MAX:30',
            'UsrMod'=>'required|MAX:30',
            'FlgEli'=>'MAX:1'
        ];
    }
}
