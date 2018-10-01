<?php

namespace webGps\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioFormRequest extends FormRequest
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
          /*'name' => 'required|string|max:255',
          'login' => 'required|string|login|max:255|unique:users',
          'password' => 'required|string|min:6|confirmed'*/
          'login'=>'required|max:30'
          'password'=>'required|string|login|max:255|unique:users',
          'createt_at'=>'max:10',
          'updated_at'=>'max:10',
          'IdEmpresa'=>'required|max:11',
          'IdActor'=>'required|max:11'
        ];
    }
}
