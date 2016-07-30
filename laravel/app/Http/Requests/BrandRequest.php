<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BrandRequest extends Request
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
            "name"=>"required|unique:brands|regex:/^\S+$/",
            "cate_id"=>"required|regex:/^\d+$/",
            "img"=>"sometimes|required|mimes:jpeg,bmp,png",
            "status"=>"required|regex:/^[01]$/",
        ];
    }

    public function messages()
    {
        return [
            "name.required"=>"品牌名称不能为空",
            "name.unique"=>"品牌名称已存在",
            "name.regex"=>"品牌名称格式不正确",
            "cate_id.required"=>"品牌的所属分类必须填",
            "cate_id.regex"=>"品牌的所属分类值不正确",
            "img.mimes"=>"品牌的图片格式不正确,不是jpg,bmp,png 的一种",
            "status.required"=>"品牌的状态不能为空",
            "status.regex"=>"品牌的状态值不正确",
        ];
    }
}
