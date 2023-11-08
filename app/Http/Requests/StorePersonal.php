<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonal extends FormRequest
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
            'document' => 'required | max: 10',
            'first_name' => 'required',
            'first_last_name' => 'required',
            'gender_id' => 'required'
        ];
    }

    public function attributes(): array
    {
        return [        
            'first_name' => 'primer nombre',
            'first_last_name' => 'primer apellido',
            'gender_id' => 'género'
        ];
    }
}
