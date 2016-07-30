<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use App\Shuff;
use App\Http\Requests;
use App\Http\Requests\ShuffRequest;
use App\Http\Controllers\Controller;

class ShuffController extends Controller
{
    /**
     * 轮播图配置页面
     */
    public function getAdd()
    {
        return view("admin.shuff.add",["title"=>"添加轮播图"]);
    }
    
    /**
     * 轮播图插入
     */
    public function postInsert(ShuffRequest $request)
    {
        // 处理图片
        $images = [];
        if(!empty($request->hasFile("img"))){
            // 遍历
            foreach ($request->file('img') as $key => $value) {
                $dir = Config::get('app.upload_dir')."shuff/";
                $name = time().rand(100000,999999).'.'.$value->getClientOriginalExtension();
                $value->move($dir, $name);
                //修改图片的路径 
                $images[] = trim($dir.$name,'.');
            }
        }

        // 插入到数据库
        $shuff = new Shuff;
        $shuff->imgs = json_encode($images);

        if($shuff->save()){
            return redirect("/admin/shuff/index")->with("success","轮播图插入成功");
        }else{
            return back()->with("error","轮播图插入失败");
        }
    }

    /**
     *  轮播图列表
     */
    public function getIndex()
    {
        // 获取库布图信息
        $shuffs = Shuff::orderBy("id","desc")
            ->paginate(15);
        // 模板解析
        return view("admin.shuff.list",["title"=>"轮播图列表","shuffs"=>$shuffs]);        

    }

    /**
     * 轮播图的删除
     */
    public function getDelete(Request $request)
    {
        // 删除操作
        if(Shuff::where("id",$request->input("id"))->delete()){
            return back()->with("success","删除成功");
        }else{
            return back()->with("error","删除失败");
        }
    }

}
