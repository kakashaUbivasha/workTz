<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8'
        ];
    }
    public function messages(): array
    {
        return [
            'email.required' => 'Поле email обязательно для заполнения.',
            'email.string' => 'Поле email должно быть строкой.',
            'email.email' => 'Поле email должно быть действительным адресом электронной почты.',
            'email.max' => 'Поле email не должно превышать 255 символов.',
            'password.required' => 'Поле password обязательно для заполнения.',
            'password.string' => 'Поле password должно быть строкой.',
            'password.min' => 'Поле password должно содержать минимум 8 символов.',
        ];
    }
}
