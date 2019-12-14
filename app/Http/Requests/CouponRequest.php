<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
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
            'code' => 'required|exists:coupons',
        ];
    }

    public function messages()
    {
        return [
            'code.required'=> 'Vui lòng không để trống',
            'code.exists'=> 'Mã giảm giá không tồn tại',
        ];
    }
}
 