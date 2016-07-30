@extends("layout.index")

@section("title",$title)

@section("jd_nav")
	<div id="jd_nav">
        <div class="w1210 clearfix">
                <div id="nav_side" class="nav_span">
                    <div class="nav_all"><a href="#" target="_blank" class="all">全部商品分类</a><i class="arrow"><span>◇</span></i></div>
                </div>
                <div class="nav_main">
                    <ul class="clearfix">
                        <li class="item">
                            <a href="#" target="_blank">服装城</a>
                        </li>
                        
                    </ul>
                </div>
        </div>
</div>
@endsection

@section("content")
<div class="searc_main">
<<<<<<< HEAD
	
=======
	<div class="crumbs">
		<div class="crumbs_nav">
			<div class="crumbs_item">
				<a href="#">fdafsdf</a>
			</div>
			<i class="arrow">&gt;</i>
			<div class="crumbs_item">
				<div class="crumbs_hover">
					<a href="#">fjkoasdfjio</a>
				</div>
			</div>
			
		</div>
		<div class="pick_gift">
			<div class="gift_main">
				<i class="ico"></i>
				<a href="javascript:;">京东帮您选礼物</a>
			</div>
		</div>
	</div>
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
	<div class="list_select">
		<div id="selector">
			<div class="s_brand">
				<div class="sl_key">
					<b>品牌</b>
				</div>
				<div class="sl_value">
					<div class="sl_brand_logo">
						<ul class="sl_brand_list">
							@foreach($cate->brand as $k=>$v)
							<li><a href="/list?cate_id={{$cate->id}}&brand_id={{$v->id}}"><img src="{{$v->img}}" alt=""></a></li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			@foreach($good->type->spec as $k=>$v)
			<div class="s_item">
				<div class="sl_key">
					<span>{{$v->name}}</span>
				</div>
				<div class="sl_value">
					<div class="sl_item_list">
						<ul>
							@foreach($v->specvalue as $key=>$value)
							<li><a href="/list?cate_id={{$cate->id}}&specvalue_id={{$value->id}}">{{$value->name}}</a></li>
							@endforeach
						</ul>

					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<div class="list_wrap">
		<div class="list_left">
			<div class="list_aside">
				<h2>推广商品</h2>
				<ul>
					<li>
						<div class="tg_img"><a href="#" target="_blank"><img src="../images/list/tg1.jpg" alt=""></a></div>
						<p class="tg_price">¥2598.00</p>
						<p class="tg_name"><a href="#" target="_blank">vivo X6S 全网通 4GB+64GB 移动联通电信4G 手机   双卡双待 香槟金</a></p>
						<p class="tg_cmt">      已有<span>0</span>人评价  </p>
					</li>
				</ul>
			</div>
			
		</div>
		<div class="list_right">
			<div class="list_filter">
				<div class="filter_1">
					<div class="sort">
						<a href="javascript:;" class="active">综合排序</a>
						<a href="javascript:;">销量</a>
						<a href="javascript:;">价格</a>
						<a href="javascript:;">评论数</a>
						<a href="javascript:;">新品</a>
					</div>
					<div class="f_input">
						<input type="text" placeholder="在结果中搜索" class="inp_text">
						<a href="javascript:;" class="confirm">确定</a>
					</div>
					<div class="page">
						<span class="all">共<em>3394</em>件商品</span>
						<span class="text"><b>1</b>/57</span>
						<button class="f_prev disabled">&lt;</button>
						<button class="f_next">&gt;</button>
					</div>
				</div>
			</div>
			<div class="list_goods">
				<ul class="list_goods_list">
					@foreach($stores as $k=>$v)
					<li class="item">
						<div class="item_wrap">
							<div class="g_img">
								<a href="/detail.html?id={{$v->good->id}}" target="_blank">
									<img src="{{$v->good->img}}" alt="">
								</a>
							</div>
							<div class="g_slide">
								@foreach($v->pic as $key=>$value)
								<ol>
									<li style="width:30px;height:30px"><a href="javascript:;"><img  style="width:30px;height:30px" src="{{$value->pic}}" alt=""></a></li>
								</ol>
								@endforeach
							</div>
							<div class="g_price"><em>￥</em>{{$v->price}}</div>
							<div class="g_info">
								<a href="/detail.html?id={{$v->good->id}}" target="_blank">
								{{$v->good->name}}  @foreach(json_decode($v->detail) as $kk=>$vv) {{$vv}} ,   @endforeach 下单后需一小时之内支付，否则订单将自动取消
								</a>
							</div>
							<div class="g_msg">已有 1272 人评价</div>
							<div class="g_zy">
							</div>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
			<div class="page">
				<div class="page_info paginate" style="padding-left:0px;margin-right:0px;">
					<div id="pages">
						{!! $stores->appends($request->all())->render() !!} 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style type="text/css">
div{
	margin: 0;
    padding: 0;
}
.page .paginate{
	float: right;
	font:12px/150% Arial,Verdana,"\5b8b\4f53";
}
#pages{
    /*border-radius: 2px 0 0 2px;*/
    height: auto;
    overflow: hidden;
    margin-left:0px;
    padding:0px;
}

#pages ul{
    height:auto;
    padding-left:0px;
    margin-left:3px;
}
#pages li{
	color: #333;
    border: 1px solid #ddd;
    background-color: #f7f7f7;
    background-repeat: repeat-x;
	float: left;
    height: 36px;
    line-height: 36px;
    padding: 0 14px;
    margin-right: 5px;
    font-size: 14px;
    text-decoration: none;
    background-image: -webkit-linear-gradient(top,#f7f7f7,#f2f2f2);

}
#pages a{
    color:#333;
}
#pages .active{

	border: 0 none;
    padding: 1px 15px;
    background: 0 0;
    filter: none;
    color: #e4393c;
    cursor: default;
}
#pages .disabled{
    color: #666666;
    cursor: default;
}
</style>
@endsection
