<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Shuff;
use \App\Cate;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CatesController;

class HomeController extends Controller
{
    /** 
     * 前台首页
     */
    public function index()
    {
    	$shuff = Shuff::orderBy("id","desc")->first();
        $cates = CatesController::getCatesByPid(0);
        // dd($cates);
    	return view('home.index',[
    		"title"=>"苏宁易购首页",
    		"shuff"=>$shuff,
    		"cates"=>$cates,
    	]);
    }

    /**
     * 瀑布流获取信息
     */
    public function pubu(Request $request)
    {
        // dd($request->input("num"));
        $cate = Cate::where("pid",0)->skip($request->input("num")-1)->first();

        // 取信息
        $cates = CatesController::getCatesByPid(Cate::where("pid",0)->skip($request->input("num")-1)->first()->id);
        // dd($cates[2]->name);

        $data = '<div class="jd_floor"> <div class="title"> <h2><i>'.$request->input("num").'F</i>'.$cate->name.'</h2> </div> <div class="aside"> <div class="aside_sort"> <div class="aside_main"> <a href="#" target="_blank"> <img src="/homes/images/floor1.jpg" alt=""> </a> </div> <ul class="aside_sbj"> <li class="item sbj1"> <a href="#" target="_blank"><i></i></a> </li> </ul> <ul class="aside_rec"> <li> <a href="#" target="_blank"></a> </li> <li> <a href="#" target="_blank"></a> </li> </ul> </div> <div class="aside_ad"> <a href="#" target="_blank"> <img src="/homes/images/floor_ad.jpg" alt=""> </a> </div> </div> <div class="floor_main"> <ul class="floor_col1"> <li><a href="#" target="_blank"><img src="/homes/images/floor1_1.jpg" alt=""></a></li> <li><a href="#" target="_blank"><img src="/homes/images/floor1_2.jpg" alt=""></a></li> <li><a href="#" target="_blank"><img src="/homes/images/floor1_3.jpg" alt=""></a></li> </ul> <ul class="floor_col2"> <li><a href="#" target="_blank"><img src="/homes/images/floor2_1.jpg" alt=""></a></li> <li><a href="#" target="_blank"><img src="/homes/images/floor2_2.jpg" alt=""></a></li> <li><a href="#" target="_blank"><img src="/homes/images/floor2_3.jpg" alt=""></a></li> <li><a href="#" target="_blank"><img src="/homes/images/floor2_4.jpg" alt=""></a></li> </ul> <ul class="floor_col3"> <li><a href="#" target="_blank"><img src="/homes/images/floor3_1.jpg" alt=""></a></li> <li><a href="#" target="_blank"><img src="/homes/images/floor3_2.jpg" alt=""></a></li> <li><a href="#" target="_blank"><img src="/homes/images/floor3_3.jpg" alt=""></a></li> </ul> </div> </div>';

        echo $data;
        die;

    }
    
}

