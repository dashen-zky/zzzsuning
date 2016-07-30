<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminInsertCateRequest extends Request
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

            'username' => 'required|unique:admin_users|regex:/^\S{8,30}$/',
            'password' => 'required|regex:/^\S{8,30}$/',
            'repassword' => 'required|same:password'
        ];
    }

    public function messages()
    {
        return [

           'username.required' => "管理员名不能为空",
           'username.unique' => "管理员名已存在",
           'username.regex' => "名称填写格式不正确",
           'password.required' => "密码不能为空",
           'password.regex' => "密码格式不正确",
           'repassword.required' => "确认密码不能为空",
           'repassword.same' => "两次密码输入不一致",
        ];
    }
}
