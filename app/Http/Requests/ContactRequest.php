<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
class ContactRequest extends FormRequest
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
                'max:10'
            ],
            'phone_number' =>[
                'required',
                'numeric',
            ],
            'content' =>[
                'required',
                'min:20',
                'max:1000'
            ]



        ];
        if(!$this->id){
            $validate['email'] = 'required|email';
        }
        return $validate;
    }
    public function messages(){
        return [
            'name.required' => 'Bạn phải nhập họ và tên',
            'name.min' => 'Họ và tên phải lớn hơn 3 ký tự',
            'name.max' => 'Họ và tên phải nhỏ hơn 10 ký tự',

            'email.required' => 'Bạn không được để trống email và nhập đúng định dạng email VD:example@gmail.com',
            
            'phone_number.required' => 'Bạn không được để trống số điện thoại',
            'phone_number.numeric' => 'Số điện thoại phải là dạng số',
            
            'content.required' => 'Bạn phải nhập nội liên hệ',
            'content.min' => 'Nội dung liên hệ phải lớn hơn 20 ký tự',
            'content.max' => 'Nội dung liên hệ phải nhỏ hơn 1000 ký tự',
        ];

    }
}