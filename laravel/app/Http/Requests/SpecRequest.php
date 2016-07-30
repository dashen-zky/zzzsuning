<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SpecRequest extends Request
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
            "status"=>"required|regex:/^[01]$/",
        ];
    }

    public function messages()
    {
        return [
            "name.required"=>"规格名不能为空",
            "name.required"=>"规格名格式不正确",
            "type_id.required"=>"规格类型不能为空",
            "type_id.regex"=>"规格类型的值不正确",
            "status.required"=>"规格的状态不能为空",
            "status.regex"=>"规格状态的值不正确",
        ];
    }
}
