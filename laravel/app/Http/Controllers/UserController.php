<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use APP\Detail;
use Hash;
use Mail;
use Config;
use Gregwar\Captcha\CaptchaBuilder;
use Session;

class UserController extends Controller
{

    //首页
    public function Index()
    {   
        return view('index.index');
    }

    // 显示用户添加页面
    public function getAdd()
    {
        return view('admin.user.add');
    }

    //用户的插入操作
    public function postInsert(InsertCateRequest $request)
    {
        //处理密码
        $password = Hash::make($request->input('password'));
        //生成随机的字符串
        $token = str_random(50);
        //添加状态字段
        $auth = 0;
        //最后一次登录的时间
        // $lasttime = time();
       //模型插入操作
        $users = new User;
        $users->username = $request->input('username');
        $users->password = $password;
        $users->token = $token;
        $users->auth = $auth;
        $users->email = $request->input('email');
        $users->lasttime = time();

        //插入表
        if($users->save()){
            return redirect('admin/user/index')->with('info','添加成功');
        }else{
            return back('admin/user/add')->with('error','添加失败');
        }

        
    }

    //用户的列表显示
    public function getIndex(Request $request)
    {   
        $info = User::where(function($query)use($request){
                //判断当前请求的keywords参数
                $keywords = $request->input('keywords');
                //检测
                if(!empty($keywords)){
                    $query->where('username','like','%'.$keywords.'%');
                }
            })
            ->orderBy('users.id','asc')
            ->paginate($request->input('num',10));

            return view('admin.user.index',[
                'info' => $info,
                'request' => $request
                ]);
    } 

    // Ajax用户状态跟新操作
    public function getAjaxUpdate(Request $request)
    {
        $data = $request->only(["auth"]);
        //模型更新
        if(User::where('id',$request->input('id'))->update($data)){
            echo 1;die;
        }else{
            echo 0;die;
        }
    }


    /*****************************  前台功能  *********************************/
    //用户注册页面显示
    public function register()
    {  
        return view('index.user.register');
    }

    //用户注册信息插入
    public function doRegister(Request $request)
    {
        //插入
        $user = new User;
        $user -> username = $request->input('username');
        $user -> password = Hash::make($request->input('password'));
        $user -> email = $request->input('email');
        $user -> auth = 0;
        $user -> lasttime = time();
        $user -> token = str_random(50);

        //插如动作
        if($user->save())
        {
            //插入详请user_id
            $detail = new \App\Detail;
            $detail -> user_id = $user->id;
            if($detail->save()){
                  //发送邮件
            Mail::send('emails.register',['user' => $user], function ($m) use ($user) {
                //设置发送者信息
                    $m->from(env('MAIL_USERNAME'), Config::get('app.APP_NAME'));
                    //设置接受者信息  subject标题
                    $m->to($user->email)->subject(Config::get('app.APP_NAME').'注册激活邮件');
                });
                return view('index.user.registerRemind');
            }
          
        }
    }

    /**
    * 用户的激活操作
    */

    public function jihuo(Request $request)
    {
        //表单验证...

        //获取信息
        $info = User::findOrFail($request->input('id'));
        //检测随机的验证码是否一致
        if($info->token == $request->input('token')){
            //激活
            $info -> auth = 1;
            //随机的验证码
            $info -> token = str_random(50);
            if($info -> save()){
            //成功跳转登录页
                return redirect('/login');
            }
        }else{
            abort(404);
        }
    }

    /**
    * 前台用户的登录
    */
    public function login()
    {
        return view('/index/user/login');
    }

    /**
    * 前台用户的登录插入
    */
    public function doLogin(Request $request)
    {
        //获取参数
        $username = $request->input('username');
        $password = $request->input('password');
        //检索数据库
        $info = User::where('username',$username)->first();
        //检测
        if(empty($info)){
            return back()->with('error','用户名不存在');
        }
        //检测
        if($info['auth'] == 0){
             return back()->with('error','您的账号未激活 请尽快登录邮箱激活');
        }
        //检测密码
        if(Hash::check($password,$info['password'])){
            //把用户信息记入session
           session(['uid'=>$info['id']]);
           session(['username'=>$username]);
           session(['email'=>$info['email']]);
           return view('index.index')->with('info','登录成功');
        }else{
            return back()->with('error','密码不正确');
        }
    }

    /**
    *前台用户找回密码操作
    */
    public function Forget()
    {   
        //填写邮箱账号的表单
        return view('index.user.forget');
    }

    /**
    *  前台找回密码验证码
    */
    public function captcha($tmp)
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        Session::flash('vcode', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }

    /**
    *前台验证码验证
    */
    public function yz(Request $request)
    {
        $userInput = $request->get('captcha');

        if($userInput == session('vcode')){
        //用户输入验证码正确
         return 1;die();
        }else {
        //用户输入验证码错误
         return 0;die();
        }
    }

    /**
    *发送邮件来填写新密码
    */
    public function doForget(Request $request)
    {
       //读取
        $user = User::where('email',$request->input('email'))->firstOrFail();
        //发送邮件
        Mail::send('emails.forget',['user' => $user], function ($m) use ($user) {
            //设置发送者信息
            $m->from(env('MAIL_USERNAME'), Config::get('app.APP_NAME'));
            //设置接受者信息  subject标题
            $m->to($user->email)->subject('找回密码邮件');
        });
         return view('index.user.forgetRemind');

    }

    /**
    * 重置密码页面显示
    */
    public function reset(Request $request)
    {
        //检测
        $user = User::where('id',$request->input('id'))->where('token',$request->input('token'))->firstOrFail();
        //解析模板
        return view('index.user.reset',[
            'user' => $user,
            ]);
    }

    /**
    * 重置密码操作
    */

    public function doreset(Request $request)
    {
        //检测
        $user = User::where('id',$request->input('id'))->where('token',$request->input('token'))->firstOrFail();
        //更新
        $user->password = Hash::make($request->input('password'));
        $user->token = str_random(50);
        //插入数据库
        if($user->save()){
            return redirect('/login')->with('info','修改成功 请严加保密');
        }else{
            return back()->with('error','修改失败 未知错误');
        }
    }

    /**
    *用户详情信息显示
    */
    public function Person(Request $request)
    {
        $info = \App\Detail::where("user_id",session("uid"))->first();
        return view('index.user.person',["info"=>$info]);
    }

    /**
    *用户详情信息插入
    */
    public function doPerson(Request $request)
    {
        $details = \App\Detail::where('user_id',$request->input('user_id'))->first();
        $details ->pricname = $request->input('pricname');
        $details ->sex = $request->input('sex');
        $details ->phone = $request ->input('phone');
        //图片上传
        $profile = $this->getUploadFileName($request); 
        $details -> profile = $profile ? $profile : '';

        //插入详情表
        if($details ->save()){
            $info = Detail::where('user_id',$request->input('user_id'))->first();
            //分配变量
            return view('index.user.person',['info'=>$info]);
        }else{
            return back()->with('error','添加失败');
        }
        
    }

    /**
     * 文件上传操作
     */
    private function getUploadFileName($request)
    {
        if($request->hasFile('profile')){
            $name = time().rand(100000,999999);
            $suffix = $request->file('profile')->getClientOriginalExtension();
            $fileName = $name.'.'.$suffix;
            $dir = './uploads/'.date('Ymd');
            //进行上传
            if($request->file('profile')->move($dir, $fileName)){
                //写入当前图片的绝对路径
                $profile = trim($dir.'/'.$fileName,'.');
                return $profile;
            }
        }
    }

    /**
    *显示后台用户的详情页面
    */

    public  function getDetail(Request $request)
    {
        //根据id 查出相对应的信息
        $info = User::find($request->input("id"));
        // $info = Detail::where('id',$request->input('id'))->first();
        //分配变量
        return view('admin.user.detail',['info'=>$info]);
    }

    /**
    *显示后台要更新的详情页面
    */
    public  function getEdit(Request $request)
    {
        //根据id 查出相对应的信息
        $info = User::find($request->input("id"));
        // $info = Detail::where('id',$request->input('id'))->first();
        //分配变量
        return view('admin.user.edit',['info'=>$info]);
    }
    /**
    *修改用戶詳情信息
    */

    public function postUpdate(Request $request)
    {

        //读取数据
        $detail = \App\Detail::where('user_id',$request->input('id'))->first();
        $detail ->pricname = $request->input('pricname');
        $detail ->sex = $request->input('sex');
        $detail ->phone = $request->input('phone');

        //检测是否有文件上传
        if($request->hasFile('profile')){
            $profile = $this->getUploadFileName($request);
            // dd($profile); 
            $detail->profile = $profile;
            //删除原来的图片
            $this->deleteProfile($request->input('id'));
        }

        //更新
        if($detail->save()){
            return redirect('/admin/user/edit')->with('info','修改成功');
        }else{
            return back()->with('error','未知原因 修改失败');
        }

    }

    /**
     * 删除用户原来的头像
     */
    private function deleteProfile($id)
    {
        //读取数据
        $info = Detail::where('user_id',$id)->first();
        //判断
        if(empty($info)){
            abort(404);
        }
        // '/uploads/20160711/1468208850116506.jpg';
        //删除图片
        //检测图片文件是否存在
        $path = '.'.$info->profile;
        if(file_exists($path)){
            unlink($path);
        }
    }

    /**
    *删除用户所有信息
    */

    public  function getDelete(Request $request)
    {
       $user = User::findOrFail($request->input('id'));
       $detail = \App\Detail::where('user_id',$request->input('id'))->first();
       if($detail){
           if($user->delete() && $detail->delete()){
                return back()->with('info','删除成功');
           }else{
                return back()->with('error','未知原因,删除失败');
           }
        }

    } 
}
