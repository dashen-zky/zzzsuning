<<<<<<< HEAD
<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class InsertCateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *regex:
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
            'status'=>"required|regex:/^[01]$/",
            "pid"=>"required|regex:/^\d+$/",
        ];
    }

    public function messages()
    {
         return [
            "name.required"=>"分类名不能为空",
            "name.regex"=>"分类名有空白字符",
            'status.required'=>"分类状态不能为空",
            'status.regex'=>"分类参数不正确",
            "pid.required"=>"类别不能为空",
            "pid.regex"=>"类别参数不正确",
        ];
    }
}
=======
// <?php

// namespace App\Http\Requests;

// use App\Http\Requests\Request;

// class InsertCateRequest extends Request
// {
//     /**
//      * Determine if the user is authorized to make this request.
//      *
//      *regex:
//      * @return bool
//      */
//     public function authorize()
//     {
//         return true;
//     }

//     /**
//      * Get the validation rules that apply to the request.
//      *
//      * @return array
//      */
//     public function rules()
//     {
//         return [
//             'username' => 'required|unique:users|regex:/^\S{8,30}$/',
//             'password' => 'required|regex:/^\S{8,30}$/',
//             'repassword' => 'required|same:password',
//             'email' => 'required|unique:users|regex:/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/'
//             "name"=>"required|regex:/^\S+$/",
//             'status'=>"required|regex:/^[01]$/",
//             "pid"=>"required|regex:/^\d+$/",
//         ];
//     }

//     public function messages()
//     {
//         return [
//            'username.required' => "用户名不能为空",
//            'username.unique' => "用户名已存在",
//            'username.regex' => "用户名填写格式不正确",
//            'password.required' => "密码不能为空",
//            'password.regex' => "密码格式不正确",
//            'repassword.required' => "确认密码不能为空",
//            'repassword.same' => "两次密码输入不一致",
//            'email.required' => "邮箱地址不能为空",
//            'email.unique' => "邮箱号已存在",
//            'email.regex' => '邮箱格式不正确 请填写正确的邮箱号' 
//          return [
//             "name.required"=>"分类名不能为空",
//             "name.regex"=>"分类名有空白字符",
//             'status.required'=>"分类状态不能为空",
//             'status.regex'=>"分类参数不正确",
//             "pid.required"=>"类别不能为空",
//             "pid.regex"=>"类别参数不正确",
//         ];
//     }
// }
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
