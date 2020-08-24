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
            'username' => 'bail|required|same:username',
            'password' => 'bail|required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Please insert your username!',
            'username.same' => 'Username does not match!',
            'password.required' => 'Please insert your password!',
            'password.same' => 'Password does not match!',
        ];
    }
}
