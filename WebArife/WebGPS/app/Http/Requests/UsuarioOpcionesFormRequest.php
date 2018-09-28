<?php

namespace webGps\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioOpcionesFormRequest extends FormRequest
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
          'IdOpciones'=>'required|max:18',
          'Id'=>'required|max:11',
        ];
    }
}
