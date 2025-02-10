<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CortoRequest extends FormRequest
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
            'title' => 'required',
            'sinapsis' => 'required|min:10',
            'user_id' => 'required|numeric|exists:users,id',
            'director_id' => 'required|numeric|exists:directors,id'
        ];
    }

    public function messages() {
        return [
            'title' => 'El título no puede estar vacío',
            'sinapsis' => 'La sinapsis debe tener al menos 10 carácteres',
            'user_id' => 'El ID del usuario no es válido',
            'director_id' => 'El ID del director no es válido'
        ];
    }
}
