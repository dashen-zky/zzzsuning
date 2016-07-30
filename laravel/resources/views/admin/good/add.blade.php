@extends('layout.admin')
@section("title",$title)

@section('content')
	<div class="mws-panel grid_8">
        
        <div class="mws-panel-header">
            <span style="text-shadow: 1px 1px 1px rgba(0, 0, 0, 0)"><i class="icon-google-plus"></i> 商品添加</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="/admin/good/insert" method="post" enctype="multipart/form-data">
            @if (count($errors) > 0)
            <div class="mws-form-message error">
                错误信息
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                        <label class="mws-form-label">　商品名称 : </label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="name" value="{{old('name')}}">
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">　商品标题 : </label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="title" value="{{old('title')}}">
                        </div>
                    </div>

                    <div class="mws-form-row" >
                        <label class="mws-form-label" >　商品主图 : </label>
                        <div class="mws-form-item fileinput-holder" style="width:46%">
                            <input type="file" name="img" class="" value="{{old('img')}}">
                        </div>
                    </div>
                    
                    <div class="mws-form-row bordered">
                        <label class="mws-form-label">　商品所属类型 : </label>
                        <div class="mws-form-item">
                           <select class="small" name="type_id" >
                                <option>请选择</option>
                                @foreach($types as $k=>$v)
                                <option value="{{$v->id}}" @if(old("type_id") == $v->id) selected @endif>{{$v->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mws-form-row bordered">
                        <label class="mws-form-label">　商品所属分类 : </label>
                        <div class="mws-form-item">
                           <select class="small" name="cate_id" >
                                <option>请选择</option>
                                @foreach($cates as $k=>$v)
                                <option value="{{$v->id}}" @if(old("cate_id") == $v->id) selected @endif>{{$v->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    

                    <div class="mws-form-row bordered">
                        <label class="mws-form-label">　商品所属品牌 : </label>
                        <div class="mws-form-item">
                           <select class="small" name="brand_id" >
                                <option >请选择</option>
                              
                            </select>
                        </div>
                    </div>

                    <div class="mws-form-row bordered">
                        <label class="mws-form-label">　商品状态 : </label>
                        <div class="mws-form-item">
                   　　　　<input type="radio" name="status" value="0" checked> 不发布　　　　
                   　　　　<input type="radio" name="status" value="1"> 发布
                        </div>
                    </div>

                    <div class="mws-form-row bordered">
                        <label class="mws-form-label">　商品价格 : </label>
                        <div class="mws-form-item">
                            <input type="text" class="small" name="price" value="{{old('price')}}">
                        </div>
                    </div>
                    
                    <div class="mws-form-row">
                        <label class="mws-form-label">　文章内容 : </label>
                        <script type="text/javascript" charset="utf-8" src="/admins/Uediter/ueditor.config.js"></script>
                        <script type="text/javascript" charset="utf-8" src="/admins/Uediter/ueditor.all.min.js"> </script>
                        <script type="text/javascript" charset="utf-8" src="/admins/Uediter/lang/zh-cn/zh-cn.js"></script>
                        <div class="mws-form-item">
<<<<<<< HEAD
                            <script id="editor" type="text/plain" style="height:580px;" name="content">"{{old('content')}}"</script>
=======
                            <script id="editor" type="text/plain" style="height:580px;" name="content">{{old('content')}}</script>
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
                        </div>
                        <script type="text/javascript">
                            //实例化编辑器
                            var ue = UE.getEditor('editor');
                        </script>
                    </div>
                    
                </div>
                <div class="mws-button-row">
                    {{csrf_field()}}
                    <input type="submit" value="确认" class="btn btn-danger" style="text-shadow: 1px 1px 1px rgba(0, 0, 0, 0)">
                    <input type="reset" value="重置" class="btn ">
                </div>
            </form>
        </div>      
    </div>
@endsection


@section("myJs")
<script type="text/javascript" src="/admins/js/libs/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
$(function(){
    // var cate_id = 0;
    eval('var brands = {!! $brands !!}');
    // console.log(brands);
    $("select[name=cate_id]").change(function(){
        var str = '';
        for(var key in brands){
            $("select[name=brand_id]").children().remove();
            if(brands[key].cate_id == $(this).val()){
                str += '<option @if(old('+"brand_id"+')) selected @endif value="'+brands[key].id+'">'+brands[key].name+'</option>';
            }
        }
        if(str.length == 0){
            $("select[name=brand_id]").html('');
        }
       $(str).appendTo("select[name=brand_id]");
    });
    
    @if(old("cate_id"))  $("select[name=cate_id]").trigger("change") @endif

})

</script>
@endsection

