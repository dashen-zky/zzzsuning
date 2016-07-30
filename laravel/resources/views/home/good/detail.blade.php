@extends("layout.index")

@section("title",$title)

@section("myCss")
<link rel="stylesheet" href="/homes/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/homes/css/myCss.css">
@endsection

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
<!-- 详情主体 -->
<div class="productor">
	<div class="pro_bread">
		<strong>
			<a href="#">手机</a>
		</strong>
		<span>
			&nbsp;&gt;&nbsp;
			<a href="#">{{$good->cate->name}}</a>
			&nbsp;&gt;&nbsp; 	
			<a href="#">@if($good->brand_id != 0) {{$good->brand->name}} @endif</a>
			&nbsp;&gt;&nbsp;
			<a href="#">{{$good->name}}</a>
		</span>
	</div>
	<!-- 产品介绍 -->
	<div class="goods_intro">
		<div class="pro_img">

			<div class="pro_img_mian" id="small">
				<img src="" id="smallImg" width="100%" alt="">
				<div id="move"></div>
			</div>

			<div id="big">
				<img src="" id="bigImg" alt="">		
			</div>

			<div class="pro_img_list">
				<ul>
				</ul>
			</div>

			<div class="pro_info">
				<a href="javascript:;" class="pro_num">
					商品编号：1312313
				</a>
				<a href="javascript:;" class="pro_focus">关注商品</a>
				<a href="javascript:;" class="pro_share">分享</a>
			</div>
		</div>
		<div class="pro_msg">
			<div class="name">
				<h2 class="title" title="{{$good->name}}">{{$good->name}}</h2>
				<p class="info">{{$good->title}}</p>
				<div class="compare">对比</div>
			</div>
			<div class="summary">
				<dl class="item">
					<dt>京&nbsp;&nbsp;东&nbsp;价：</dt>
					<dd>
						<strong class="price">¥ 0</strong>
						<span class="font">(降价通知)</span>
					</dd>
				</dl>
				<dl class="item">
					<dt>促销信息：</dt>
					<dd>
						<p class="redfont"><span class="red">加价购</span>满699.00另加25.00，或满1299.000满699.00另加25.00，或满1299.000满699.00另加25.00，或满1299.000满699.00另加25.00，或满1299.000 <a href="#" >详情&gt;&gt;</a></p>
					</dd>
				</dl>
				<div class="pro_cmt_num">
					<p class="comment">累计评价</p>
					<a href="javascript:;">688</a>
				</div>
			</div>
			
			<div class="chose">
				@foreach($good->type->attr as $k=>$v)
				<div class="chose_item">
					<div class="dt">{{$v->name}} :　 </div>
					@foreach($detail as $key=>$value) @if($v->id == $value)
					<li class="btn click" style="margin-right:7px;" name="{{$v->name}}" aid="{{$v->id}}"><a href="javascript:;"><span style="color:#000">{{$key}}</span></a></li>
					@endif @endforeach
				</div>
				@endforeach
				<form action="/index/cart" method="post">
					<div class="pro_addCar">
						<div class="pro_add_num" style="width:58px">
							<input type="text" id="num" value="1" name="num" min="1">
							<li id="add"><span><a href="javascript:;">+</a></span></li>
							<li id="sub"><span><a href="javascript:;">-</a></li>
						</div>　
						@foreach($good->type->attr as $k=>$v)
						<input type="hidden" name="{{$v->name}}">
						@endforeach
						{{csrf_field()}}
						<input type="hidden" name="id" value="">
						<input type="hidden" name="price" value="">
						<button id="addCar"></button>
					</div>
				</form>
				<div class="chose_item">
					<div class="dt">温馨提示：</div>
					<div class="dd">
						<p class="font">1.支持7天无理由退货 </p>
					</div>
				</div>
			</div>
		</div>
		<div class="pro_about">
			<div class="img"><img src="/homes/images/product/apple_img.png" alt=""></div>
			<div class="pro_dda">
				<p class="jdzybox"><a href="javascript:;" class="jdzy">京东自营</a></p>
				<p class="kfbox"><a href="javascript:;" class="lxkf"></a><a href="javascript:;" class="wjm"></a></p>
				<dl class="fwzc">
					<dt>服务支持</dt>
					<dd class="bg1">211限时达</dd>
					<dd class="bg2">自提</dd>
				</dl>
			</div>
		</div>
	</div>
	
	<!--  产品详细-->
	<div class="goods_main">
		<div class="goods_wrap clearfix">
			<div class="goods_left">
				<dl class="good_might">
					<dt>关于手机，你可能在找</dt>
					<dd>
						<a href="#">移动</a>
					</dd>
				</dl>
				<dl class="good_sort">
					<dt>相关分类</dt>
					<dd>
						<a href="#">手机</a>
						<a href="#">对讲机</a>
					</dd>
				</dl>
				<dl class="good_like">
					<dt>同类其他品牌</dt>
					<dd>
						<a href="#">APPle</a>
					</dd>
				</dl>
				<dl class="good_rank">
					<dt>手机排行榜</dt>
					<dd>
						<ol class="good_rank_tit">
							<li class="active">同价位</li>
							<li>同品牌</li>
							<li>同类别</li>
						</ol>
						<div class="good_rank_box">
							<ul class="rank_list">
								<li class="topnum">
									<a href="#" class="block">
										<i class="num">1</i>
										<img src="/homes/images/product/phone.jpg" alt="">
										<h3>Apple iPhone 6s</h3>
										<p class="price">￥120.00</p>
									</a>
								</li>
							</ul>
						</div>
					</dd>
				</dl>
			</div>
			<div class="goods_right">
				<div class="gds_tit">
					<ul class="gds_tabs">
						<li class="active"><a href="javascript:;">商品介绍</a></li>
						<li><a href="javascript:;">规格参数</a></li>
						<li><a href="javascript:;">包装清单</a></li>
						<li><a href="javascript:;">商品评价</a></li>
						<li><a href="javascript:;">售后保障</a></li>
					</ul>
				</div>
				<div class="gds_details">
					{!!$good->content!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section("myJs")
<script type="text/javascript" src="/homes/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
	$(function(){
		// 单击事件
		// $(".click").unbind("click");
		$(".click").click(function(){
			// 移除同排所有同辈btn-primary属性 给自己加上
			$(this).siblings().removeClass("btn-success");
			$(this).addClass("btn-success");

			// 获取当前的正在点击的元素的属性名
			var name = $(this).attr("name");
			var aid = $(this).attr("aid");
			// 设置给隐藏域
			$('input[name='+name+']').attr("aid",aid).val($(this).text());
			init();
		});


		// 绑定加入购物车事件
		$("#addCar").click(function(){
			@foreach($good->type->attr as $k=>$v)
			if($("input[name={{$v->name}}]").val().length == 0){
				return false;
			}
			@endforeach
			return true;
		});

		// 判断是否全部选中
		var init = function(){
			var data = '';
			@foreach($good->type->attr as $k=>$v)
			if($("input[name={{$v->name}}]").val().length == 0){
				return false;
			}
			@endforeach

			// 拼接要发送的字符串
			var id = {{$good->id}}
			var detail = '';
			@foreach($good->type->attr as $k=>$v)
				detail += '"'+$("input[name={{$v->name}}]").attr("aid")+'":"'+$("input[name={{$v->name}}]").val()+'",';
			@endforeach
			// 发送ajax
			$.get("/ajax-detail",{id:id,detail:detail},function(data){
<<<<<<< HEAD
				// console.log(data.price);
				eval("var data = "+data);
=======
				//console.log(data.price);
				eval("var data = "+data);
				console.log(data);
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
				// 更改价格
				$(".summary").find("strong").html('¥ '+data[0].price);
				$("input[name=price]").val(data[0].price);
				$("input[name=id]").val(data[0].id);
				// console.log(data[0].id);
				// 更改商品全名称
				var title = $(".name").find(".title").attr("title");
				eval("var detail ="+data[0].detail);
				// console.log(detail);
				var str = '';
				for(var i in detail){
					str += "　" + detail[i];
				}
				$(".name").find(".title").empty();
				$(".name").find(".title").html(title+str);

				// 获取库存数量
				var max = data[0].count;
				$("#num").attr("max",max);
				// 修改展示图
<<<<<<< HEAD
				$("#small").find("img").attr("src",data[1][0].pic).attr("width","50px");
				// $("#big").find("img").attr("src",data[1][0].pic);
=======
				$("#small").find("img").attr("src",data[1][0].pic);
				$("#big").find("img").attr("src",data[1][0].pic);
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
				
				// b遍历展示图
				var lis = '';
				var zhan = function(){
					// 拼接要插入的字符串
					for(var i in data[1]){
<<<<<<< HEAD
						lis += '<li class="active"><img src="'+data[1][i].pic+'"alt="" width="50"></li>'; 
=======
						lis += '<li class="active"><img src="'+data[1][i].pic+'"alt=""></li>'; 
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
					}

					$(".pro_img_list").find("ul").empty();
					$(lis).appendTo($(".pro_img_list").find("ul"));
				}

				zhan();

			});

			$("#num").blur(function(){
				var num = parseInt($("#num").val());
				var max = parseInt($("#num").attr("max"));
				if(num > max){
					num = max;
				}
				$("#num").val(num);
			})
		} 

		// 点击加减商品数量
		$("#add").click(function(){
			// 获取库存的最大值
			var max = $("#num").attr("max");
			// 获取要加的数值
			var num = parseInt($("#num").val());
			// console.log(num);
			if(num < max){
				num = num + 2;
			}else{
				num = max;
			}
			
			$("#num").val(num);

		})

		$("#sub").click(function(){
			// 获取要加的数值
			var num = parseInt($("#num").val());
			if(num > 1){
				num = num - 1;
			}else{
				num = 1;
			}
			$("#num").val(num);
		})
	
	});
	
</script>
<!-- <script type="text/javascript" src="/homes/js/myJs.js"></script> -->
@endsection