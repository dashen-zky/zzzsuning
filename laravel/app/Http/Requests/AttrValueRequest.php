<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AttrValueRequest extends Request
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
            "name"=>"required|regex:/^\S+$/",
            "attr_id"=>"required|regex:/^\d+$/",
            "status"=>"required|regex:/^\d+$/",
        ];
    }

    public function messages()
    {
        return [
            "name.required"=>"属性值不能为空",
            "name.regex"=>"属性值的格式不正确",
            "attr_id.required"=>"属性值的所属属性不能为空",
            "attr_id.regex"=>"属性值的所属属性格式不正确",
            "status.required"=>"属性值状态不能为空",
            "status.regex"=>"属性值格式不正确",
        ];
    }
}
