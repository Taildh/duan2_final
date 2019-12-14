<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveCartRequest extends FormRequest
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
            'name'=>'required',
            'phone_number'=> 'required|numeric|digits_between:10,11|regex:/(0)[0-9]{9}/',
            'order_address'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Vui lòng không để trống',
            'phone_number.required'=> 'Vui lòng không để trống',
            'phone_number.numeric'=> 'Vui lòng nhập đúng định dạng số điện thoại',
            'phone_number.digits_between'=> 'Vui lòng nhập đúng định dạng số điện thoại',
            'order_address.required'=>'Vui lòng không để trống',
        ];
    }
}
