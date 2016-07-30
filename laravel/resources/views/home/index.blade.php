@extends("layout.index")

<<<<<<< HEAD
@section("title",$title)

@section("jd_nav")
<div id="jd_nav">
	<div class="w1210 clearfix">
        <div id="nav_side" class="nav_span">
            <div class="nav_all"><a href="#" target="_blank" class="all">全部商品分类</a><i class="arrow"><span>◇</span></i></div>
        		<div class="nav_detail">
        			<ul class="nav_title">
        				@foreach($cates as $k=>$v)
               			<li><h3><a href="javascript:;" target="_blank" style="line-height:31px">{{$v->name}}</a></h3><i class='arrow'>&gt;</i>
                			<div class="yincang"><!-- 隐藏板块-->
	                			<ul>
               						@foreach($v->subcate as $kk=>$vv)
									<div>
										<strong style="margin:10px 40px">{{$vv->name}}</strong>
										@if(!empty($vv->subcate))
											@foreach($vv->subcate as $kkk=>$vvv)
											<a href="/list?cate_id={{$vvv->id}}" style="margin-right:10px">{{$vvv->name}}</a>
											@endforeach
										@else
											@foreach($vv->brand as $kkk=>$vvv)
											<a href="/list?cate_id={{$vv->id}}&brand_id={{$vvv->id}}" style="margin-right:10px">{{$vvv->name}}</a>
											@endforeach
										@endif

									</div>
                					@endforeach
	                			</ul>
                			</div>
            			</li>
            			@endforeach
        			</ul>
        		</div>
        	</div>
		</div>
    </div>
</div>

<div id="banner">
    <div class="ban_box">
        <div class="ban_main ">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach(json_decode($shuff->imgs) as $k=>$v) 
                    <li class="@if($k == 0) active @endif" data-target="#carousel-example-generic" data-slide-to="{{$k}}"></li>
                     @endforeach
                </ol>
                <div class="carousel-inner" role="listbox">
                    @foreach(json_decode($shuff->imgs) as $k=>$v)
                    <div class="item @if($k == 0) active @endif">
                        <img data-holder-rendered="true" src="{{$v}}" data-src="slide" alt="Second slide [900x500]">
                    </div>
                    @endforeach
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div> 
        <div class="ban_extra">
            <dl>
                <dt>京东快报<a href="#" target="_blank">更多 &gt;</a></dt>
                <dd>
                    <ul>
                        <li><a href="#" target="_blank"><b>[特惠]</b>陪着爸妈趣出游 低至9.9</a></li>
                        <li><a href="#" target="_blank"><b>[公告]</b>日本花王集团签约京东全球购</a></li>
                        <li><a href="#" target="_blank"><b>[特惠]</b>JDread电子书阅读器1元众筹</a></li>
                        <li><a href="#" target="_blank"><b>[公告]</b>京东运费标准调整公告</a></li>
                        <li><a href="#" target="_blank"><b>[特惠]</b>美的冰箱超级优惠 超值好礼</a></li>
                    </ul>
                </dd>
            </dl>
            <div class="jd_sort">
                <ul>
                    <li class="item"><a href="javascript:;" target="_blank"><i class="icon1"></i><span>话费</span></a></li>
                    <li class="item"><a href="javascript:;" target="_blank"><i class="icon2"></i><span>机票</span></a></li>
                    <li class="item"><a href="javascript:;" target="_blank"><i class="icon3"></i><span>电影票</span></a></li>
                    <li class="item"><a href="javascript:;" target="_blank"><i class="icon4"></i><span>游戏</span></a></li>
                    <li class="item"><a href="javascript:;" target="_blank"><i class="icon5"></i><span>彩票</span></a></li>
                    <li class="item"><a href="javascript:;" target="_blank"><i class="icon6"></i><span>团购</span></a></li>
                    <li class="item"><a href="javascript:;" target="_blank"><i class="icon7"></i><span>酒店</span></a></li>
                    <li class="item"><a href="javascript:;" target="_blank"><i class="icon8"></i><span>火车票</span></a></li>
                    <li class="item"><a href="javascript:;" target="_blank"><i class="icon9"></i><span>众筹</span></a></li>
                    <li class="item"><a href="javascript:;" target="_blank"><i class="icon10"></i><span>理财</span></a></li>
                    <li class="item"><a href="javascript:;" target="_blank"><i class="icon11"></i><span>礼品卡</span></a></li>
                    <li class="item"><a href="javascript:;" target="_blank"><i class="icon12"></i><span>白条</span></a></li>
                </ul>
            </div>
            <div class="ban_ad">
                <a href="#" target="_blank"></a>
            </div>
        </div>
    </div>
</div>
<!-- 今日推荐 --> 
<div id="today_tj">
    <div id="todays">

    </div>
    <div class="today_slide">
        <ul class="slide_main" style="width:2000px;">
            <li class="item">
                <div class="item_data">
                    <a href="javascript:;" target="_blank"><img src="/homes/images/product/tj1.jpg" alt=""></a>
                </div>
                <div class="item_data">
                    <a href="javascript:;" target="_blank"><img src="/homes/images/product/tj2.jpg" alt=""></a>
                </div>
                <div class="item_data">
                    <a href="javascript:;" target="_blank"><img src="/homes/images/product/tj3.jpg" alt=""></a>
                </div>
                <div class="item_data">
                    <a href="javascript:;" target="_blank"><img src="/homes/images/product/tj4.jpg" alt=""></a>
                </div>
            </li>
        </ul>
    </div>
</div>
@endsection

@section("content")

<div id="jiance" num="1"></div>
@endsection

@section("myJs")
<script type="text/javascript">
    // alert($);
    $(function(){
        $(window).scroll(function(){
            var cH = parseInt($(window).height());
            var gT = parseInt($(window).scrollTop());
            var oT = $("#jiance").offset().top;
            var juli = cH + gT -oT;
            var num = $("#jiance").attr("num");
            // console.log(juli);
            console.log(num);
            // 判断
            if(juli > -100){
                // 发送ajax 
                $.ajax({
                    "url": "/pubu",
                    "data": {num:num},
                    "type":"get",
                    "success": function(data){
                        $(data).insertBefore($("#jiance"));
                        // console.log(data);
                         ++num;
                        $("#jiance").attr("num",num);
                    },
                    timeout:10000,
                    async:false
                });
            }
        });
    });

</script>

@endsection
=======
@section("title",$title)
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
