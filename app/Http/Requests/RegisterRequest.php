<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'username' => 'bail|required|min:6',
            'password' => 'bail|required|min:8',
            'confirm_password' => 'bail|required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Please insert your username!',
            'username.min' => 'Username too short!',
            'password.required' => 'Please insert your password!',
            'password.min' => 'Password too short!',
            'confirm_password.same' => 'Password does not match!',
        ];
    }
}
