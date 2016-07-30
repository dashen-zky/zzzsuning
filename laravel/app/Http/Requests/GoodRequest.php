<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class GoodRequest extends Request
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
            "name"=>"required",
            "title"=>"required",
            "type_id"=>"required|regex:/^\d+$/",
            "cate_id"=>"required|regex:/^\d+$/",
            "brand_id"=>"sometimes|required|regex:/^\d+$/",
            "img"=>"required|mimes:jpeg,png,gif",
            "status"=>"required|regex:/^[01]$/",
            "price"=>"required|regex:/^\d+$/",
            "content"=>"sometimes|required",
        ];
    }

    public function messages()
    {

        return [
            "name.required"=>"商品的名称不能为空",
            "title.required"=>"商品标题不能为空",
            "type_id.required"=>"商品的类型不能为空",
            "type_id.regex"=>"商品的类型值不正确",
            "cate_id.required"=>"商品的所属分类不能为空",
            "cate_id.regex"=>"商品的分类值不正确",
            "brand_id.regex"=>"商品的品牌值不正确",
            "img.required"=>"商品的主图不能为空",
            "img.mimes"=>"图片的格式不正确",
            "status.required"=>"商品的状态必须填写",
            "status.regex"=>"商品的状态值不正确",
            "price.required"=>"价格不能为空",
            "price.regex"=>"价格的格式不正确",
            "content.min"=>"内容的长度小于50个字符",
        ];
    }

    // public function response(Request $request)
    // {
    //     return $request->session->reflash();
    // }
}
