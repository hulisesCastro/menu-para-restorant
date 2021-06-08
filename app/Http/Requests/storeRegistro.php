<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeRegistro extends FormRequest
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
          
                'nombre'=>'required|min:5',
                'mesa'=>'required',
                 'comensales'=>'required'
                 
        ];
    }
public function attributes()
{
    return [];//personalisar errores//
}

public function messages()
{
    return []; //personalisar todo el mensaje//
}


}



