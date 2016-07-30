<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ParamRequest extends Request
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
            "spec_id"=>"required|regex:/^\d+$/",
            "status"=>"required|regex:/^[01]$/",
        ];
    }

    public function messages()
    {
        return [
            "name.required"=>"参数名不能为空",
            "name.required"=>"参数名格式不正确",
            "spec_id.required"=>"参数类型不能为空",
            "spec_id.regex"=>"参数类型的值不正确",
            "status.required"=>"参数的状态不能为空",
            "status.regex"=>"参数状态的值不正确",
        ];
    }
}
