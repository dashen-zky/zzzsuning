@extends('layout.admin')

@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-zoom-in"></i>添加网站配置信息</span>
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
        <form action="/admin/config/insert" method="post" class="mws-form" enctype="multipart/form-data">
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">网站名称 :</label>
                    <div class="mws-form-item" style="width:300px">
                        <input type="text" class="small" value="{{old('webname')}}" name="webname">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">网站logo :</label>
                    <div class="mws-form-item" style="width:300px">
                        <img src="" width="100" alt="">
                        <input type="file" class="small" name="logo">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">关键字 :</label>
                    <div class="mws-form-item" style="width:300px">
                        <input type="text" class="small" value="{{old('')}}" name="keywords">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">邮箱 :</label>
                    <div class="mws-form-item" style="width:300px">
                        <input type="text" class="small" name="email">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">联系电话 :</label>
                    <div class="mws-form-item" style="width:300px">
                        <input type="text" class="small" name="phone">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">网站描述 :</label>
                    <div class="mws-form-item" style="width:500px">
                        <input type="text" class="small" value="{{old('')}}" name="description">
                    </div>
                </div>
                <script type="text/javascript" charset="utf-8" src="/admins/ueditor/ueditor.config.js"></script>

                <script type="text/javascript" charset="utf-8" src="/admins/ueditor/ueditor.all.min.js"> </script>

                <script type="text/javascript" charset="utf-8" src="/admins/ueditor/lang/zh-cn/zh-cn.js"></script>

                <div class="mws-form-row">
                    <label class="mws-form-label">网站版权 :</label>
                    <div class="mws-form-item">
                        <script name="content" id="editor" type="text/plain" style="width:600px;height:200px;"></script>
                    </div>
                </div>
                <script type="text/javascript">
                    var ue = UE.getEditor('editor',{toolbars: [
                            ['fullscreen','source','undo','redo', 'bold','simpleupload']
                        ]});
 
                </script>
                <div class="mws-form-row">
                    <label class="mws-form-label">网站是否关闭 :</label>
                    <div class="mws-form-item clearfix">
                        <ul class="mws-form-list inline">
                            <li><input type="radio" name="status" value="1" checked="checked"> <label>开启</label></li>
                            <li><input type="radio" name="status" value="0"> <label>关闭</label></li>
                        </ul>
                    </div>
                </div>
            </div>    
            <div class="mws-button-row">
                {{csrf_field()}}
                <input type="submit" class="btn btn-danger" value="提交">
                <input type="reset" class="btn " value="重置">
            </div>
        </form>
    </div>      
</div>
@endsection
