<?php

namespace webGps\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Contrato_OrdenesFormRequest extends FormRequest
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
      'IdContrato'=>'required|max:11|',
      'IdOrden'=>'required|max:11',
      'FchCrea'=>'max:19',
      'UsrCrea'=>'required|max:30',
      'WksCrea'=>'required|max:30',
      'FchMod'=>'max:19',
      'WksMod'=>'required|max:30',
      'UsrMod'=>'required|max:30',
      'FlgEli'=>'max:1',

        ];
    }
}
