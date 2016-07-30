@extends('layout.admin')

@section('content')
<div class="mws-panel grid_4">
<div class="mws-panel-header">
    <span>用户详情信息</span>
</div>
<div class="mws-panel-body no-padding">
<!-- 错误信息 -->
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
    
    <form action="/admin/user/update" method="post" enctype="multipart/form-data" class="mws-form">
        <div class="mws-form-inline">
            <div class="mws-form-row bordered">
                <label class="mws-form-label">用户名</label>
                <div class="mws-form-item">
                    <input type="text" name="" disabled value="{{$info['username']}}" class="large">
                </div>
            </div>
            <div class="mws-form-row bordered">
                <label class="mws-form-label">头像</label>
                <div class="mws-form-item">
                    <input type="file" name="profile"  class="large">
                    <img src="{{$info->detail['profile']}}" width="100">
                </div>
            </div>
            <div class="mws-form-row bordered">
                <label class="mws-form-label">昵称</label>
                <div class="mws-form-item">
                    <input type="text" name="pricname" value="{{$info->detail['pricname']}}" class="large">
                </div>
            </div>
            <div class="mws-form-row bordered">
                <label class="mws-form-label">性别</label>
                <div class="mws-form-item clearfix">
                    <ul class="mws-form-list inline">
                        <li><input type="radio" name="sex" value="{{$info->detail['sex']}}" @if(($info->detail->sex) == 0) checked="checked" @endif> <label>男</label></li>
                        <li><input type="radio" name="sex" value="{{$info->detail['sex']}}" @if(($info->detail->sex) == 1) checked="checked" @endif> <label>女</label></li>
                        <li><input type="radio" name="sex" value="{{$info->detail['sex']}}" @if(($info->detail->sex) == 2) checked="checked" @endif> <label>保密</label></li>
                    </ul>
                </div>
            </div>
            <div class="mws-form-row bordered">
                <label class="mws-form-label">手机号</label>
                <div class="mws-form-item">
                    <input type="text" name="phone" value="{{$info->detail['phone']}}" class="large">
                </div>
            </div>
            <div class="mws-form-row bordered">
                <label class="mws-form-label">邮箱</label>
                <div class="mws-form-item">
                    <input type="text" name="email" disabled value="{{$info['email']}}" class="large">
                </div>
            </div>
        </div> 
        <div class="mws-button-row">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$info['id']}}">
            <input type="submit" class="btn btn-danger" value="修改">
            <input type="reset" class="btn " value="重置">
        </div>
    </form>
</div>      
</div>
@endsection