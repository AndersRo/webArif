<?php

namespace webGps\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccesoPlataformaComandosFormRequest extends FormRequest
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
          'IdAccesoDetalle'=>'required|max:11',
          'FchCrea'=>'required|max:10',
          'UsrCrea'=>'required|max:30',
          'WksCrea'=>'required|max:30',
          'FchMod'=>'required|max:10',
          'UsrMod'=>'required|max:30',
          'WksMod'=>'required|max:30',
          'FlgEli'=>'max:1'
        ];
    }
}
