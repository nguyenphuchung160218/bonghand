<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCategory extends FormRequest
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
            'name'=>'required | unique:categories,c_name,'.$this->id,
            'avatar' => 'mimes:jpeg,jpg,png,gif', 
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Trường này không được để trống',
            'name.unique'=>'Tên danh mục đã tồn tại',
            'avatar.mimes'=>'Ảnh phải có dạng jpeg, jpg, png, gif',
        ];
    }
}
