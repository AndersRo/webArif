<?php

namespace webGps\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DispositivosFormRequest extends FormRequest
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
          'IdDispositivo'=>'required|max:11',
          'Serie'=>'required|max:100',
          'IMEI'=>'required|max:100',
          'IdModelo'=>'required|max:11',
          'NroSim'=>'required|max:15',
          'NroIDN'=>'required|max:50',
          'IdEmpresa'=>'required|max:11'
      ];
    }
}
