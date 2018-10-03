<?php

namespace webGps\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComandosFormRequest extends FormRequest
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
            'IdComandos'=>'required|max:11',
            'CodTipoComandos'=>'required|max:6',
            'Comandos'=>'required|max:50',
            'IdModelo'=>'required|max:11'
        ];
    }
}
