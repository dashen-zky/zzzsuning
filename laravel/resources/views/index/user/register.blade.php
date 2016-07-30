<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>注册页面</title>
	<link rel="stylesheet" href="/homes/css/common.css">
	<link rel="stylesheet" href="/homes/css/login_reg.css">
	<style type="text/css">
	.error{
		color:red;
	}
	.remind{
		color:green;
	}

	.active {
			border:solid 1px blue;
			/*width:300px;*/
		}

	.errorStatus{
			border:solid 1px red;
		}

	</style>
</head>
<body bgcolor="#F2F2F2">
	<!-- 顶部区域 -->
	<div id="top" class="w100">
		<div class="wm">
			<!-- 左侧地域选择 -->
			<div class="add fl">
				<ul>
					<li><a href="#">收藏苏宁</a></li>
				</ul>
			</div>
			<!-- 右侧信息 -->
			<div class="info fr">
				<ul>
					<li><a href="#">我的订单</a></li>
					<li><a href="#">我的苏宁</a></li>
					<li><a href="#">苏宁会员</a></li>
					<li><a href="#">企业采购</a></li>
					<li><a href="#">手机苏宁</a></li>
					<li><a href="#">关注苏宁</a></li>
					<li><a href="#">客户服务</a></li>
					<li><a href="#">网站导航</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- logo -->
	<div class="wm">
		<div class="regLogo">
			<a href="./index.php"><img src="/homes/images/log.png" alt=""></a>
		</div>
	</div>
	<!-- 注册表单 -->
	<div class="wm">
		<div class="regWay">
			<ul>
				<li class="on">个人用户</li>
				<li>企业用户</li>
				<li>International Customers</li>
			</ul>
		</div>
		<div class="fr alreadyReg">
			我已经注册，现在就
			<a href="/login" class="link" style="margin-right:20px;">登录</a>
			<a href="#" class="link fr">English</a>
		</div>
		<div class="clear"></div>
		<!-- 注册表单DIV -->
		<div class="regFormBox">
			<!-- 手机快速注册 -->
			<div class="phoneReg fr">
				<h3>手机快速注册</h3>
				<p>
					中国大陆手机用户,<br>
					编辑短信“<span>SN</span>”发送到: <br>
					<span>12345678911</span>
				</p>
			</div>
			<!-- 注册表单 -->
			<div class="regForm">
				<ul>
				<form action="/register" method="post">
					<li>
						<label for="">
							<i class="red">*</i>用户名:
						</label>
						<input  class="input" type="text" required name="username" remind="请输入8~18位字母数字下划线">
						<font color="red"></font>
						<span style="display:none" class="remind"></span>
					</li>
					<li>
						<label for="">
							<i class="red">*</i>
							请设置密码:
						</label>
						<input class="input" type="password" required name="password" remind="请输入6~18位非空白字符"> 
						<font color="red"></font>
					</li>
					<li>
						<label for="">
							<i class="red">*</i>
							请确认密码:
						</label>
						<input class="input" type="password" required name="repassword" remind="请再次输入密码">
						<span style="display:none" class="remind"></span>
					</li>
					<li>
						<label for="">
							<i class="red">*</i>
							邮箱验证:
						</label>
						<input class="input" type="text" required name="email" remind="请输入正确的邮箱地址">
						<span style="display:none" class="remind"></span>
					</li> 
					<li>
						<input type="checkbox" id="">
						我已阅读并同意<a href="#" class="link">《苏宁用户注册协议》</a>
					</li>
					<li>
						{{csrf_field()}}
						<input type="submit" value="立即注册">
					</li>
				</form>
				</ul>
			</div>
		</div>
	</div>
	<!-- js表单验证 -->
	<script style="text/javascript" src="/homes/js/jquery-1.8.3.min.js"></script>
	<script style="text/javascript">
		var CUSER = false;
		var CPASS = false;
		var CREPASS = false;
		var CEMAIL = false;

		//获取所有的input元素焦点事件绑定
		$('input').focus(function(){
			//获取文本
			var html = $(this).attr('remind');
			$(this).removeClass().addClass('active');
			$(this).next().show().removeClass().addClass('remind').html(html);
		})

		//用户丧失焦点事件
		$('input[name=username]').blur(function(){
				//获取元素的值
				var v = $(this).val();
				//正则检测
				var reg = /^\S{2,30}$/;
				var res = reg.test(v);
				var t = $(this);
				if(!res){
				//移出原来的样式 添加新的class
				$(this).removeClass().addClass('errorStatus');
				$(this).next().removeClass().addClass('error').html('用户名格式错误').show();
				CUSER = false;
		}else{
				//发送Ajax检测数据库
				//发送ajax检测用户名是否已经存在
			$.ajax({
				url: '/index/user/ajax-check-user',
				type: 'get',
				data: {username: v},
				success:function(data){
					if(data != '1'){
						t.removeClass().addClass('errorStatus');
						t.next().removeClass().addClass('error').html('用户名已经存在 请更换其他');
						CUSER = false;
					}else{
						t.removeClass();
						t.next().removeClass().addClass('remind').html('√');
						CUSER = true;
					}
				},
				async: false
			});
		}
	})

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
		}else{
			t.removeClass();
			t.next().removeClass().addClass('remind').html('√');
			CPHONE = true;
		}
	})

	//绑定丧失焦点事件
	$('input[name=email]').blur(function(){
		//获取值
		var v = $(this).val();
		var t = $(this);
		//正则匹配
		var reg = /^\w+@\w+\.(com|cn|com\.cn|org|hk|jp|net)$/;
		var res = reg.test(v);
		if(!res){
			//移除原来的样式 添加新的class
			$(this).removeClass().addClass('errorStatus');
			$(this).next().removeClass().addClass('error').html('邮箱格式不正确').show();
			CEMAIL = false;
		}else{
			//发送ajax请求 检测邮箱是否存在
			$.ajax({
				url: '/index/user/ajax-check-email',
				type: 'get',
				data: {email:v},
				success:function(data){
					if(data != '1'){
						t.removeClass().addClass('errorStatus');
						t.next().removeClass().addClass('error').html('邮箱已经存在 请更换');
						CEMAIL = false;
					}else{
						t.removeClass();
						t.next().removeClass().addClass('remind').html('√');
						CEMAIL = true;
					}
				},
				async: false
			});

		}
	})

	//绑定提交事件
	$('form').submit(function(){
		//如果每一个元素值都是ok的可以提交 否则不能提交
		$('input[name=username]').trigger('blur');
		$('input[name=password]').trigger('blur');
		$('input[name=repassword]').trigger('blur');
		$('input[name=email]').trigger('blur');

		if(CUSER && CPASS && CPHONE && CMAILES){
			return true;
		}else{
			return false;
		}
	})
	</script>
	<!-- 底部 -->
</body>
</html>