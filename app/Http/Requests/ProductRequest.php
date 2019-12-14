<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
class ProductRequest extends FormRequest
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
                Rule::unique('product')->ignore($this->id),
                'min:3',
                'max:100'
            ],
            'price' =>[
                'required',
                'numeric',
                'between:1000,999999',
            ],
            'sell_price' =>[
                'required',
                'numeric',
                'between:1000,999999',
                'lt:price',
            ],
            'short_desc' =>[
                'required',
                'min:20',
                'max:300'
            ],
            'description' =>[
                'required',
                'min:20',
                'max:10000'
            ]

        ];
        if(!$this->id){
            $validate['image'] = 'required|file|mimes:jpeg,png';
        }
        return $validate;
    }
    public function messages(){
        return [
            'name.required' => 'Bạn phải nhập tên sản phẩm',
            'name.min' => 'Tên sản phẩm phải lớn hơn 3 ký tự',
            'name.max' => 'Tên sản phẩm phải nhỏ hơn 100 ký tự',
            'name.unique' => 'Tên sản phẩm đã tồn tại, vui lòng chọn tên sản phẩm khác',
            'image.required' => 'Bạn không được để trống ảnh sản phẩm',
            'image.mimes' => 'Bạn chỉ có thể lựa chọn định dạng ảnh jpeg hoặc png',
            'price.required' => 'Bạn phải nhập giá sản phẩm',
            'price.numeric' => 'Giá sản phẩm phải là số',
            'price.between' => 'Giá sản phẩm phải nằm trong khoảng 1000 đến 999999 ',
            'sell_price.required' => 'Bạn phải nhập giá sản phẩm',
            'sell_price.numeric' => 'Giá sản phẩm phải là số',
            'sell_price.between' => 'Giá sản phẩm phải nằm trong khoảng 1000 đến 999999 ',
            'sell_price.lt' => 'Giá khuyễn mãi phải nhỏ hơn giá niêm yết',
            'short_desc.required' => 'Bạn phải nhập nội dung tóm tắt',
            'short_desc.min' => 'Nội dung tóm tắt phải lớn hơn 20 ký tự',
            'short_desc.max' => 'Nội dung tóm tắt phải nhỏ hơn 300 ký tự',
            'description.required' => 'Bạn phải nhập nội dung sản phẩm',
            'description.min' => 'Nội dung sản phẩm phải lớn hơn 20 ký tự',
            'description.max' => 'Nội dung sản phẩm phải nhỏ hơn 10000 ký tự',
        ];

    }
}