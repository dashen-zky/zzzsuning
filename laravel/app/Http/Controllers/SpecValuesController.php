<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SpecValue;
use App\Spec;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SpecValuesController extends Controller
{
    /**
     * 添加规格值页面
     */
    public function getAdd(Request $request)
    {
        // 获取规格的信息
        $spec = Spec::find($request->input("id"));
        // 获取所有规格值信息
        $specValues = SpecValue::where(function($query)use($request){
                if(!empty($request)){
                    $query->where('name','like','%'.$request->input('search').'%');
                }
            })
            ->paginate($request->input('num', 10));
        // 解析模板
        return view("admin.specValue.add",[
            "title"=>"规格值添加",
            "spec"=>$spec,
            "request"=>$request,
            "specValues"=>$specValues,
        ]);
    }

    /**
     * 规格值插入操作
     */
    public function postInsert(Request $request)
    {
        $specValue = new SpecValue;
        $specValue->name = $request->input("name");
        $specValue->spec_id = $request->input("spec_id");
        $specValue->status = $request->input("status");
        if($specValue->save()){
            return back()->with("success","规格值添加成功");
        }else{
            return back()->with("error","规格值添加失败");
        }
    }

    /**
     * ajax 请求 改变状态
     */
    public function getAjaxUpdate(Request $request)
    {
        $data = $request->only("status");
        if(SpecValue::where("id",$request->input("id"))->update($data)){
            echo 1;die;
        }else{
            echo 0;die;
        }
    }

    /**
     * 规格值 修改页面
     */
    public function getEdit(Request $request)
    {
        // 获取规格值信息
        $specValue = SpecValue::find($request->input("id"));
        // 解析模板
        return view("admin.specValue.edit",[
            "title"=>"规格值修改",
            "specValue"=>$specValue,
        ]);
    }

    /**
     * 属性值更新操作
     */
    public function postUpdate(Request $request)
    {
        // 获取 要跟新 的 属性值
        $specValue = SpecValue::find($request->input("id"));
        $specValue->name = $request->input('name');
        $specValue->spec_id = $request->input('spec_id');
        $specValue->status = $request->input('status');
        $specValue->update_at = date("Y-m-d H:i:s");
        if($specValue->save()){
            return redirect("/admin/SpecValue/add")->with("success","更新成功");
        }else{
            return back()->with("error","更新失败");
        }
    }

    /**
     * 属性值的删除操作
     */
    public function getDelete(Request $request)
    {   
        //删除
        if(SpecValue::where("id",$request->input("id"))->delete()){
            return back()->with("success","删除成功");
        }else{
            return back()->with("error","删除失败");
        }
    }
    
}
