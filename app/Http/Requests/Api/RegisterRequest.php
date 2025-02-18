<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends ApiRequest
{
    public function authorize(): bool
    {
        return true;
    }
    // Правила валидации
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:64',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|max:255|min:6',
        ];
    }
    // Кастомные смс об ощибках валидации
    public function messages(): array{
        return [
            'name.required' => 'Имя обязательное поле',
            'email.required' => 'ЕПочта обязательное поле',
            'password.required' => 'Пароль обязательное поле',

            'name.max' => 'Максимум 64 символа',
            'email.max' => 'Максимум 255 символа',
            'password.max' => 'Максимум 255 символа',
            'password.min' => 'Минимум 6 символов',

            'email.unique' => 'Такая почта уже существует',
        ];
    }
}
