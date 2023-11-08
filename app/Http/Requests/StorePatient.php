<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatient extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'document' => 'required | max:10 | unique:patients',
            'first_name' => 'required',
            'first_last_name' => 'required',
            'gender_id' => 'required'
        ];
    }

    /*
    public function messages(): array
    {
        return [
            'document.required' => 'El documento es obligatorio',
            'first_name.required' => 'El primer nombre es obligatorio',
            'first_last_name.required' => 'El primer apellido es obligatorio',
            'gender_id' => 'El género es obligatorio'
        ];
    }
    */

    // Estos atributos tambié se pueden cambiar en la carpeta lang/es/validation.php
    public function attributes(): array
    {
        return [        
            'first_name' => 'primer nombre',
            'first_last_name' => 'primer apellido',
            'gender_id' => 'género'
        ];
    }
}
