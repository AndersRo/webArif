<?php

namespace webGps\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarcaFormRequest extends FormRequest
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
          'IdMarca'=>'required|max:11',
          'Descripcion'=>'required|max:100',
          'UsrCrea'=>'required|max:30',
          'WksCrea'=>'required|max:30',
          'FchMod'=>'max:19',
          'UsrMod'=>'required|max:30',
          'WksMod'=>'required|max:30',
          'FlgEli'=>'max:1',
          'FchCrea'=>'max:19'
        ];
    }
}
