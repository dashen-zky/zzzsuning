@extends('layout.admin')
@section("title",$title)
@section('content')
	<div class="mws-panel grid_4">
        
        <div class="mws-panel-header">
            <span style="text-shadow: 1px 1px 1px rgba(0, 0, 0, 0)"><i class="icon-plus-sign"></i> 分类修改</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="/admin/cate/update" method="post">
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
                        <label class="mws-form-label">　分类名 : </label>
                        <div class="mws-form-item">
                            <input type="text" class="large" name="name" value="{{$type->name}}">
                        </div>
                    </div>
                  
                    <div class="mws-form-row bordered">
                        <label class="mws-form-label">父级类别 : </label>
                        <div class="mws-form-item">
                            <select class="large" name="pid">
                                <option value="0" @if($type->pid == 0 ) selected="selected" @endif>顶级分类</option>
                                @foreach($info as $k=>$v)
                                <option value="{{$v->id}}" @if($type->pid == $v->id) selected ="selected" @endif >{{$v->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                </div>
                <div class="mws-button-row">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$type->id}}">
                    <input type="submit" value="添加" class="btn btn-danger" style="text-shadow: 1px 1px 1px rgba(0, 0, 0, 0)">
                    <input type="reset" value="重置" class="btn ">
                </div>
            </form>
        </div>      
    </div>
@endsection

