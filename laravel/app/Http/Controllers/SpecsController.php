<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Type;
use App\Spec;
use App\SpecValue;
use App\Http\Requests;
use App\Http\Requests\SpecRequest;
use App\Http\Controllers\Controller;

class SpecsController extends Controller
{
    //
    /**
     * 规格的添加
     */
    public function getAdd()
    {
        // 获取所有的类型
        $types = Type::get();
        // dd($types);
        // 模板解析
        return view("admin.spec.add",[
            "title"=>"规格的添加",
            "types"=>$types,
        ]);
    }

    /**
     * 规格的插入操作
     */
    public function postInsert(SpecRequest $request)
    {
        $spec = new Spec;
        $spec->name = $request->input("name");
        $spec->type_id = $request->input("type_id");
        $spec->status = $request->input("status");
        //
        if($spec->save()){
            return redirect("admin/spec/index")->with("success","规格添加成功");
        }else{
            return back()->with("error","规格添加失败");
        }
    }

    /**
     * 规格列表显示
     */
    public function getIndex(Request $request)
    {
        // 获取所有的规格信息
        $specs = Spec::where(function($query) use($request){
                if(!empty($request)){
                    $query->where('name','like','%'.$request->input('search').'%');
                }
            })
            ->paginate($request->input('num', 10));
        // 返回模板
        return view("admin.spec.list",["title"=>"规格列表","specs"=>$specs,"request"=>$request]);
    }

    /**
     * 规格的状态 ajax 更新
     */
    public function getAjaxUpdate(Request $request)
    {       
        $data = $request->only(["status"]);
        if(Spec::where("id",$request->input("id"))->update($data)){
            echo 1;die;
        }else{
            echo 0;die;
        }
    }

    /**
     * 规格 的 修改页面
     */
    public function getEdit(Request $request)
    {   
        // 获取分类信息
        $types = Type::get();
        // 根据id 查找 规格信息
        $spec = Spec::find($request->input("id"));
        // 模板解析
        return view("admin.spec.edit",["title"=>"规格修改","spec"=>$spec,"types"=>$types]);

    }

    /**
     * 规格的更新操作
     */
    public function postUpdate(SpecRequest $request)
    {
        // 获取规格
        $data = $request->except(["id","_token"]);        
        //更新
        if(Spec::where("id",$request->input("id"))->update($data)){
            return redirect("admin/spec/index")->with("success","规格更新成功");;
        }else{
            return back()->with("error","规格更新失败");
        }
    }

    /**
     * 规格删除
     */
    public function getDelete(Request $request)
    {
        //删除规格
        DB::beginTransaction();
        if(Spec::where("id",$request->input("id"))->delete()){
            if(Param::where("spec_id",$request->input("id"))->first()){
                if(SpecValue::where("spec_id",$request->input("id"))->delete()){
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

