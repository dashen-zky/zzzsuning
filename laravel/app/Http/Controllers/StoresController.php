<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Good;
use App\Type;
use App\Store;
use App\Pic;
use Config;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StoresController extends Controller
{
    //
    /**
     * 库存的添加界面
     */
    public function getAdd(Request $request)
    {
    	// dd();
    	// 商品
        $good = Good::find($request->input("id"));
        // dd($good);
    	$stores = Store::where("good_id",$request->input("id"))
            ->paginate($request->input('num', 10));
    	// dd($good);
    	return view("admin.store.add",[
    		"title"=>"添加库存",
            "good"=>$good,
            "stores"=>$stores,
    		"request"=>$request,

    	]);
    }

    /**
     * 库存的插入操作
     */
    public function postInsert(Request $request)
    {
    	// 获取商品的信息
    	$good = Good::find($request->input("good_id"));
    	
    	$arr = [];
    	// 判断销售属性是否有空
    	foreach($good->type->attr as $k=>$v){
    		$name = $v->name;
    		$this->validate($request, [
	        	$name => 'required',
	        ],[
	        	"{$name}.required"=>$name."不能为空",
	        ]);
            
    		$arr[$v->id] = $request->input($v->name); 
    	}
    	$arr = json_encode($arr);
    	// 验证价格 等是否为空
    	$this->validate($request, [
	    		"price"=>"required|regex:/^\d+$/",
	    		"count"=>"required|regex:/^\d+$/",
	    		"img"=>"required",
	        ],[
		        "price.required"=>"价格不能为空",
		        "price.regex"=>"价格格式不正确",
		        "count.required"=>"库存不能为空",
		        "count.regex"=>"库存格式不正确",
		        "img.required"=>"商品展示图不能为空",
	        ]);


	   // 处理图片
	    $images = [];
	    if(!empty($request->hasFile("img"))){
	    	//
	    	// 遍历
	    	foreach ($request->file('img') as $key => $value) {
                // echo $value->getClientOriginalExtension()."<br>";
                $dir = Config::get('app.upload_dir');
                $name = time().rand(100000,999999).'.'.$value->getClientOriginalExtension();
                $value->move($dir, $name);
                //修改图片的路径 
                $images[] = trim($dir.$name,'.');
            }
            // die;
	    }

        // 创建 库存model
    	$store = new Store;
    	$store->good_id = $request->input("good_id");
    	$store->detail = $arr;
    	$store->price = $request->input("price");
    	$store->count = $request->input("count");
	    // 插入主表
	   DB::beginTransaction();
	    if($store->save()){
	    	// 插入附表
		    $pic = [];
			if(!empty($images)){
			    foreach ($images as $key => $value) {
		            $temp = [];
		            $temp['store_id'] = $store->id;
		            $temp['pic'] = $value;
		            $pic[] = $temp;
		        }
		        // dd($pic);
		        if(Pic::insert($pic)){
                    DB::commit();
                    return back()->with('info','添加成功');
                }else{
                    DB::rollback();
                    return back()->with('error','添加失败');
                }
	        }else{
                DB::commit();
                return redirect()->with('info','添加成功');
	        }
	    }else{
            DB::rollback();
            return back()->with('error','添加失败');
	    }

    }	

    /**
     * 库存的列表页
     */
    public function getIndex(Request $request)
    {
    	$stores = Store::where(function($query)use($request){
                //判断当前请求的keywords参数
                $search = $request->input('search');
                //检测
                if(!empty($search)){
                    $query->where('title','like','%'.$search.'%');
                }
            })
            ->paginate($request->input('num',10));

      
        // 解析模板
        return view("admin.store.list",[
        	"title"=>"库存列表",
        	"stores"=>$stores,
        	"request"=>$request,
        ]);
    }
<<<<<<< HEAD

    /**
     * 库存删除
     */
    public function getDelete(Request $request)
    {
        // 删除操作
        DB::beginTransaction();
        if(Store::where("id",$request->input("id"))->delete()){
            if(Pic::where("store_id",$request->input("id"))->delete()){
                DB::commit();
                return back()->with("success","删除成功");
            }else{
                DB::rollback();
                return back()->with("error","删除失败");
            }
        }else{
            DB::rollback();
            return back()->with("error","删除失败");
        }
    }
=======
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
}
