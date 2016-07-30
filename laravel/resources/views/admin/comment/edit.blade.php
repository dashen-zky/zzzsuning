@extends('layout.admin')

@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-wrench"></i>查看详情</span>
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
    	<form action="/admin/comment/{{$info->id}}" method="post" class="mws-form" enctype="multipart/form-data">
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">评价的用户 :</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" value="{{$info->user->username}}" name="username">
    				</div>
    			</div>

                <div class="mws-form-row">
                    <label class="mws-form-label">评价用户的头像 :</label>
                    <div class="mws-form-item" style="width:400px">
                       
                        <img iid="{{$info->id}}" class="img" src="{{$info->user->profile}}" width="100" alt="">
                        
                        <input type="file" class="small" name="img[]" multiple>
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">评价的商品 :</label>
                    <div class="mws-form-item" style="width:400px;">
                        <input type="text" class="small" value="{{$info->good->title}}" name="title">
                    </div>
                </div>

    			<div class="mws-form-row">
                    <label class="mws-form-label">状态 :</label>
                    <div class="mws-form-item clearfix">
                        <ul class="mws-form-list inline">
                            <li><input type="radio" name="status" value="{{$info['status']}}" checked="checked"> <label>启用</label></li>
                            <li><input type="radio" name="status" value="{{$info['status']}}"> <label>禁用</label></li>
                        </ul>
                    </div>
                </div>
                
                <script type="text/javascript" charset="utf-8" src="/admins/ueditor/ueditor.config.js"></script>
                <script type="text/javascript" charset="utf-8" src="/admins/ueditor/ueditor.all.min.js"> </script>
                <script type="text/javascript" charset="utf-8" src="/admins/ueditor/lang/zh-cn/zh-cn.js"></script>
                            

                <div class="mws-form-row">
                    <label class="mws-form-label">评价商品的内容 :</label>
                    <div class="mws-form-item">
                        <script name="content" id="editor" type="text/plain" style="width:800px;height:400px;">{!!$info['content']!!}</script>
                    </div>
                </div>
                <script type="text/javascript">
                    var ue = UE.getEditor('editor', {toolbars: [
                        ['fullscreen', 'source', 'undo', 'redo', 'bold','simpleupload']
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


@section('myJs')
    <script type="text/javascript">
        $('.img').click(function(){
            if(!confirm('确定要删除么???')) return ;
            var id = $(this).attr('iid');
            var img = $(this);
            //发送ajas
            $.get('/admin/images/delete', {'id':id}, function(data){
                if(data == 1){
                    img.remove();
                }
            })
        })

    </script>
@endsection