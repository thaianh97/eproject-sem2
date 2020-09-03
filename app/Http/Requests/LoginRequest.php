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
            'username' => 'min:6|required',
            'password'=> 'min:6|required'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Hãy nhập tên đăng nhập',
            'username.min' => 'Tên đăng nhập phải có ít 6 ký tự',
            'password.required' => 'Hãy nhập mật khẩu',
            'password.min' => 'Mật khẩu phải có 6 ký tự',
        ];
    }
}
