<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //后台 主页
    public function index()
    {
    	return view('admin.index');
    }

    // public function 
=======
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminInsertCateRequest;
use App\admin_user;


class AdminController extends Controller
{
    /**
     * fsadfadfad
     */
    public function index()
    {   

        return view('admin.index');
    }

   	/**
   	*管理员添加页面
   	*/
    public function getAdd()
    {
    	return view('admin.adminuser.add');
    }

    /**
    *管理员插入操作
    */
     public function postInsert(AdminInsertCateRequest $request)
     {  
        //哈希密码
        $password = Hash::make($request->input('password'));
        //token
        $token = str_random(50);
        //使用模型插入
        $admins = new admin_user;
        $admins->username = $request->input('username');
        $admins->password = $password;
        $admins->token = $token;
        $admins->lasttime = time();
        //检测
        if($admins->save()){
            return redirect('/admin/adminuser/index')->with('info','添加成功');
        }else{
            return back('/admin/adminuser/add')->with('error','添加失败');
        }
            
     }

    /**
    *管理员列表显示
    */
    public function getIndex(Request $request)
    {
        //使用模型显示管理员列表
        $info = admin_user::where(function($query)use($request){
              //判断当前请求的keywords参数
             //检测
            if(!empty($keywords)){
                $reqery->where('username','like','%'.$keywords.'%');
            }
        })
        ->orderBy('admin_users.id','asc')
        ->paginate($request->input('num',10));

        //分配变量
    	return view('admin.adminuser.index',[
            'info' => $info,
            'request' => $request
            ]);
    }

    /**
    * 后台登录页面显示
    */
    public function login()
    {
    	return view('admin.login');
    }

    /**
    *后台登录操作
    */
    public function doLogin(Request $request)
    { 
    	//获取参数
        $username = $request->input('username');
        $password = $request->input('password');

        //检测数据库 
        $info = admin_user::where('username',$username)->first();
        if(empty($info)){
            return back()->with('error','用户名不存在');
        }

        //检测密码
        if(Hash::check($password,$info['password'])){
            //写入session 信息
            session(['uid' => $info['id']]);
            session(['username'=>$username]);
            // dd(session('username'));
            //跳转后台首页
            return redirect('/admin/user/index');
        }else{
            return back()->with('error','密码不正确');
        }
        
    }
    
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974

}
