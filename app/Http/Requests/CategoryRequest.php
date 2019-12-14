<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
class CategoryRequest extends FormRequest
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
                Rule::unique('product_category')->ignore($this->id),
                'min:3',
                'max:20'
            ],
            'description' => [
                'required',
                'min:3',
                'max:100'
            ]


        ];
        return $validate;
    }
    public function messages(){
        return [
            'name.required' => 'Bạn phải nhập tên danh mục',
            'name.min' => 'Tên danh mục phải lớn hơn 3 ký tự',
            'name.max' => 'Tên danh mục phải nhỏ hơn 20 ký tự',
            'name.unique' => 'Tên danh mục đã tồn tại, vui lòng chọn tên sản phẩm khác',
            'description.required' => 'Bạn không được để trống mô tả danh mục',
            'description.min' => 'Mô tả danh mục lớn hơn 3 ký tự',
            'description.max' => 'Mô tả danh mục nhỏ hơn 100 ký tự',    
        ];

    }
}