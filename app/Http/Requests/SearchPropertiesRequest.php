<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchPropertiesRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $long = 'gte:0';
        return [
            'price' => ['nullable', 'n umeric', $long],
            'surface' => ['nullable', 'numeric', $long],
            'rooms' => ['nullable', 'numeric', $long],
            'title' => ['nullable', 'string'],
        ];
    }
}
