<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvenRequest extends FormRequest
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
            'code'=>'required',
            'type'=>'required',
            'description'=>'required',
            'percent_off'=>'required|integer|between:1,99',
            'minimum'=>'required|integer',
        ];
    }

     public function messages(){
        return [
            'code.required'=>'Vui lòng không để trống',
            'type.required'=>'Vui lòng không để trống',
            'description.required'=>'Vui lòng không để trống',
            'percent_off.required'=>'Vui lòng không để trống',
            'percent_off.between'=>'Vui lòng hập trong khoản từ 0 đến 99',
            'minimum.required'=>'Vui lòng không để trống',
            'minimum.integer'=>'Vui lòng nhập số',
        ];

    }    
}
