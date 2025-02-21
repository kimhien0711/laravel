<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleNhapSV extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;            //FASLE có lỗi nhưng không hiển thị lrrn màn hình
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {               //rules là để biết lỗi, ràng buộc
        return [
            //numberic là bắt buộc nó là số
        ];
    }

    public function messages(){
        // return "Mời bạn nhập!!";
    }
}
