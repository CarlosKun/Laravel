<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateArticuloRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    //Valida que usuarios estan autorizados para llenar el formulario 
    public function authorize()
    { 
        return true; //Debe ser true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()     //Hay mas validaciones en Laravel.com/5.1/validation
    {
        return [
            'titulo' => 'required|min:3',
            'descripcion' => 'required',
            'autor' => 'required'
        ];
    }
}
