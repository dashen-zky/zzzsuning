<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Type;
use App\Attr;   
use App\AttrValue;   
use App\Http\Requests;
use App\Http\Requests\AjaxStatusRequest;
use App\Http\Requests\AttrRequest;
use App\Http\Controllers\Controller;

class AttrsController extends Controller
{
    /**
     * 属性的添加页面
     */
    public function getAdd()
    {
    	// 获取类型的信息
    	$types = Type::select("name","id")->get();
    	// dd($types);
    	return view("admin.attr.add",[
    		"title"=>"属性添加",
    		"types"=>$types,
    	]);
    }

    /**
     * 插入操作
     */
    public function postInsert(AttrRequest $request)
    {   
        // dd($request->all());
        $attr = new Attr;
        $attr->name = $request->input("name");
        $attr->type_id = $request->input("type_id");
        $attr->status = $request->input("status");
        if($attr->save()){
            return redirect("admin/attr/index")->with("success","属性添加成功");
        }else{
            return back()->with("error","添加失败");
        }

    }

    /**
     * 属性列表页
     */
    public function getIndex(Request $request)
    {
        // 获取所有的属性信息 
        $attrs = Attr::where(function($query)use($request){
                if(!empty($request)){
                    $query->where('name','like','%'.$request->input('search').'%');
                }
            })
            ->paginate($request->input('num', 10));

        return view("admin.attr.list",[
            "title"=>"属性列表",
            "attrs"=>$attrs,
            "request"=>$request,
        ]);
    }

    /**
     * ajax 改变属性状态
     */
    public function getAjaxUpdate(AjaxStatusRequest $request)
    {   
        // echo $request->input("id");
        $data = $request->only("status");
        if(Attr::where("id",$request->input("id"))->update($data)){
            echo 1;die;
        }else{
            echo 0;die;
        }
    }

    /**
     * 属性的编辑页面
     */
    public function getEdit(Request $request)
    {
        // dd($request->all());
        $attr = Attr::find($request->input("id"));
        $types = Type::select("name","id")->get();
        return view("admin.attr.edit",[
            "title"=>"属性修改",
            "attr"=>$attr,
            "types"=>$types,
        ]);
    }

    /**
     * 属性的更新操作
     */
    public function postUpdate(AttrRequest $request)
    {
        // dd($request->all());
        $data = $request->only(["name","type_id","status"]);
        if(Attr::where("id",$request->input("id"))->update($data)){
            return redirect("admin/attr/index")->with("success","属性修改成功");
        }else{
            return back()->wirh("error","修改失败");
        }

    }

    /**
     * 删除属性的操作
     */
    public function getDelete(Request $request)
    {
        // 删除属性
        DB::beginTransaction();
        if(Attr::where("id",$request->input("id"))->delete()){
            // 删除对应的属性值
            if(!empty(AttrValue::where("attr_id",$request->input("id"))->first())){

                if(AttrValue::where("attr_id",$request->input("id"))->delete()){
                    DB::commit();
                    return back()->with("success","删除成功");
                }else{
                    DB::rollback();
                    return back()->with("error","删除失败");
                }
            }else{
                DB::commit();
                return back()->with("success","删除成功");
            }
        }else{
            DB::rollback();
            return back()->with("error","删除失败");
        }
    }



}
