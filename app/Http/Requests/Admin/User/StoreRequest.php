<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string',
            'role' => '',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Это поле необходимо заполнить',
            'name.string' => 'Это поле должно быть строкой',
            'email.required' => 'Это поле необходимо заполнить',
            'email.string' => 'Это поле должно быть строкой',
            'email.email' => 'Ваш email должен соответствовать формату: "mail@some.domen',
            'email.unique' => 'Пользователь с таким email уже существует',
            'password.required' => 'Необходимо ввести пароль',
        ];
    }
}
