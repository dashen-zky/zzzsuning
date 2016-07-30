<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Area;
use App\Address;

class AddressController extends Controller
{
    /**
    * 获取省份信息
    */
    public function getProvince()
    {
        //获取省份信息
        $prov = Area::where('arrparentid',0)->orderBy('areaid','asc')->select('areaid','areaname')->get();
       //ajax返回
        return  response()->json($prov);
        // dd(json($prov));
        die;
    }

    /**
    *获取市区信息
    */
    public function getCity(Request $request)
    {
        //获取省份id
        $pid = $request->input('province_id');
        //查询数据库
        $res = Area::where('parentid',$pid)->orderBy('areaid','asc')->get();
        //返回结果
        return response()->json($res);
    }

    /**
    *获取县信息
    */
    public function getXian(Request $request)
    {
        //获取县id
        $pid = $request->input('province_id');
        //查询数据库
        $res = Area::where('parentid',$pid)->orderBy('areaid','asc')->get();
        //返回结果
        return response()->json($res);
    }

    /**
    *添加收货地址
    */
    public function insertAddress(Request $request)
    {   
        //做插入动作
        $address = new Address;
        $address -> name = $request->input('name');
        $address -> phone = $request->input('phone');
        $address -> sheng = $request->input('sheng');
        $address -> shi = $request->input('shi');
        $address -> xian = $request->input('xian');
        $address -> youbian = $request->input('youbian');
        $address -> user_id = $request->input('user_id');
        $address -> detail = $request->input('detail');
        $address -> isdefault = $request->input('isdefault');
        $address -> user_id = session('uid');
        //检测
        if($address->save()){
            echo 1;
        }else{
            echo 0;
        }
    }

    /**
    *修改收货地址
    */
    public function delete(Request $request)
    {
        if(Address::where("id",$request->input('id'))->delete()){
            echo 1;die;
        }else{
            echo 0;die;
        }

    } 
}
