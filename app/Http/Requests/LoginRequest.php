<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'mail_Auth' => 'required|email',
            'pass_Auth' => 'required|min:6|max:12'
        ];
    }

    public function messages() {
        return [
            'mail_Auth.required' => 'Поле mail является обязательным',
            'mail_Auth.email' => 'Логин написан не верно',

            'pass_Auth.required' => 'Не ввели пароль',
            'pass_Auth.min' => 'Пароль должен быть больше 5ти символов',
            'pass_Auth.max' => 'Пароль должен быть меньше 13 символов',
        ];
    }
}
