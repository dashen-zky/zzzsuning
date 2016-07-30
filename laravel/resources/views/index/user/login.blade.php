<!doctype html>
<html>
	<head>
		<title>欢迎登陆---苏宁商城</title>
		<meta charset="utf-8"/>
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<link href="/homes/css/log.css" type="text/css" rel="stylesheet" />
		<link href="/homes/css/log.css" type="text/css" rel="stylesheet"/>
		<style>
			.error{
				color:red;
			}
		</style>
	</head>
	<body style="background-color:white;">
		<div id="logo">
			<img src="/homes/images/log.png" />
		</div>
		<div id="denglu">
        
			<div>
			<!-- <img src="" /> -->
			<form action="/login" method="post">
				<div>
					<span>苏宁会员</span>
					<a href="/register">立即注册</a>
				</div>
				<div>
				 	@if(session('error'))
            		<div class="error">
            		{{session('error')}}
            	</div>
            		@endif
				</div>
				<div class="input">
					<span>用户名:</span>
					<input type="text" name="username" />
				</div>
				<br/>
				<div class="input">
					<span>密　码:</span>
					<input type="password" name="password" />
				</div>
				<br/>
				<div>
					{{csrf_field()}}
					<input style="width:242px;height:35px; margin-left:85px; margin-top:10px;background:#FFD237;" type="submit" value="登陆" />
				</div>
				<div>
					<p>使用合作网站账号登录苏宁：</p>
					<a href="" />苏宁钱包</a>
					<span>|</span>
					<a href="" />QQ</a>
					<span>|</span>
					<a href="" />微信</a>
					<span>|</span>
					<a href="/forget"><span style="color:red;">忘记密码?</span></a>
					<span>|</span>
				</div>
				<br/>
			</form>
            
			<div style="clear:both;"></div>
			</div>
			<div style="clear:both;"></div>
            
		</div>

		<div id="lianjie">
			<a href="#">关于我们</a>
			<span>|</span>
			<a href="#">联系我们</a>
			<span>|</span>
			<a href="#">人才招聘</a>
			<span>|</span>
			<a href="#">商家入驻</a>
			<span>|</span>
			<a href="#">广告服务</a>
			<span>|</span>
			<a href="#">手机京东</a>
			<span>|</span>
			<a href="#">友情链接</a>
			<span>|</span>
			<a href="#">销售联盟</a>
			<span>|</span>
			<a href="#">京东社区</a>
			<span>|</span>
			<a href="#">京东公益</a>
		</div>
		<div id="bottom">
			Copyright&copy;2004-2015  苏宁SN.com 版权所有
		</div>
		<br/>
		<br/>
	</body>
</html>