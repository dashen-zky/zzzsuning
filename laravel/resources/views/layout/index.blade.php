<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>@yield("title")</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="stylesheet" href="/homes/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/homes/bootstrap/css/bootstrap-theme.min.css">
<link href="/homes/css/css.css" rel="stylesheet">
@section("myCss")
<link href="/homes/css/myCss.css" rel="stylesheet">
@show

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
			<span class="head_login_tips">你好，请登录<a href="#" target="_blank">免费注册</a></span>
		</div>
	</div>
	<div class="head_ad">
		<div class="head_ad_box">
			<a href="#" target="_blank"><img src="/homes/images/head_ad.png" alt=""></a>
		</div>
	</div>
</div>

<div class="head_search">
    <div class="h_logo" style="height:80px">
        <a href="http://isuning.com" target="_blank" class="jd_logo"></a>
        <span class="jd_slogon"></span>
    </div>
    <div class="search_box">
        <form action="#" method='get'>
        	<input type="text" name='kw'  class="jd_search">
        	<button class="jd_btn">搜索</button>
        </form>
    </div>
    <div class="index_car">
        <a href="#" target="_blank" class="index_car_link">
            <i class="car"></i>
            我的购物车
            <i class="arrow">&gt;</i>
            <i class="tips">0</i>
        </a>
    </div>
    <div style="position:relative;left:0px">
        <ul class="index_link_">
            <li><a href="#" target="_blank" class="active">9.9抢大牌</a></li>
            <li><a href="#" target="_blank">两件</a></li>
            <li><a href="#" target="_blank">9.9抢大牌</a></li>
            <li><a href="#" target="_blank">9.9抢大牌</a></li>
            <li><a href="#" target="_blank">9.9抢大牌</a></li>
        </ul>
    </div>
</div>

@section("jd_nav")

@show



@section("content")

@show

@section("footer")
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
@show

<!-- <script type="text/javascript" src="/homes/js/jquery-1.8.3.min.js"></script> -->
<script type="text/javascript" src="/homes/bootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="/homes/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/homes/bootstrap/js/holder.js"></script>
<script type="text/javascript" src="/homes/js/cate.js"></script>


@section("myJs")

@show

</body>
</html>