<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AttrRequest extends Request
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
            "type_id"=>"required|regex:/^\d+$/",
            "status"=>"required|regex:/^[10]$/",
        ];
    }

    public function messages()
    {
         return [
            "name.required"=>"属性名称不能为空",
            "name.regex"=>"属性名里不能有空格",
            "type_id.required"=>"类型值不能为空",
            "type_id.regex"=>"类型值不正确",
            "status.required"=>"属性状态不为空",
            "status.regex"=>"状态值不正确",
        ];
    }
}
