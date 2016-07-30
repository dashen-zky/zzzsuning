<?php

namespace App\Http\Controllers;

use App\Brand;
// use App\Cate;
use Config;
use DB;
// use Cate;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\TypeRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Http\Controllers\CatesController;

class BrandsController extends Controller
{
    /**
     * 品牌的添加页面
     */
    public function getAdd()
    {
        // 获取分类的信息
        $cates = CatesController::getFen();
        return view("admin.brand.add",[
            "title"=>"品牌添加",
            "cates"=>$cates,
        ]);
    }

    /**
     * 品牌的插入操作
     */
    public function postInsert(BrandRequest $request)
    {
        $brand = new Brand;
        // 判断并处理图片
        $data = [];
        if($request->hasFile("img")){
            $dir = Config::get("app.upload_dir");
            $name = Config::get("app.upload_img_name").'.'.$request->file("img")->getClientOriginalExtension();
            $request->file("img")->move($dir,$name);
            //修改图片路径
            $data['img'] = trim($dir.$name,".");
            $brand->img = $data["img"];
        }
        // dd($data);
        $brand->name = $request->input("name");
        $brand->status = $request->input("status");
        $brand->cate_id = $request->input("cate_id");

        // dd($brand);
        //插入表
        if($brand->save()){
            return redirect("/admin/brand/index")->with("success","品牌添加成功");
        }else{
            return back()->with("error","品牌添加失败");
        }
    }

    /**
     * 品牌的列表页
     */
    public function getIndex(Request $request)
    {
        // dd($request->input('search'));
        // 获取所有的品牌信息 和 分类信息
        $data = Brand::where(function($query)use($request){
                //判断当前请求的keywords参数
                $search = $request->input('search');
                //检测
                if(!empty($search)){
                    $query->where('name','like','%'.$search.'%');
                }
            })
            ->paginate($request->input('num',10));

        // 模板返回
        return view("admin.brand.list",[
            "title"=>"品牌列表",
            "data"=>$data,
            "request"=>$request,
        ]);
    }

    /**
     * 品牌的状态操作 ajax
     */
    public function getAjaxUpdate(Request $request)
    {
        // dd($request->all());
        $data = $request->only(["status"]);
        // 更新状态
        if(Brand::where('id',$request->input("id"))->update($data)){
            echo 1;die;
        }else{
            echo 0;die;
        }
    }

    /**
     * 品牌的修改页面
     */
    public function getEdit(Request $request)
    {
        $brand = Brand::find($request->input("id"));
        $cates = CatesController::getFen();
        return view("admin.brand.edit",[
            "title"=>"品牌修改",
            "brand"=>$brand,
            "cates"=>$cates,
        ]);
    }

    /**
     * 品牌的更新操作
     */
    public function postUpdate(BrandRequest $request)
    {
        $data = $request->except(["id","_token"]);
        // 判断是否上传了图片
        $data = [];
        if($request->hasFile("img")){
            $dir = Config::get("app.upload_dir");
            $name = Config::get("app.upload_img_name").'.'.$request->file("img")->getClientOriginalExtension();
            $request->file("img")->move($dir,$name);
            //修改图片路径
            $data['img'] = trim($dir.$name,".");
            //删除原来的图片
            $url = ".".Brand::find($request->input("id"))->img;
            if($url){
                unlink($url);
            }
        }

        // 执行更新操作
        if(Brand::where("id",$request->input("id"))->update($data)){
            return redirect("/admin/brand/index")->with("success","品牌修改成功");
        }else{
            return back()->with("error","品牌修改失败");
        }
    }

    /**
     * 品牌的删除操作
     */
    public function getDelete(Request $request)
    {
        // 删除品牌
        if(Brand::where("id",$request->input("id"))->delete()){
            return back()->with("success","删除成功");
        }else{
            return back()->with("error","删除失败");
        }
    }

}
