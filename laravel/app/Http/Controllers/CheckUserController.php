<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; 
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CheckUserController extends Controller
{
    public function  getAjaxCheckUser(Request $request)
    {
        //模型查询  
        $info = User::where('username',$request->input('username'))->first();
        if(!$info){
            echo 1;
        }else{
            echo 0;
        }
    }

    public function getAjaxCheckEmail(Request $request)
    {
        //模型查询
        $info = User::where('email',$request->input('email'))->first();
        if(!$info){
            echo 1;
        }else{
            echo 0;
        }
    }
}