<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
class UserRequest extends FormRequest
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
        $validate = [
            'name' => [
                'required',
                'min:3',
                'max:15'
            ],
            'email' =>[
                'required',
                Rule::unique('users')->ignore($this->id)
            ],
            'password' =>[
                'required',
                'min:6',
                'max:20'
            ],
            'cf_password' =>[
                'required|same:password',
            ]



        ];
        if(!$this->id){
            $validate['image'] = 'required|file|mimes:jpeg,png';
        }
        return $validate;
    }
    public function messages(){
        return [
            'name.required' => 'Bạn phải nhập tên',
            'name.min' => 'Tên người dùng viết phải lớn hơn 3 ký tự',
            'name.max' => 'Tên người dùng phải nhỏ hơn 15 ký tự',
            'email.required' => 'Bạn phải nhập email',
            'email.unique' => 'Tài khoản đã tồn tại, vui lòng nhập email khác',
            'password.required' => 'Bạn phải nhập mật khẩu',
            'password.min' => 'Mật khẩu phải lớn hơn 6 ký tự',
            'password.max' => 'Mật khẩu nhỏ hơn 20 ký tự',
            'cf_password.required|same' => 'Nhập lại mật khẩu phải trùng khớp',
        ];

    }
}