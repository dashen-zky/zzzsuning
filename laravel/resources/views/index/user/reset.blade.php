<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>找回密码</title>
	<link rel="stylesheet" href="/homes/css/forget.css">
	<style>
	  .active {
			border:solid 1px blue;
			/*width:300px;*/
		}
	  .remind{
			color:green;
		}
	  .errorStatus{
			border:solid 1px red;
		}
      .error{
			color:red;
      	}
      	*{
			margin:0px;
			padding:0px;
		}
		li{
			list-style:none;
		}
		.title{
			width:100%;
			height:172px;
			background:url('/homes/images/forget.jpg');
		}

		body{
			background:#F8F8F8;
		}
		
		.next{
			width:992px;
			height:579px;
			background:#FFFFFF;
			margin:0px auto;
			border:1px solid #FFFFFF;
		}

		#input{
			width:460px;
			height:51px;
			font-size:20px;
		}
		.next_1{
			width:700px;
			height:400px;
			/*border:1px solid red;*/
			margin-top:100px;
			margin-left:230px;
		}
		.next_1a{
			width:700px;
			height:54px;
		}
		.next_1b{
			width:700px;
			height:54px;
			/*border:1px solid #EEEEEE;*/
			margin-top:35px;
		}
		#sub{
			width:460px;
			height:53px;
			background:#F8B500;
			margin-top:70px;
			font-size:26px;
			color:#FFFFFF;
		}
		.fort{
			width:100%;
			height:161px;
		}
	</style>
</head>
<body>
	<div class="title"></div>
	<div class="next">
		<div class="next_1">
				@if(session('error'))
            		<div class="error">
            		{{session('error')}}
            	</div>
            	@endif
		<form action="/reset" method="post">
			<div class="next_1a">
				<ul>
					<li>
						<input id="input" class="input" type="password" name="password" placeholder="请输入您的新密码">
						<span class="remind"></span>
					</li>
				</ul>
			</div>
			<div class="next_1b">
				<ul>
					<li>
						<input id="input" class="input" type="password" name="repassword" placeholder="请再次输入您的密码">
						<span class="remind"></span>
					</li>
				</ul>
			</div>
			<!-- 表单提交 -->
				{{csrf_field()}}
				<!-- 这里的token 是用来检测的 为了安全 -->
				<input type="hidden" name="id" value="{{$user->id}}">
				<input type="hidden" name="token" value="{{$user->token}}">
				<input id="sub" class="input" type="submit" value="点击重置">
			</div>
		</form>
	</div>

	<!-- 尾部 -->
	<div class=fort></div>

	<!-- 使用js 表单验证-->
	<script type="text/javascript" src="/homes/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript">
		var CUSER = false;
		var CPASS = false;

		//绑定丧失焦点事件
	$('input[name=password]').blur(function(){
		//获取值
		var s = $(this).val();
		//正则检测
		var reg = /^\S{6,18}$/;
		var res = reg.test(s);
		var t = $(this);
		if(!res){
			//移出原来的样式 添加新的class
			$(this).removeClass().addClass('errorStatus');
			$(this).next().removeClass().addClass('error').html('密码格式错误').show();
			CPASS = false;
		}else{
			t.removeClass();
			t.next().removeClass().addClass('remind').html('√');
			CPASS = true;
		}
	})

	//绑定丧失焦点事件
	$('input[name=repassword]').blur(function(){
		//获取值
		var v = $(this).val();
		var t = $(this);
		//检测两次密码是否一至
		if(v != $('input[name=password]').val()){
			//移除原来的样式 添加新的class
			$(this).removeClass().addClass('errorStatus');
			$(this).next().removeClass().addClass('error').html('两次密码输入不一致').show();
			CPHONE = false;
		}else{
			t.removeClass();
			t.next().removeClass().addClass('remind').html('√');
			CPHONE = true;
		}
	})

		//绑定提交事件
		$('form').submit(function(){

			if(CPHONE && CPASS){
				return true
			}else{
				return false;
			}
		})
	</script>
	
</body>
</html