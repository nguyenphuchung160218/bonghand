<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProduct extends FormRequest
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

    public function rules()
    {
        return [
            'pro_name'=>'required | unique:products,pro_name,'.$this->id,
            'pro_price'=>'required',
            'pro_content'=>'required',
            'pro_category_id'=>'required',
            'pro_gender'=>'required',
            'avatar' => 'mimes:jpeg,jpg,png,gif', 
        ];
    }
    public function messages()
    {
        return [
            'pro_name.required'=>'Trường này không được để trống',
            'pro_name.unique'=>'Tên sản phẩm đã tồn tại',
            'pro_price.required'=>'Trường này không được để trống',
            'pro_content.required'=>'Trường này không được để trống',
            'pro_category_id.required'=>'Trường này không được để trống',
            'pro_gender.required'=>'Trường này không được để trống',
            'avatar.mimes'=>'Ảnh phải có dạng jpeg, jpg, png, gif',
        ];
    }
}