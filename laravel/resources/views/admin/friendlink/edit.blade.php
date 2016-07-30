@extends('layout.admin')

@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-meter-medium"></i>友情链接修改</span>
    </div>
    <div class="mws-panel-body no-padding">
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
        <form action="/admin/friendlink/update" method="post" class="mws-form" enctype="multipart/form-data">
            <div class="mws-form-inline" style="width: 500px;">
                <div class="mws-form-row">
                    <label class="mws-form-label">友情链接名称：</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" value="{{$info->linkname}}" name="linkname">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">友情链接地址：</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" value="{{$info->url}}" name="url">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">友情链接描述：</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="content" value="{{$info->content}}">
                    </div>
                </div>
               
                
                <div class="mws-form-row">
                    <label class="mws-form-label">链接是否关闭 :</label>
                    <div class="mws-form-item clearfix">
                        <ul class="mws-form-list inline">
                            <li><input type="radio" name="status" value="1" checked="checked"> <label>开启</label></li>
                            <li><input type="radio" name="status" value="0"> <label>关闭</label></li>
                        </ul>
                    </div>
                </div>
            <div class="mws-button-row">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$info->id}}">
                <input type="submit" class="btn btn-danger" value="修改">
                <input type="reset" class="btn " value="重置">
            </div>
        </form>
    </div>      
</div>
@endsection