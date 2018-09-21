<?php

namespace webGps\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteFormRequest extends FormRequest
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
            'FchCrea' => 'required|max:10',
            'UsrCrea' => 'required|max:30',
            'WksCrea' => 'required|max:30',
            'FchMod' => 'required|max:10',
            'WksMod' => 'required|max:30',
            'UsrMod' => 'required|max:30',
            'FlgEli' => 'required|max:1'
        ];
    }
}