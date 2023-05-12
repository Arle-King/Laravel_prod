<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegRequest extends FormRequest
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
            'mail' => 'required|email|unique:App\model\Users_DB,mail',
            'surname' => 'required',
            'name' => 'required',
            'patronymic' => 'required',
            'series' => 'required|min:4|max:4',
            'number' => 'required|min:6|max:6',

        ];
    }

    public function messages() {
        return [
            'mail.required' => 'Поле mail является обязательным',
            'mail.email' => 'Введённый mail не является корректным',
            'mail.unique' => 'Данный email уже зарегестрирован',

            'surname.required' => 'Поле фамилия является обязательным',

            'name.required' => 'Поле имя является обязательным',

            'patronymic.required' => 'Поле отчество является обязательным',

            'series.required' => 'Поле серия паспорта является обязательным',
            'series.min' => 'Серия паспорта короче, чем может быть',
            'series.max' => 'Серия паспорта длиннее, чем может быть',

            'number.required' => 'Поле номер паспорта является обязательным',
            'number.min' => 'Номер паспорта короче, чем может быть',
            'number.max' => 'Номер паспорта длиннее, чем может быть',
        ];
    }
}
