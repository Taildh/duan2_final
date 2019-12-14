<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
            'name' => 'required|max:20',
            'email' =>'required|email|unique:users',
            'password' =>'required|min:6',
            'repassword'=>'same:password'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng không để trống',
            'name.max' => 'Không nhập quá 20 ký tự',
            'email.required' => 'Vui lòng không để trống',
            'email.unique' => 'Email đã tồn tại',
            'email.email' => 'Vui lòng nhập đúng định dạng Email',
            'password.required' => 'Vui lòng không để trống',
            'password.min' => 'Mật khẩu phải hơn 6 ký tự',
            'repassword.same' => 'Nhập lại mật khẩu không hợp lệ',
        ];
    }
}
