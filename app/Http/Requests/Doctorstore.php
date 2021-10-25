<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Doctorstore extends FormRequest
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
            'rut'=>'required|min:3|max:10',
            'doctor_name'=>'required|min:3|max:100',
            'doctor_lastname'=>'required|min:3|max:100',
            'email'=>'required|min:3|max:100',
            'direccion'=>'required|min:3|max:100',
            'especialidad'=>'required' //los select deben ser required para que no queden vacios
        ];
    }
}
