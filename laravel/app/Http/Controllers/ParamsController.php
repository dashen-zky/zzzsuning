<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spec;
use App\Param;
use App\Http\Requests;
use App\Http\Requests\ParamRequest;
use App\Http\Controllers\Controller;

class ParamsController extends Controller
{
    //
    /**
     * 参数的添加
     */
    public function getAdd()
    {
    	// 获取所有的类型
    	$specs = Spec::get();
    	// dd($specs);
    	// 模板解析
    	return view("admin.param.add",[
    		"title"=>"参数的添加",
    		"specs"=>$specs,
    	]);
    }

    /**
     * 参数的插入操作
     */
    public function postInsert(ParamRequest $request)
    {
        $param = new Param;
        $param->name = $request->input("name");
        $param->spec_id = $request->input("spec_id");
        $param->status = $request->input("status");
        //
        if($param->save()){
            return redirect("admin/param/index")->with("success","参数添加成功");
        }else{
            return back()->with("error","参数添加失败");
        }
    }

    /**
     * 参数列表显示
     */
    public function getIndex(Request $request)
    {
        // dd(5245);
        // 获取所有的参数信息
        $params = Param::where(function($query) use($request){
                if(!empty($request)){
                    $query->where('name','like','%'.$request->input('search').'%');
                }
            })
            ->paginate($request->input('num', 10));
        // 返回模板
        return view("admin.param.list",["title"=>"参数列表","params"=>$params,"request"=>$request]);
    }

    /**
     * 参数的状态 ajax 更新
     */
    public function getAjaxUpdate(Request $request)
    {       
        $data = $request->only(["status"]);
        if(Param::where("id",$request->input("id"))->update($data)){
            echo 1;die;
        }else{
            echo 0;die;
        }
    }

    /**
     * 参数 的 修改页面
     */
    public function getEdit(Request $request)
    {   
        // 获取分类信息
        $specs = Spec::get();
        // 根据id 查找 参数信息
        $param = Param::find($request->input("id"));
        // 模板解析
        return view("admin.param.edit",["title"=>"参数修改","param"=>$param,"specs"=>$specs]);

    }

    /**
     * 参数的更新操作
     */
    public function postUpdate(ParamRequest $request)
    {
        // 获取参数
        $data = $request->except(["id","_token"]);        
        //更新
        if(Param::where("id",$request->input("id"))->update($data)){
            return redirect("admin/param/index")->with("success","参数更新成功");;
        }else{
            return back()->with("error","参数更新失败");
        }
    }

    /**
     * 参数删除
     */
    public function getDelete(Request $request)
    {
        //删除参数
        if(Param::where("id",$request->input("id"))->delete()){
            return back()->with("success","删除成功");
        }else{
            return back()->with("error","删除失败");
        }        

    }

}

