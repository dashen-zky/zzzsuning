<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AjaxStatusRequest extends Request
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
            "id"=>"required|regex:/^\d+$/",
            "status"=>"required|regex:/^\d+$/",
        ];
    }


    public function massages()
    {
        return [
            "id.required"=>"id不能为空",
            "id.regex"=>"id格式不正确",
            "status.required"=>"状态不能为空",
            "status.regex"=>"状态的值不正确",
        ];
    }
}
