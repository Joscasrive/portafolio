<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoRequest extends FormRequest
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
        if ($this->isMethod('POST')) {
            return [
                'name' => 'required|string',
                'img' => 'required|image', // Obligatorio para crear nuevos registros
                'description' => 'required|string',
                'url' => 'required|string',
            ];
        } else {
            return [
                'name' => 'required|string',
                'img' => 'sometimes|required|image', // Opcional para actualizar registros existentes
                'description' => 'required|string',
                'url' => 'required|string',
            ];
        }
    }
}
