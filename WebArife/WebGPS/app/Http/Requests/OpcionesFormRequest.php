<?php

namespace webGps\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OpcionesFormRequest extends FormRequest
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
          'Idparent' => 'required|max:18',
          'Nombre' => 'required|max:18',
          'Ruta' => 'required|max:18',
          'Icono ' => 'required|max:18'

        ];
    }
}
