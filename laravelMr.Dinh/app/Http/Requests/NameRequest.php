<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NameRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|string',
            'age' => 'numeric',
            'date' => 'string',
            'phone' => 'phone',
            'web' => 'string',
            'address' => 'string'
        ];
    }

    public function messages(){
        return [
            'name.string' => 'Vui long dien ten cho dung',
            'age.numeric' => 'vui long nhap tuoi cho dung',
            'date.string' => 'vui long dien lai ngay thang',
            'phone.number' => 'vui long kiem tra lai so dien thoai',
            'web.string' => 'vui long kiem tra lai ky tu',
            'address.string' => 'vui long nhap lai dia chi'
        ];
    }
}
