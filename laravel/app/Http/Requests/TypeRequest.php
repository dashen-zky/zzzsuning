<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TypeRequest extends Request
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
            "status"=>"required|regex:/^\d+$/",
        ];
    }

    public function messages()
    {
        return [
            "name.required"=>"类型名不能空",
            "status.required"=>"类型状态没有填写",
            "status.regex"=>"类型状态值不正确",
        ];
    }
}
