@extends('layout.admin')

@section("title",$title)

@section('content')
	<div class="mws-panel grid_8">
        <div class="mws-form">
            <div class="mws-panel-header">
                <span style="text-shadow: 1px 1px 1px rgba(0, 0, 0, 0)"><i class="icon-google-plus"></i> 销售属性添加 </span>
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

                <form class="mws-form" action="/admin/store/insert" method="post" enctype="multipart/form-data">
                	<div>
                        <table class="mws-table" style="text-align:center">
                            <thead>
                                <tr>
                                    <th style="width:100px">商品名称</th>
                                     @foreach($good->type->attr as $k=>$v)
                                        <th style="width:50px">{{$v->name}}</th>
                                     @endforeach
                                    <th style="width:80px">价格</th>
                                    <th style="width:80px">库存数量</th>
                                    <th style="width:100px">商品展示图</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$good->name}} </td>
                                    @foreach($good->type->attr as $k=>$v)
                                    <td>
                                        <select name="{{$v->name}}">
                                            <option value>请选择</option>
                                            @foreach($v->attrvalue as $key=>$value)
                                            <option value="{{$value->name}}" @if(old($v->name) == $value->name) selected="selected" @endif> {{$value->name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    @endforeach
                                    <td><input type="text" name="price" style="width:70px" value="{{old('price')}}"/> 元</td>
                                    <td><input type="text" name="count" style="width:70px" value="{{old('count')}}"/> 件</td>
                                    <td><input type="file" name="img[]" value="上传图片" multiple /></td><!-- multiple -->
                                </tr>
                            </tbody>
                        </table>
                    </div>
                        				
                    <div class="mws-button-row">
                        {{csrf_field()}}
                        <input type="hidden" name="good_id" value="{{$good->id}}">
                        <input type="submit" value="确认" class="btn btn-danger" style="text-shadow: 1px 1px 1px rgba(0, 0, 0, 0)">
                        <input type="reset" value="重置" class="btn ">
                    </div>
                </form>
            </div>
        </div>          
    </div>

<div class="mws-panel grid_8">
  <div class="mws-panel-header">
    <span style="text-shadow: 1px 1px 1px rgba(0, 0, 0, 0)">
      <i class="icon-table"></i>库存列表</span>
  </div>
  <div class="mws-panel-body no-padding">
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
    <form action="/admin/store/update">
      <div id="DataTables_Table_1_length" class="dataTables_length">
        <label>显示 
          <select size="1" name="num" aria-controls="DataTables_Table_1">
            <option value="10" @if($request->input("num") == 10) selected="selected" @endif>10</option>
            <option value="20" @if($request->input("num") == 20) selected="selected" @endif>20</option>
            <option value="50" @if($request->input("num") == 50) selected="selected" @endif>50</option>
            <option value="100" @if($request->input("num") == 100) selected="selected" @endif>100</option>
            </select> 条</label>
      </div>
      <div class="dataTables_filter" id="DataTables_Table_1_filter">
        <label>分类搜索
          <input type="text" aria-controls="DataTables_Table_1" name="search" value="{{$request->input('search')}}"><button class="btn btn-primary">搜索</button> <button type="reset" class="btn btn-success">重置</button></label></div>
    </form>
      <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
        <thead>
          <tr role="row">
            <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 30px;">库存ID</th>
            <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 100px;">库存商品名称</th>
            <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 100px;">库存商品价格</th>
            <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">库存商品展示缩略图</th>
            <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">库存商品销售信息</th>
            <th class="" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 150px;">操作</th></tr>
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
          @foreach($stores as $k=>$v)
            <tr class="@if($k%2 == 0) even @else odd @endif" style="text-align:center">
                <td class=" sorting_1">{{$v->id}}</td>
                <td class=" ">{{$v->good->name}}</td>
                <td class=" ">¥ {{$v->price}}</td>
                <td class=" ">@foreach($v->pic as $key=>$value) <li style="float:left;list-style:none;margin:0px 5px" picid="{{$value->id}}"><img src="{{$value->pic}}" alt="" style="width:35px;height:35px"></li> @endforeach </td>
                <td class=" ">
                    @foreach(json_decode($v->detail) as $key=>$val)
                        {{$val}},
                    @endforeach
                </td>
                <td class=" ">
                    <span class="btn-group">
                      <a href="/admin/store/edit?id={{$v->id}}" class="btn btn-small"><i class="icon-pencil"></i> 编辑</a>
                      <a href="/admin/store/delete?id={{$v->id}}" class="btn btn-small" name="delete"><i class="icon-trash"></i>  删除</a>
                    </span>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

        <div style="padding-left:0px;margin-right:0px;" class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
          <div id="pages">
            {!! $stores->appends($request->all())->render() !!}      
          </div>
        </div>
        <style type="text/css">
            #pages{
                /*border-radius: 2px 0 0 2px;*/
                height: auto;
                overflow: hidden;
                margin-left:0px;
                padding:0px;
            }

            #pages ul{
                height:auto;
                padding-left:0px;
                margin-left:3px;
            }
            #pages li{
                float:left;
                height:20px;
                padding:0 10px;
                display:block;
                font-size: 12px;
                line-height: 20px;
                text-align: center;
                cursor: pointer;
                outline: none;
                background-color: #444444;
                color: #fff;
                text-decoration: none;
                border-right: 1px solid rgba(0, 0, 0, 0.5);
                border-left: 1px solid rgba(255, 255, 255, 0.15);
                box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
            }
            #pages a{
                color:white;
            }
            #pages .active{
                float: left;
                height: 20px;
                padding: 0 10px;
                display: block;
                font-size: 12px;
                line-height: 20px;
                text-align: center;
                cursor: pointer;
                outline: none;
                text-decoration: none;
                background-color: yellow;
                color: black;
            }
            #pages .disabled{
                color: #666666;
                cursor: default;
            }
        </style>
      
    </div>
  </div>
</div>

@endsection


@section('css')
<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/admins/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/custom-plugins/picklist/picklist.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/plugins/select2/select2.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/plugins/ibutton/jquery.ibutton.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/plugins/cleditor/jquery.cleditor.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/admins/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admins/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/themer.css" media="screen">
@endsection

@section('js')
<script src="/admins/js/libs/jquery-1.8.3.min.js"></script>
<script src="/admins/js/libs/jquery.mousewheel.min.js"></script>
<script src="/admins/js/libs/jquery.placeholder.min.js"></script>
<script src="/admins/custom-plugins/fileinput.js"></script>

<!-- jQuery-UI Dependent Scripts -->
<script src="/admins/jui/js/jquery-ui-1.9.2.min.js"></script>
<script src="/admins/jui/jquery-ui.custom.min.js"></script>
<script src="/admins/jui/js/jquery.ui.touch-punch.js"></script>

<script src="/admins/jui/js/globalize/globalize.js"></script>
<script src="/admins/jui/js/globalize/cultures/globalize.culture.en-US.js"></script>

<!-- Plugin Scripts -->
<script src="/admins/custom-plugins/picklist/picklist.min.js"></script>
<script src="/admins/plugins/autosize/jquery.autosize.min.js"></script>
<script src="/admins/plugins/select2/select2.min.js"></script>
<script src="/admins/plugins/colorpicker/colorpicker-min.js"></script>
<script src="/admins/plugins/validate/jquery.validate-min.js"></script>
<script src="/admins/plugins/ibutton/jquery.ibutton.min.js"></script>
<script src="/admins/plugins/cleditor/jquery.cleditor.min.js"></script>
<script src="/admins/plugins/cleditor/jquery.cleditor.table.min.js"></script>
<script src="/admins/plugins/cleditor/jquery.cleditor.xhtml.min.js"></script>
<script src="/admins/plugins/cleditor/jquery.cleditor.icon.min.js"></script>

<!-- Core Script -->
<script src="/admins/bootstrap/js/bootstrap.min.js"></script>
<script src="/admins/js/core/mws.js"></script>

<!-- Themer Script (Remove if not needed) -->
<script src="/admins/js/core/themer.js"></script>

<!-- Demo Scripts (remove if not needed) -->
<script src="/admins/js/demo/demo.formelements.js"></script>

<script type="text/javascript">
     //动态修改分类的状态
    $("a[name=delete]").click(function(){
      var sure = confirm("您确定要删除此项吗?");
      if(sure) return true;
      return false;
    });
</script>  
@endsection
