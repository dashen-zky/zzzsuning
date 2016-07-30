<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use App\Http\Requests;
use App\Http\Requests\TypeRequest;
use App\Http\Controllers\Controller;

class TypesController extends Controller
{
    /**
     * 类型的添加页面
     */
    public function getAdd()
    {
        return view("admin.type.add",[
            "title"=>"类型添加",
        ]);
    }

    /**
     * 类型的插入操作
     */
    public function postInsert(TypeRequest $request)
    {
        $type = new Type;
        $type->name = $request->input("name");
        $type->status = $request->input("status");

        //插入表
        if($type->save()){
            return redirect("/admin/type/index")->with("success","类别添加成功");
        }else{
            return back()->with("error","类别添加失败");
        }
    }

    /**
     * 类型的列表页
     */
    public function getIndex(Request $request)
    {
        // 获取类型所有数据
        $types = Type::where("name","like","%".$request->input("search")."%")->paginate($request->input("num",10));
        return view("admin.type.list",[
            "title"=>"类型列表",
            "types"=>$types,
            "request"=>$request,
        ]);        
    }

    /**
     * ajax 请求 改变类型状态
     */
    public function getAjaxUpdate(Request $request)
    {
        // dd(5457);
        $data = $request->only(["status"]);
        // dd($request->all());
        if(Type::where("id",$request->input("id"))->update($data)){
            echo 1;die;
        }else{
            echo 0;die;
        }

    }

    /**
     * 类型的修改页面
     */
    public function getEdit(Request $request)
    {
        // 获取 类型的信息
        $type = Type::find($request->input("id"));
        //模板解析32
        return view("admin.type.edit",[
            "title"=>"类型编辑",
            "type"=>$type,
        ]);

    }

    /**
     * 类型的更新
     */
    public function postUpdate(TypeRequest $request)
    {
        $data = $request->only(["name","status"]);
        // dd($data);
        // /更新类型
        if(Type::where("id",$request->input("id"))->update($data)){
            return redirect("/admin/type/index")->with("success","类别更新成功");
        }else{
            return back()->with("error","类别更新失败");
        }
    }

    public function getDelete(Request $request)
    {   
<<<<<<< HEAD
=======
        // $isDelete = false;
        // // dd(5263456);
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
        // DB::beginTransaction();
        //     // 删除类型
        //     if(Type::where("id",$request->input("id"))->delete()){
        //         // 删除类型下面的属性
        //         if(Attr::where("type_id",$request->input("id"))->first()){
        //             // 删除属性下面的属性值
<<<<<<< HEAD
        //             Attr::where("type_id",$request->input("id"));
=======
        //             Attr::where("type_id",$request->input("id"))
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
        //             }else{
        //                 DB::rollback();
        //                 return back()-with("error","删除失败");
        //             }
        //         }else{
        //             $isDelete = true;
        //         }

<<<<<<< HEAD
=======
        //         // 删除类型下面的所有商品
        //         if(Good::){}
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
        //     }
    }
}
