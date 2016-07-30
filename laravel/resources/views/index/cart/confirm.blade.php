@extends('layout.index')
<link rel="stylesheet" href="/confirms/css/bootstrap.css" type="text/css" />
<style type="text/css">
  #content .addr {
	  display: inline-block;
	  vertical-align: top;
	  position: relative;
	  width: 237px;
	  height: 106px;
	  margin: 0 14px 14px 0;
	  color: #666;
	  cursor: pointer;
	}
  #content .addr-cur .inner {
  	height:106px;
  	background-image: url(//img.alicdn.com/tps/i1/T1fuaCXxFdXXbjLKQ7-237-106.png);
	}

</style>

@section("jd_nav")
<div id="jd_nav"></div>
@endsection

@section('content')
<section id="content" style="margin-left:110px">
	<h2 style="font-size:17px;color:red;">请选择收货地址:</h2><br>
	<div id="addresses">
		@foreach($address as $k=>$v)
		<div class="addr addr-cur addr-def address-option-binded" tabindex="1">
			<div class="inner" addrid="{{$v->id}}"><br>
			  <center>
			    <div class="addr-hd" title="">
			      <span class="prov">{{getName($v->sheng)}}</span>
			      <span class="city">{{getName($v->shi)}}</span>
			      <span>（</span>
			      <span class="name">{{$v->name}}</span>
			      <span>收）</span>
			    </div>
			    <div title="" class="addr-bd">
			      <span class="dist">{{getName($v->xian)}}</span>
			      <span class="town"></span>
			      <span class="j_4tip"></span>
			      <span class="street">{{$v->detail}}</span><br>
			      <span class="phone">{{$v->phone}}</span>
			      <span class="youbian">{{$v->youbian}}</span>
			      <span class="last">&nbsp;</span>
			    </div>
			    <div class="addr-toolbar delete">
			      <a title="删除地址"  href="/delete?id={{$v->id}}" class="addrdel modify btn"  addrid="{{$v->id}}"  data-mm="addr_edit" data-mark="2.21" data-id="6664409604" data-clk="buy-order/mod/addrMaker:showUpdate" style="color:red;">删除地址</a>
			    </div>
			    <div class="addr-toolbar true" style="display:none">
					<a href="javascript:;"><img src="/confirms/img/dui.png" alt="" width="20"></a>
			    </div>
			</div>
		</div>
			@endforeach
			<div class="clearfix"></div>
			 <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal" onclick="$('#ro').show()">点击添加新地址</button>
		</div>
	
	<!-- 添加收货地址 -->
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade in" style="display:none;">
	        <div class="modal-dialog">
	            <div class="modal-body">
	                <div class="modal-content">
	                    <div class="modal-header">
	                        <button aria-hidden="true" data-dismiss="modal" class="close" onclick="$('#myModal').hide()"type="button">×</button>
	                        <h4 id="myModalLabel" class="modal-title">添加收货地址</h4>
	                    </div>
	                    <div class="modal-body">
						<form id="addAddress" name="addAddress">
						  <div class="form-group">
						    <label for="exampleInputEmail1">收货人:</label>
						    <input type="text" name="name" required value="" class="form-control" id="exampleInputEmail1" placeholder="请填写收货人">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">手机号:</label>
						    <input type="text" name="phone" required value="" class="form-control" id="exampleInputPassword1" placeholder="请填写手机号">
						  </div>
						  <div class="form-grop">
						  	<label for="exampleInputPassword1">省市县:</label>
						  	<div style="clear:both"></div>
						  	<select onchange="getCity(this)" value="" name="sheng" class="form-control col-md-3 province" style="width:33%">
						  	<option>请选择</option>
							 </select>
							<select id="City" name="shi" value="" class="form-control col-md-3" style="width:33%">
							</select>
							<select id="Xian" name="xian"  class="form-control col-md-3" style="width:33%">
							</select>
						  </div>
						  <div class="form-grop">
						  	 <label for="exampleInputPassword1">详细地址:</label>
						  	 <textarea name="detail" id="" value=""  required class="form-control" cols="80" rows="2"></textarea>
						  </div>
						   <div class="form-group">
						    <label for="exampleInputPassword1">邮编:</label>
						    <input type="text" name="youbian" required value="" class="form-control" id="exampleInputPassword1" placeholder="请填写邮政编码">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">设置为默认收货地址</label>
						    <input type="checkbox" name="isdefault" value"" id="exampleInputPassword1">
						  </div>
						</form>
	                    </div>
	                    <div class="modal-footer">
	                        <button data-dismiss="modal" class="btn btn-default" type="button" >关闭</button>
	                        <button class="btn btn-primary" type="button" id="addAddress2">点击添加地址</button>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>

	<h2 style="font-size:17px;color:red;margin-top:30px;">订单详细信息:</h2>
	<div class="car_wrap" style="float:left ">
	<div class="car_table">
		<div class="car_all">
			<div class="d1">
				<input type="checkbox"><span>全选</span>
			</div>
			<div class="d2">
				<span>商品</span>
			</div>
			<div class="d3">
				<span>数量</span>
			</div>
			<div class="d4">
				<span>小计</span>
			</div>
			<div class="d5">
				<span>操作</span>
			</div>
		</div>
	<!-- 提交购物车中的信息-->
		<form action="/index/cart/confirm" method="post">
			<div class="car_list">
				@foreach($goods as $k=>$v)		
				<dl class="car_item">
					<dd class="ck"> <input type="checkbox" name="" value="{{$v['id']}}"> </dd>
					<dt  class="img"> 
						<a href="#" class="ob_img">
							<img src="" alt="">
						</a>
					</dt>
					<dd class="title">
						<a href="#"></a>
					</dd>
					<dd class="size">
						@foreach($v as $kk=>$vv)@if(!($kk == "price" || $kk == "num" || $kk == "id"))
						<p class="text">{{$kk}}: {{$vv}}</p>
						@endif @endforeach
					</dd>
					<dd class="price">{{$v["price"]}}</dd>
					<dd class="number">
						<p class="add">
							<input type="text" name="" value="{{$v['num']}}" class="inp_num">
						</p>
						<p class="font">有货</p>
					</dd>
					<dd class="all" name="num">{{$v['num']}}</dd>
					<dd class="all" name="total">{{$v['num']*$v['price']}}</dd>
					<dd class="do">
						<a href="javascript:;" class="delete">删除</a><br>
					</dd>
				</dl>
				@endforeach
				<div class="car_end">
					<div class="all_fee">
						<p><span class="font"><b></b></p>
						<p><span class="font" style="color:red">总价（不含运费):{{$v['num']*$v['price']}}元</span><span id="total" class="price"></span></p>
					</div>
					<div class="car_count">
						已选择<em class="red" id="zl">{{$v['num']}}</em>件商品
					</div>
				</div>
			</div>
		</form>
	</div>
	</div>

	<h2 style="font-size:17px;color:red;margin-top:200px;margin-right:800px">支付方式:</h2>
		<form action="/Order/create" method="post">
			<ul class="list-unstyled list-inline">
				<li><input type="radio" name="paytype" value="支付宝">支付宝</li>
				<li><input type="radio" name="paytype" value="财付通">财付通</li>
				<li><input type="radio" name="paytype" value="hipay">hipay</li>
			</ul>
			<div class="clearfix"></div>
			<div class="col-md-1 pull-right">
				<!-- 订单地址隐藏域-->
				<input  type="hidden" name="address_id" value="">
				{{csrf_field()}}
				<button class="btn btn-primary">提交订单</button>	
			</div>
		</form>
	
	<!-- 隐藏收货地址板块 -->
	<div  style="display:none" id="addressBak" class="addr addr-cur addr-def address-option-binded" tabindex="1">
	  <div class="inner"><br>
	  <center>
	    <div class="addr-hd" title="北京 北京 (张开圆收)">
	      <span class="prov">北京</span>
	      <span class="city">北京</span>
	      <span>（</span>
	      <span class="name">张开圆</span>
	      <span>收）</span></div>
	    <div title="昌平回龙观 回龙观育荣教育园区兄弟连" class="addr-bd">
	      <span class="dist">昌平</span>
	      <span class="town">回龙观</span>
	      <span class="j_4tip"></span>
	      <span class="street">回龙观育荣教育园区兄弟连</span>
	      <span class="phone">15395100590</span>
	      <span class="last">&nbsp;</span></div>
	    <div class="addr-toolbar">
	      <a title="修改地址" onclick="('#xiugai').show()"  data-spm-click="gostr=/tmalljy;locaid=d005001003001" class="modify abtn" data-mm="addr_edit" data-mark="2.21" data-id="6664409604" data-clk="buy-order/mod/addrMaker:showUpdate" style="color:red;">修改</a></div>
	  </div>
	</div>

</section>
@endsection	

@section('myJs')
<script type="text/javascript" src="/confirms/js/jquery.js"></script>
<script type="text/javascript" src="/confirms/js/plugins.js"></script>
<script type="text/javascript" src="/confirms/js/functions.js"></script>

<meta name="csrf-token" content="{{csrf_token()}}">
<!-- 三级联动js -->
<script type="text/javascript">
	$(function(){
		function loadProv()
		{

			//页面加载完毕后要获取省份信息
			$.get('/getProvince',{},function(data){
				$.each(data,function(i,v){

					 $('<option value="'+v['areaid']+'">'+v['areaname']+'</option>').appendTo('.province');
				});
			},'json');
		}
		loadProv();
		//绑定省份的change事件
		$('.province').change(function(){
			//清空之前的城市
			$('#City').empty();
			$('#Xian').empty();
			//获取当前选中的省份的id
			var id = $(this).val();
			//发送ajax获取当前省份下的市区的信息
			$.get('/getCity',{province_id:id},function(data){
				$.each(data,function(i,v){
					$('<option value="'+v['areaid']+'">'+v['areaname']+'</option>').appendTo('#City');
				});
			},'json');
		})

		//绑定县级的change事件
		$('#City').change(function(){
			//清空之前的城市
			$('#Xian').empty();
			//获取当前选中的省份的id
			var id = $(this).val();
			//发送ajax获取当前省份下的市区的信息
			$.get('/getXian',{province_id:id},function(data){
				$.each(data,function(i,v){
					$('<option value="'+v['areaid']+'">'+v['areaname']+'</option>').appendTo('#Xian');
				});
			},'json');
		})
		//设置ajax请求
			$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
			});

		//绑定单机事件 提交表单内容创建添加收货地址
		$('#addAddress2').click(function(){
			//获取表单中的所有内容
			var form=$('#addAddress').serialize(); //获取url参数字符串
			$('#ro').hide();
			//发送ajax
			$.post('/insertAddress',form,function(data){
				//监测 插入成功
				if(data == '1'){
					window.location.reload();
				}
			});
		});

		//绑定地址删除事件
		$(".addrdel").click(function(){
			var id = $(this).attr("addrid");
			var res = confirm("您确定要删除此地址吗?");
			var addr = $(this).parents(".addr-def");
			if(res){
				// 发ajax
				$.get('/delete',{id:id},function(data){
					if(data == '1'){
						addr.remove();
						alert("已删除");
					}else{
						alert("删除失败");
					}
				})
			}
			return false;
			
		});

		//绑定元素事件
		$('.inner').click(function(){
			$(".delete").show();
			$(".true").hide();
			// $(this).siblings()->find(".true").hide();
				$(this).find('.delete').hide();
				$(this).find('.true').show();
			var addrid = $(this).attr('addrid');
			//修改隐藏域的值
			$('input[name=address_id]').val(addrid);
		});
	})

</script>
@endsection
