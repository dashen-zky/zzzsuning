<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>@yield("title")</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="/homes/css/css.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/admins/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/admins/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admins/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/themer.css" media="screen">
<style type="text/css">
    .w1210{
        position:absolute;
        left:100px;
    }

    .remind{
        /*float:left;*/
        width:100px;
        height:100px;
        position:relative;
        left:440px;
        top:0px;
        background:#F1F1F1;
        z-index:99999999;
    }
</style>
</head>
<body>
<!-- 头部 -->
<div class="jd_header">
	<div class="jd_top">
		<div class="w1210 clearfix">
			<span class='head_pos'>送至：北京<i class="arrow"></i></span>	
			<ul class="head_list clearfix">
				<li class="line"></li>
				<li class="item"><a href="#" target="_blank"><span>我的订单</span></a></li>
				<li class="line"></li>
				<li class="item"><a href="#" target="_blank"><span>我的京东</span><i class="arrow"></i></a></li>
				<li class="line"></li>
				<li class="item"><a href="#" target="_blank"><span>京东会员</span></a></li>
				<li class="line"></li>
				<li class="item"><a href="#" target="_blank"><span>企业采购</span></a></li>
				<li class="line"></li>
				<li class="item"><a href="#" target="_blank"><i class="phone"></i><span>手机京东</span><i class="arrow"></i></a></li>
				<li class="line"></li>
				<li class="item"><a href="#" target="_blank"><span>关注京东</span><i class="arrow"></i></a></li>
				<li class="line"></li>
				<li class="item"><a href="#" target="_blank"><span>客户服务</span><i class="arrow"></i></a></li>
				<li class="line"></li>
				<li class="item"><a href="#" target="_blank"><span>网站导航</span><i class="arrow"></i></a></li>
			</ul>
            @if(session('username'))
               <span id="isu" class="head_login_tips head_pos">{{session('username')}}&nbsp&nbsp&nbsp<span>您好</span><i class="arrow"></i></span> 
               <div  id="isc" class="remind" style="clear:both;display:none;"><br><a href="/person"><span>账号管理</span></a><br><br><a href="/login"><span>退出</span></a></div>
            @else
			   <span class="head_login_tips"><a href="/login">你好，请登录</a><a href="register" target="_blank">免费注册</a></span>
            @endif
		</div>
	</div>
	
</div>

@section("content")

@show

@section("myJs")

@show

<!-- 底部 -->
<div id="footer">
    <div class="slogon">
        <div class="w1210">
                <ul class="clearfix">
                    <li class="slogon1"></li>
                    <li class="slogon2"></li>
                    <li class="slogon3"></li>
                    <li class="slogon4"></li>
                </ul>
        </div>
    </div>
    <div class="w1210 mb20">
        <dl class="dl1">
            <dt>购物指南</dt>
            <dd>
                <a href="#" target="_blank" rel="nofollow">购物流程</a>
            </dd>
        </dl>
        <dl class="dl2">
            <dt>配送方式</dt>
            <dd>
                <a href="#" target="_blank" rel="nofollow">上门自提</a>
            </dd>
        </dl>
        <dl class="dl3">
            <dt>支付方式</dt>
            <dd>
                <a href="#" target="_blank" rel="nofollow">货到付款</a>
            </dd>
        </dl>
        <dl class="dl4">
            <dt>售后服务</dt>
            <dd>
                <a href="#" target="_blank" rel="nofollow">售后政策</a>
            </dd>
        </dl>
        <dl class="dl5">
            <dt>特色服务</dt>
            <dd>
                <a href="#" target="_blank" rel="nofollow">夺宝岛</a>
            </dd>
        </dl>
        <div class="foot_cover">
            <div class="dt">京东自营覆盖区县</div>
            <div class="dd">
                <p>京东已向全国2514个区县提供自营配送服务，支持货到付款、POS机刷卡和售后上门服务。</p>
                <p class="tar"><a href="#" target="_blank">查看详情&nbsp;&gt;</a></p>
            </div>
        </div>
    </div>
    <div class="w1210 bdt">
        <div class="links">
            <a href="#" target="_blank" rel="nofollow">关于我们</a>|
        </div>
        <div class="copyright">
             <a href="#" target="_blank"><img src="/homes/images/footer/guohui.png" alt="">京公网安备 11000002000088号 </a> |  京ICP证070359号  |  互联网药品信息服务资格证编号(京)-经营性-2014-0008  |  新出发京零 字第大120007号<br>
音像制品经营许可证苏宿批005号  |  出版物经营许可证编号新出发(苏)批字第N-012号  |  互联网出版许可证编号新出网证(京)字150号<br>
网络文化经营许可证京网文[2014]2148-348号  违法和不良信息举报电话：4006561155  Copyright © 2004-2016  京东JD.com 版权所有
        </div>
        <ul class="foot_msg">
            <li><a href="#" target="_blank" rel="nofollow"><img src="/homes/images/footer/f1.png" alt=""></a></li>
            <li><a href="#" target="_blank" rel="nofollow"><img src="/homes/images/footer/f2.png" alt=""></a></li>
            <li><a href="#" target="_blank" rel="nofollow"><img src="/homes/images/footer/f3.jpg" alt=""></a></li>
            <li><a href="#" target="_blank" rel="nofollow"><img src="/homes/images/footer/f4.png" alt=""></a></li>
            <li><a href="#" target="_blank" rel="nofollow"><img src="/homes/images/footer/f5.jpg" alt=""></a></li>
            <li><a href="#" target="_blank" rel="nofollow"><img src="/homes/images/footer/f6.jpg" alt=""></a></li>
        </ul>
    </div>
</div>
<!-- 绑定js-->
<script type="text/javascript" src="/homes/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
    //绑定事件
    $('#isu').mouseover(function(){
           // 添加一个新的class
        $(this).next().show();
    })
    //绑定事件
    $('#isu').click(function(){
        $(this).next().hide();
    })

</script>
</body>
</html>