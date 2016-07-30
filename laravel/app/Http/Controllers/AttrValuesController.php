<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attr;
use App\AttrValue;
use App\Http\Requests;
use App\Http\Requests\AttrValueRequest;
use App\Http\Requests\AjaxStatusRequest;
use App\Http\Controllers\Controller;

class AttrValuesController extends Controller
{
    
    /**
     * 属性值添加页面
     */
    public function getAdd()
    {
        // 获取属性的信息
        $attrs = Attr::get();
        return view("admin.attrValue.add",[
            "title"=>"属性值添加",
            "attrs"=>$attrs,
        ]);
    }

    /**
     * 属性值插入操作
     */
    public function postInsert(AttrValueRequest $request)
    {
        //插入操作
        $attrValue = new AttrValue;
        $attrValue->name = $request->input("name");
        $attrValue->attr_id = $request->input("attr_id");
        $attrValue->status = $request->input("status");

        // 判断 成功与否
        if($attrValue->save()){
            return redirect("admin/attrValue/index")->with("success","属性值添加成功");
        }else{
            return back()->with("error","属性值添加失败");
        }
    }

    /**
     * 属性值的列表
     */
    public function getIndex(Request $request)
    {
        //获取所有的属性值
        $attrValues = AttrValue::where(function($query)use($request){
                if(!empty($request)){
                    $query->where('name','like','%'.$request->input('search').'%');
                }
            })
<<<<<<< HEAD
            ->paginate($request->input('num', 10));
=======
            ->paginate($request->input('num', 10));;
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
        // 返回模板
        return view("admin.attrValue.list",[
            "title"=>"属性值列表",
            "attrValues"=>$attrValues,
            "request"=>$request,
        ]); 
    }

    /**
     * 属性值状态的ajax修改
     */
    public function getAjaxUpdate(AjaxStatusRequest $request)
    {
        // 只需要 status 
        $data = $request->only(["status"]);
        // 更新状态
        if(AttrValue::where("id",$request->input("id"))->update($data)){
            echo 1;die;
        }else{
            echo 0;die;
        }
    }

    /**
     * 修改属性值的页面
     */
    public function getEdit(Request $request)
    {
        // 获取 属性的相关信息
        $attrs = Attr::get();
        // 获取 当前id 对应的属性值信息
        $attrValue = AttrValue::find($request->input("id"));
        // 模板解析
        return view("admin.AttrValue.edit",[
            "title"=>"属性值的修改",
            "attrValue"=>$attrValue,
            "attrs"=>$attrs,
        ]);
    }

    /**
     * 属性值的更新操作
     */
    public function postUpdate(AttrValueRequest $request)
    {
        // 确定要修改的值
        $data = $request->only(["name","status","attr_id"]);
        //更新操作
        if(AttrValue::where("id",$request->input("id"))->update($data)){
            return redirect("admin/AttrValue/index")->with("success","更新成功");
        }else{
            return back()->with("error","更新失败");
        }
    }

    /**
     * 属性值的 删除操作
     */
    public function getDelete(Request $request)
    {   
        if(AttrValue::where("id",$request->input("id"))->delete()){
            return back()->with("error","删除成功");
        }else{
            return back()->with("error","删除失败");
        }
    }

}
