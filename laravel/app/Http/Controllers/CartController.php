<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\Http\Requests;
use App\Http\Controllers\Controller;
<<<<<<< HEAD

class CartController extends Controller
{
    /**
     * 添加到购物车
=======
use App\Address;


class CartController extends Controller
{
	
    /**
     * 添加到购物车 购物车信息添加操作
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
     */
    public function add(Request $request)
    {
        // $request->session()->flush();
        //  判断是否已经存在
        $res = $this->checkExist($request->input("id"));
        if(!$res){
            $request->session()->push("cart",$request->except(["_token"]));
        }
        $store = Store::find($request->input("id"));
        // dd($request->all());
        $data = $request->except(["_token","id","price","num"]);
        $num = $request->only(["num"]);
        // 解析模板
        return view("home.cart.add",[
            "title"=>"购物车",
            "store"=>$store,
            "data"=>$data,
            "num"=>$num,
        ]);
    }

    private function checkExist($id)
    {
        $goods = session("cart");
        if(!empty($goods)){
            foreach($goods as $key=>$value){
                if($id == $value["id"]){
                    // echo $value["id"];
                    // die;
                    return true;
                }else{
                    return false;
                }
            }
        }else{
            return false;
        }
    }

    /**
<<<<<<< HEAD
     * 购物车页面
=======
     * 购物车详情页面
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
     */
    public function goodscart()
    {
        // 遍历session
        // echo "<pre>";
        $data = [];
<<<<<<< HEAD
=======
        $total =0;
        $zt = 0;
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
        if(!empty(session("cart"))){
            foreach(session("cart") as $k=>$v){
                // var_dump($v);
                $data[] = Store::find($v["id"]);
<<<<<<< HEAD
            }
        }
        // dd(session("cart"));
        // 解析模板
        return view("home.cart.goodscart",["title"=>"购物车","data"=>$data]);
    }

    /**
     * 副教授的飞机哦都是分开收到了富婆教师可点击f
     */
=======
                $total += $v['price'] * $v['num'];
                $zt += $v['num'];
            }
        }
        // dd(session("cart"));
        // dd($data);
        // 解析模板
        return view("home.cart.goodscart",[
            "title"=>"购物车",
            "data"=>$data,
            "total"=>$total,
            "zt" => $zt
            ]);
    }

    /**
    *订单商品确认页面
    */

    public function confirm(Request $request)
    {
        //获取
        $goods = (session('cart'));
        //筛选数据
        $goods = $this->shaixuan($goods);
        //将信息存入session
        session(['orderGoods'=>$goods]);

        //将当前的用户地址全部读取出来
        $address = Address::where('user_id',session('uid'))->get();
        //显示模板
        return view('index.cart.confirm',[
            'address' => $address,
            'goods' => $goods
            ]);
    }

    private function shaixuan($goods)
    {
        foreach($goods as $key => $value){
            if(empty($value['id'])){
                unset($goods[$key]);
            }
        }
        return $goods;
    }
   

>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
}
