<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use App\Good;
use App\Brand;
use App\Cate;
use App\Attr;
use App\store;
use App\Pic;
use App\Http\Requests;
use App\Http\Requests\GoodRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CatesController;

class GoodsController extends Controller
{
    /**
     * 商品的添加页面
     */
    public function getAdd()
    {
    	// 获取所有相关的数据
    	$cates = CatesController::getFen();
    	$types = Type::get();
	    $brands = Brand::get();
	    
    	return view("admin.good.add", [
    		"title"=>"商品的添加页面",
    		"cates"=>$cates,
    		"types"=>$types,
    		"brands"=>json_encode($brands),	
    	]);
    }

    /**
     * 商品的插入操作
     */
    public function postInsert(GoodRequest $request)
    {	
    	// dd($request->file("img")->getClientOriginalExtension());
    	// 处理图片
    	$dir = "./public/admin/images/goods/".date("Ymd").'/';
    	$name = rand(100000,999999).$request->file("img")->getClientOriginalExtension();
    	$request->file("img")->move($dir,$name);
    	$imgurl= trim($dir.$name,".");
    	// dd($request->all());
    	$good = new Good;
    	$good->name = $request->input("name");
    	$good->title = $request->input("title");
    	$good->type_id = $request->input("type_id");
    	$good->cate_id = $request->input("cate_id");
    	if(!empty($request->input("brand_id"))){
    		$good->brand_id = $request->input("brand_id");
    	}
    	$good->status = $request->input("status");
        $good->price = $request->input("price");
    	$good->img = $imgurl;
    	$good->content = $request->input("content");
    	// $good->img = trim($dir.$name);
    	if($good->save()){
    		return redirect("admin/good/index")->with("success","商品添加成功");
    	}else{
    		return back()->with("error","商品添加失败");
    	}
    }

    /**
     * 商品的列表页
     */
    public function getIndex(Request $request)
    {
    	// 读取商品的信息
    	$goods = Good::where(function($query)use($request){
                if(!empty($request)){
                    $query->where('name','like','%'.$request->input('search').'%');
                }
            })
            ->paginate($request->input('num', 10));

        return view("admin.good.list",[
        	"title"=>"商品的列表页",
        	"goods"=>$goods,
        	"request"=>$request,
        ]);
    }

    /**
     * 商品上架的下架的 ajax  
     */

    public function getAjaxUpdate(Request $request)
    {
    	// echo 0;
    	$data = $request->only("status");
    	if(Good::where('id',$request->input("id"))->update($data)){
    		echo 1;die;
    	}else{
    		echo 0;die;
    	}
    }

<<<<<<< HEAD
    /**************************   前台商品显示    *****************************/
    
    /**
     * 前台的页面显示 详情
=======


    /**************************   前台商品显示    *****************************/

    /**
     * 前台的页面显示 详情 *****************************************
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
     */
    public function detail(Request $request)
    {
        $good = Good::find($request->input("id"));  
        // 获取对应的商品
        $stores = Store::where("good_id",$request->input("id"))->get();
        $detail = [];
        // 处理信息
        foreach($stores as $k=>$v){
            foreach(json_decode($v->detail) as $key=>$value){
                if(!array_key_exists($value,$detail)){
                    $detail[$value] = $key;
                }
            }
        }

<<<<<<< HEAD
=======
        // dd($detail);
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
        // 模板解析
        return view("home.good.detail",[
            "title"=>"商品的详情",
            "good"=>$good,
            "detail"=>$detail,
        ]);
    }

<<<<<<< HEAD
=======

>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
    /**
     * ajax 请求 改变 价格 等
     */
    public function ajaxDetail(Request $request)
    {   
        $detail = trim($request->input("detail"),",");
<<<<<<< HEAD
=======
        // $data = '';
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
        // $good = Good::find($request->input("id"));  
        // 查找对应的库存信息
        $store = Store::where("good_id",$request->input("id"))
            ->where(function($query)use($request,$detail){
                $detail = json_encode($detail);
                $detail = '{"'.trim(str_replace('\"','"',$detail),'"').'"}';
                // echo $detail;die;
                $query->where("detail",$detail);
            })
            ->first();

        if($store){
            $data = []; 
            $pics = Pic::where("store_id",$store->id)->get();
            // dd($pics);
            $data[] = $store;
            $data[] = $pics;
            // dd($pics);
            echo json_encode($data);
            die;
        }else{
            echo 0;
            die;
        }
        
    }

    /**
     * 商品的列表
     */
<<<<<<< HEAD
    public function list(Request $request)
    {
        // 获取 分类的信息
        $cate = Cate::find($request->input("cate_id"));
=======
    public function lieBiao(Request $request)
    {
        // 获取 分类的信息
        $cate = Cate::find($request->input("cate_id"));
        // dd();
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
        $good = Good::where("cate_id",$request->input("cate_id"))->first();
        // dd($good->type->spec);

        // 获取商品 的信息 
        $goods = Good::where(function($query)use($request){
                if(!empty($request->input("cate_id"))){
                    $query->where("cate_id",$request->input("cate_id"));
                }
                if(!empty($request->input("brand_id"))){
                    $query->where("brand_id",$request->input("brand_id"));
                }
                if(!empty($request->input("type_id"))){
                    $query->where("type_id",$request->input("type_id"));
                }

            })
            ->get();

        // 遍历 
       
        $stores = Store::where(function($query)use($goods){
                $query->where("good_id",$goods[0]->id);
                foreach($goods as $key=>$value){
                    if($key == 0) continue;
                        $query->orWhere("good_id",$value->id);
                    }
                }
<<<<<<< HEAD

=======
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
            )
            ->paginate(4);
        // dd($stores);

        return view("home.good.list",[
            "title"=>"商品列表",
            "good"=>$good,
            "cate"=>$cate,
            "stores"=>$stores,
            "request"=>$request,
        ]);

    }
}
