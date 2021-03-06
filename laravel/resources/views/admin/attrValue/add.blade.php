@extends('layout.admin')
@section("title",$title)
@section('content')
	<div class="mws-panel grid_4">
        
        <div class="mws-panel-header">
            <span style="text-shadow: 1px 1px 1px rgba(0, 0, 0, 0)"><i class="icon-plus-sign"></i> 属性添加</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="/admin/attrValue/insert" method="post" enctype="multipart/form-data">
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
                    <div class="mws-form-row bordered">
                        <label class="mws-form-label">　属性值名称 : </label>
                        <div class="mws-form-item">
                            <input type="text" class="large" name="name">
                        </div>
                    </div>

                    <div class="mws-form-row bordered">
                        <label class="mws-form-label">　属性值所属属性 : </label>
                        <div class="mws-form-item">
                            <select name="attr_id" class="large" >
                            <option value="">请选择</option>
                            @foreach($attrs as $k=>$v)
                                <option value="{{$v->id}}">{{$v->type->name}}---{{$v->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mws-form-row bordered">
                        <label class="mws-form-label">　属性值状态 : </label>
                        <div class="mws-form-item">
                    　　　　<input class="ibutton" type="radio" name="status" value="1"> 是　　　
                   　　　　 <input class="ibutton" type="radio" name="status" value="0" checked="checked"> 否
                        </div>
                    </div>

                </div>
                <div class="mws-button-row">
                    {{csrf_field()}}
                    <input type="submit" value="添加" class="btn btn-danger" style="text-shadow: 1px 1px 1px rgba(0, 0, 0, 0)">
                    <input type="reset" value="重置" class="btn btn-primary">
                </div>
            </form>
        </div>      
    </div>
@endsection
