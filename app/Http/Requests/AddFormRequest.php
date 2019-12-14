<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
class AddFormRequest extends FormRequest
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
            'title' => [
                'required',
                Rule::unique('posts')->ignore($this->id),
                'min:10',
                'max:100'
            ],
            'content' => [
                'required',
                'min:10',
                'max:350'
            ]


        ];
        if(!$this->id){
            $validate['publish_date'] = 'required|date|after:'.Carbon::now()->subDay()->format('Y-m-d');
            $validate['image'] = 'required|file|mimes:jpeg,png';
        }
        return $validate;
    }
    public function messages(){
        return [
            'title.required' => 'Bạn phải nhập tiêu đề bài viết',
            'title.min' => 'Tiêu đề bài viết phải lớn hơn 10 ký tự',
            'title.max' => 'Tiêu đề bài viết phải nhỏ hơn 100 ký tự',
            'title.unique' => 'Tiêu đề bài viết đã tồn tại, vui lòng chọn tiêu đề khác',
            'content.required' => 'Bạn không được để trống nội dung bài viết',
            'content.min' => '  Nội dung viết phải lớn hơn 10 ký tự',
            'content.max' => 'Nội dung bài viết phải nhỏ hơn 350 ký tự',
            'image.required' => 'Bạn không được để trống ảnh bài viết',
            'image.mimes' => 'Bạn chỉ có thể lựa chọn định dạng ảnh jpeg hoặc png',
            'publish_date.required' => 'Bạn không được để trống ngày tạo bài viết'
        ];

    }
}