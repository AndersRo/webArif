<?php

namespace webGps\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersFormRequest extends FormRequest
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
          'login'=>'required|max:30',
          'password'=>'required|max:255',
          'createt_at'=>'required|max:10',
          'updated_at'=>'required|max:10',
          'IdEmpresa'=>'required|max:11',
          'IdActor'=>'required|max:11',
        ];
    }
}
