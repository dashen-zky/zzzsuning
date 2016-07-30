@extends('layout.person')

@section('content')
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人详情</title>
	<style>
		*{
			margin:0px;
			padding:0px;
		}
		.title{
			width:1420;
			height:61px;
			background:#FF7700;
		}
		.log{
			float:left;
			width:138px;
			height:61px;
			background:url('/persons/log.jpg');
			margin-left:100px;
		}
		.log_1{
			float:left;
			width:250px;
			height:61px;
			margin-left:150px;
		}
		font{
			float:left;
			line-height:60px;
			padding-right:38px;
			color:#FFF;
			font-size:15px;
		}
		.middle{
			width:1420px;
			height:776px;
		}
		.middle_left{
			float:left;
			width:260px;
			height:776px;
			background:#F5F5F5;
		}
		.content{
			float:right;
			width:1158px;
			height:776px;
			background:#F5F5F5;
		}
		.geren{
			width:1069px;
			height:750px;
			border:1px solid #DDDDDD;
			margin-top:30px;
			margin-left:20px;
			background:#FFFFFF;
		}
		.geren_top{
			width:1069px;
			height:40px;
			background:url('/persons/geren_top.jpg');
		}
		table,td{
			border-collapse:collapse;
		}
		td{
			padding:10px;
			font-size:20px;
		}
		.price{
			width:65px;
			height:65px;
			border-radius:20%;
			border:1px solid #FF7700;
		}
		.but{
			width:75px;
			height:35px;
			background:#FF7700;
			margin-left:10px;
		}
		.butx{
			width:75px;
			height:35px;
			background:#FF7700;
		}
	</style>
</head>
<body>
	<div class="title">
		<div class="log"></div>
		<div class="log_1">
			<font><a href="#">账户管理</a></font>
			<font><a href="#">消息</a></font>
			<font><a href="#">信息</a></font>
		</div>
	</div>

	<!-- 中间-->
	<div class="middle">
		<div class="middle_left"></div>
		<div class="content">
			<div class="geren">
				<div class="geren_top"></div>
				<div class="geren_xx">
					<!-- 个人form表单 -->
			 @if(session('info'))
            <div class="mws-form-message success">
                {{session('info')}}
            </div>
             @endif

              @if(session('error'))
            <div class="mws-form-message error">
                {{session('error')}}
            </div>
           	  @endif
			<fieldset  style="width:500px;margin-top:70px; margin-left:100px">
			<form action="/person" method="post" enctype="multipart/form-data">
			<div class="price"><img width="100%" src="{{$info['profile']}}" alt=""></div>
			  <input type="file" name="profile"  value=""><br><br>
			<table border="1">
				<tr>
					<td>账户:</td><td><span>{{session('username')}}</span></td>
			 	</tr>
			 	<tr>
					<td>昵称:</td><td><input type="text" name="pricname" value="{{$info['pricname']}}"></td>
			 	</tr>
			 	<tr>
			 		<td>性别:</td><td><input type="radio" name="sex" value="1" @if(($info['sex'])==1) checked="checked" @endif>男

			 					  		<input type="radio" name="sex" value="0"  @if(($info['sex'])==0) checked="checked" @endif>女
			 					  		<input type="radio" name="sex" value="2" @if(($info['sex'])==2) checked="checked" @endif>保密
			 					   </td>
			 	</tr>

			 	<tr> 
			 		<td> 邮箱:</td><td><span>{{session('email')}} <a href="#">修改邮箱</a></span></td>
			 	</tr>

			 	<tr>
					<td>手机:</td><td><input type="text" name="phone" value="{{$info['phone']}}"></td>
			 	</tr>
			 </table>
			 {{csrf_field()}}
			 <!-- 隐藏传值-->
			 <input type="hidden" name = "user_id" value="{{session('uid')}}">
			 <input class="but" type="submit" value="保存">    
			 <input class="butx"type="reset" value="重置">
			</table>
			</form>
			</fieldset>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
	
@endsection
