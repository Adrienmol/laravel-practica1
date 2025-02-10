<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DirectorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required'
        ];
    }

    public function messages() {
        return [
            'name' => 'El nombre debe contener carácteres'
        ];
    }
}
