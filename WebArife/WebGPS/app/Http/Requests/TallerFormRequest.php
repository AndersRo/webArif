<?php

namespace webGps\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TallerFormRequest extends FormRequest
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

             'Descripcion'=>'required|max:80|',
             'FchCrea'=>'required|max:10|',
             'UsrCrea'=>'required|max:30|',
             'WksCrea'=>'required|max:30|',
             'FchMod'=>'required|max:10|',
             'UsrMod'=>'required|max:30|',
             'WksMod'=>'required|max:30|',
             'FlgEli'=>'required|max:1|'

        ];
    }
}
