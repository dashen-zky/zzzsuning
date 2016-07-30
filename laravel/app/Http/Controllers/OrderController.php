<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Order;
use App\Good;
use DB;
use App\OrderGoods;
use Config;

class OrderController extends Controller
{
   public function create(Request $request)
   {
        //将信息插入到订单表中
        $order = new Order;
        $order ->num = time().rand(100000,999999);
        $order ->user_id = session('uid');
        $order ->total = $this->calculate();
        // dd($this->calculate());
        $order ->address_id = $request->input('address_id');
        $order ->status = 0;//初始化状态
        $order ->paytype = $request->input('paytype');

        DB::beginTransaction();
        //插入主表
        if($order->save()){
        	//遍历
        	$goods =session('orderGoods');
        	// dd($goods);
        	foreach ($goods as $key=>$value){
        		//创建模型
        		$orderGoods = new OrderGoods;
        		$orderGoods ->order_id =$order ->id;
        		$orderGoods ->goods_id = $value['id'];
        		$orderGoods ->num = $value['num'];
        		unset($value["id"]);
        		unset($value["num"]);
        		unset($value["price"]);
        		// dd($value);
        		$orderGoods ->detail= json_encode($value);
        		// cha ru 
        		if($orderGoods->save()){
        			DB::commit();
        			//跳转到第三方平台进行支付
        			return redirect('http://pay.xiaohigh.com/api/deal?to=xiaohigh@163.com&money='.$order->total.'&order_id='.$order->id.'&info='.config::get('app.App_NAME').'商品购买&return_url=http://www.isuning.com/Order/changeStatus?order_id='.$order->id);

        		}else{
        			DB::rollback();
        			return back();
        		}

        	}
        }else{
        	DB::rollback();
        	return back();
        }
	}

	/**
	*计算总价
	*/
	private function calculate()
	{
		$goods = session('orderGoods');
		$total = 0;
		foreach ($goods as $key=>$value){
			$tmp = $value['price']*$value['num'];
			$total += $tmp;
		}
		return $total;
	}

	public function changeStatus(Request $request)
	{
		//获取参数
		$status = $request->input('status');
		$status = $request->input('order_id');
		//检测
		if($status == '00'){
			$order = Order::find($order_id);
			//更新字段
			$order -> status = 1;
			session(['orderGoods'=>null]);
			if($order->save()){
				return view('index.order.reminder');
			}
		}
	}
}
