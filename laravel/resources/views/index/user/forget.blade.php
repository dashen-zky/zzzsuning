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
	</style>
</head>
<body>
	<div class="title"></div>
	<div class="next">
		<div class="next_1">
		<form action="/doforget" method="post">
			<div class="next_1a">
				<ul>
					<li>
						<input id="input" class="input" type="text" name="email" placeholder="请输入你的易购账号:邮箱号" remind="请填写正确的邮箱">
						<span style="display:none" class="remind"></span>
					</li>
				</ul>
			</div>
			<div class="next_1b">
				<ul>
					<li>
						<input id="vcode" class="input" type="text" name="captcha" placeholder="请输入验证码">
						<span style="display:none" class="remind"></span>
					</li>
				</ul>
          		<a onclick="javascript:re_captcha();" ><img src="{{ URL('/captcha/1') }}"  alt="验证码" title="刷新图片" width="100" height="40" id="c2c98f0de5a04167a9e427d883690ff6" border="0"></a>
				<!-- 验证码 -->
				<script>  
		  		function re_captcha() {
		    	$url = "{{ URL('/captcha') }}";
		        $url = $url + "/" + Math.random();
		        document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
		  		}
				</script>
					</div>
				<!-- 表单提交 -->
					{{csrf_field()}}
					<input id="sub" class="input" type="submit" value="确认提交">
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
		//所有的input元素获取所有的绑定事件
		$('input').focus(function(){
			//获取所有的文本内容
			var html = $(this).attr('remind');
			$(this).removeClass().addClass('active');
			$(this).next().show().removeClass().addClass('remind').html(html);
		})

		//绑定丧失焦点事件
		$('input[name=email]').blur(function(){
			//获取文本内容
			var v = $(this).val();
			var t = $(this);
			//进行正则匹配
			var reg = /^\w+@\w+\.(com|cn|com\.cn|org|hk|jp|net)$/;
			var res = reg.test(v);
			//判断
			if(!res){
				$(this).removeClass().addClass('errorStatus');
				$(this).next().removeClass().addClass('error').html('填写格式不正确,请重新填写').show();
				CUSER = false
			}else{
				//ajax数据库检测 检测邮箱是否存在
				$.ajax({
					url: '/index/user/ajax-check-email',
					type: 'get',
					data: {email:v},
					success:function(data){
						if(data == 1){
							t.removeClass().addClass('errorStartus');
							t.next().removeClass().addClass('error').html('邮箱不存在 请确认后填写').show();
							CUSER = false;
						}else{
							t.removeClass()
							t.next().removeClass().addClass('remind').html('已检测到邮箱 √');
							CUSER = true;
						}
					},
					async: false
				})
			}
		})

		//绑定验证码事件
		$('input[name=captcha]').blur(function(){
			//获取文本内容
			var v = $(this).val();
			var t = $(this);
			//正则匹配
			var reg = /^\S{3,5}$/;
			var res = reg.test(v);
			//检测
			if(!res){
				t.removeClass().addClass('errorStatus');
				t.next().removeClass().addClass('error').html('验证码输入错误');
				CPASS = false;
			}else{
			//发送ajax验证
			$.ajax({
				url: '/yz',
				type: 'get',
				data: {captcha:v},
				success:function(data){
					if(data != 1){
						t.removeClass().addClass('errorStatus');
						t.next().removeClass().addClass('error').html('验证码输入错误');
						CPASS = false;
					}else{
						t.removeClass();
						t.next().removeClass().addClass('remind').html('验证码输入正确 √');
						CPASS = true;
					}
				},
				async: false
			});
		}
	})


		//绑定提交事件
		$('form').submit(function(){

			if(CUSER && CPASS){
				return true
			}else{
				return false;
			}
		})
	</script>
	
</body>
</html