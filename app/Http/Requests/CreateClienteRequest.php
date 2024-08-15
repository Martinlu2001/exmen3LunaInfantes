<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'direccion' => 'required',
            'telefono' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Se necesita un nombre',
            'email.required' => 'Se necesita un email',
            'direccion.required' => 'Se necesita una dirección',
            'telefono.required' => 'Se necesita un teléfono'
        ];
    }
}
