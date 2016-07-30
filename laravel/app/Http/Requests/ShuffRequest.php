<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ShuffRequest extends Request
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
            "img"=>"required",
        ];
    }

    public function messages()
    {
        return [
            "img.required"=>"轮播图不能为空",
        ];
    }
}
