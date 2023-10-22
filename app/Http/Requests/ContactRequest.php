<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'telephone' => 'nullable|numeric',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|text',
        ];
    }
}
