@extends("layout.index")

@section("title",$title)

@section("content")
<style type="text/css">
	.success-cart{
	    height: 145px;
	    width:90%;
	    margin:0 auto;
		margin-bottom: 20px;
	}

	.success-lcol {
   		float: left;
	}
	div,b{
		margin: 0;
    	padding: 0;
	}
	strong,b{
		font-weight: bold;
	}
	.success-cont {
    	font-family: "Microsoft YaHei";
	}

	body{
		font: 12px/150% Arial,Verdana,"\5b8b\4f53";
	}
	.success-top {
	    position: relative;
	    padding-left: 35px;
	    margin: 20px 0;
	}
	.success-top h3{
	    font-size: 18px;
    	line-height: 25px;
    	font-weight: 400;
	}

	.success-top .ftx-02 {
    	color: #71b247;
	}
	.success-top .succ-icon {
	    position: absolute;
	    top: 0;
	    left: 0;
	    display: block;
	    width: 25px;
	    height: 25px;
	    overflow: hidden;
	}
	.p-img {
	    float: left;
	    width: 60px;
	    margin-right: 10px;
	    border: 1px solid #e8e8e8;
	    overflow: hidden;
	}

	.p-info {
	    float: left;
	    width: 350px;
	    margin: 0;
	}

	.p-name {
	    width: 100%;
	    line-height: 28px;
	    overflow: hidden;
	    text-overflow: ellipsis;
	    white-space: nowrap;
	    font-size: 14px;
	}

	.p-extra {
	    display: inline-block;
	    display: block;
	    color: #aaa;
	}

	.clr{
		display: block;
	    overflow: hidden;
	    clear: both;
	    height: 0;
	    line-height: 0;
	    font-size: 0;
	}

</style>

<div style="width:100%;height:160px;position:relative;background: #f5f5f5;margin-bottom:30px">
	<div class="success-cart">
		<div class="success-lcol">
			<div class="success-top">
				<b class="succ-icon"></b><h3 class="ftx-02">商品已成功加入购物车！</h3>
			</div>
			<div class="p-item">
				<div class="p-img">
						<img src="{{$store->pic->first()->pic}}" clstag="" width="60">
				</div>
				<div class="p-info">
					<div class="p-name">
						<span class="success-cont">{{$store->good->name}}　@foreach(json_decode($store->detail) as $k=>$v)  {{$v}}　@endforeach </span>
					</div>
					<div class="p-extra">
						@foreach($data as $k=>$v) 
						<span class="txt" title="{{$k}}"> {{$k}} : {{$v}}　</span>
						@endforeach
						<span class="txt" title="数量"> / 数量 :{{$num['num']}}</span>
					</div>
				</div>
				<div class="clr"></div>
			</div>
		</div>
		<div class="success-btns">
			<div class="success-ad"><a href="#none"></a></div>
			<div class="clr"></div>
			<div><a class="btn-tobback" href="#" onclick="window.history.back();return false;" clstag="">返回</a><a class="btn-addtocart" href="/cart" id="GotoShoppingCart" clstag=""><b>去购物车结算</b></a>
			</div>
		</div>
	</div>		
</div>
<style type="text/css">
	.success-btns {
	    float: right;
	    width: 272px;
	    font-size: 0;
	    overflow: hidden;
	}
	.success-ad {
	    float: right; 	
	    height: 70px;
	    width: 106px;
	    margin: 10px 0;
	}

	.btn-addtocart,.btn-tobback {
	    display: inline-block;
	    height: 34px;
	    line-height: 36px;
	    font-size: 16px;
	    vertical-align: middle;
	}
	.btn-addtocart {
	    position: relative;
	    width: 136px;
	    padding-left: 30px;
	    background: #e4393c;
	    border: 1px solid #e4393c;
	    color: #fff;
	}
	.btn-tobback {
	    padding: 0 30px;
	    margin-right: 10px;
	    background: #fff;
	    color: #e4393c;
	    border: 1px solid #fff;
	}
	a {
	    /*color: #666;*/
	    text-decoration: none;
	}
	.btn-addtocart:hover{
		background:#a00;
		color:#fff;

	}
</style>
@endsection

@section("myJs")
<script type="text/javascript" src="/homes/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
	// alert(64564);
	$(function(){
		// alert(54);
		
	})
</script>
@endsection