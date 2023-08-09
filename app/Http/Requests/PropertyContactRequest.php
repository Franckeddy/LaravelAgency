<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class PropertyContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    final public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    final public function rules(): array
    {
        return [
            'first_name' => ['required', 'min:3', 'string'],
            'last_name' => ['required', 'min:3', 'string'],
            'email' => ['required', 'email', 'email'],
            'phone' => ['required', 'min:10', 'string'],
            'message' => ['min:4', 'string'],
        ];
    }
}
