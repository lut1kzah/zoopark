<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|max:32',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|max:255|confirmed',
        ];
    }
    public function messages(): array{
        return [
            'name.required' => 'Поле имя обязательное!!!',

            'email.required' => 'Поле почта обязательное!!!',
            'password.required' => 'Поле пороль обязательное!!!',

            'name.max' => 'Имя должна состоять максимум из 32 символов!',
            'email.max' => 'Почта должна состоять максимум из 32 символов!',
            'password.max' => 'Пороль должна состоять максимум из 255 символов!',

            'email.email' => 'Электронная почта должна иметь формат эл.адресса ',
            'email.unique' => 'Данная эл.почта занята другим пользователем, введите свою НЕзарегестрированную почту',
            'password.confirmed' => 'Пороли не совпадают',
        ];
    }
}
