@extends('layout.admin')

@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>修改网站配置信息</span>
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
        <form action="/admin/config/update" method="post" class="mws-form" enctype="multipart/form-data">
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">网站名称 :</label>
                    <div class="mws-form-item" style="width:300px">
                        <input type="text" class="small" value="{{$info->webname}}" name="webname">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">网站logo :</label>
                    <div class="mws-form-item" style="width:300px">
                        <img src="{{$info->logo}}" width="100" alt="">
                        <input type="file" class="small" name="logo">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">关键字 :</label>
                    <div class="mws-form-item" style="width:300px">
                        <input type="text" class="small" value="{{$info->keywords}}" name="keywords">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">邮箱 :</label>
                    <div class="mws-form-item" style="width:300px">
                        <input type="text" class="small" name="email" value="{{$info->email}}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">联系电话 :</label>
                    <div class="mws-form-item" style="width:300px">
                        <input type="text" class="small" name="phone" value="{{$info->phone}}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">网站描述 :</label>
                    <div class="mws-form-item" style="width:500px">
                        <input type="text" class="small" value="{{$info->description}}" name="description">
                    </div>
                </div>
                <script type="text/javascript" charset="utf-8" src="/admins/ueditor/ueditor.config.js"></script>

                <script type="text/javascript" charset="utf-8" src="/admins/ueditor/ueditor.all.min.js"> </script>

                <script type="text/javascript" charset="utf-8" src="/admins/ueditor/lang/zh-cn/zh-cn.js"></script>

                <div class="mws-form-row">
                    <label class="mws-form-label">网站版权 :</label>
                    <div class="mws-form-item">
                        <script name="content" value="{{$info->content}}" id="editor" type="text/plain" style="width:600px;height:200px;"></script>
                    </div>
                </div>
                <script type="text/javascript">
                    var ue = UE.getEditor('editor',{toolbars: [
                        ['fullscreen','source','undo','redo', 'bold','simpleupload']
                    ]});
 
                </script>
                
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
