@extends('layout.admin')

@section('title','管理员列表')

@section('content')
<div class="mws-panel grid_8 mws-collapsible">
  <div class="mws-panel-header">
    <span>
      <i class="icon-table"></i>管理员列表</span>
    <div class="mws-collapse-button mws-inset">
      <span></span>
    </div>
  </div>
  <div class="mws-panel-inner-wrap">
    <div class="mws-panel-body no-padding">
      <div role="grid" class="dataTables_wrapper" id="DataTables_Table_0_wrapper">
      <form action="/admin/user/index">
        <div id="DataTables_Table_0_length" class="dataTables_length">
          <label>Show
            <select name="DataTables_Table_0_length" size="1" aria-controls="DataTables_Table_0">
              <option value="10" selected="selected">10</option>
              <option value="25">25</option>
              <option value="50">50</option>
              <option value="100">100</option></select>entries</label>
        </div>
        <div class="dataTables_filter" id="DataTables_Table_1_filter">
        <label>关键字:
          <input type="text" value="{{$request->input('keywords')}}" name="keywords" aria-controls="DataTables_Table_1"><button class="btn btn-primary">搜索</button></label>
      	</div>
       </form>
        <table class="mws-table mws-datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
          <thead>
            <tr role="row">
              <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 110px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
              <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 120px;" aria-label="Browser: activate to sort column ascending">用户名</th>
              <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 173px;" aria-label="Platform(s): activate to sort column ascending">最后一次登录的时间</th>
              <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 116px;" aria-label="Engine version: activate to sort column ascending">状态</th>
              <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 150px;" aria-label="">操作</th>
            </tr>
          </thead>
          <tbody role="alert" aria-live="polite" aria-relevant="all">
          @foreach($info as $k=>$v)
            <tr class="@if($k%2==0) even @else odd @endif">
              <td class="sorting_1">{{$v->id}}</td>
              <td class=" ">{{$v->username}}</td>
              <td class=" ">{!!date('Y-m-d H:i:s',$v->lasttime)!!}</td>
              <td class=" ">@if($v->auth==0) 普通管理员 @else 超级管理员 @endif</td>
              <td class=" ">
                <span class="btn-group">
                  <a class="btn btn-small" href="#">
                    <i class="icon-search"></i>
                  </a>
                  <a class="btn btn-small" href="#">
                    <i class="icon-pencil"></i>
                  </a>
                  <a class="btn btn-small" href="#">
                    <i class="icon-trash"></i>
                  </a>
                </span>
              </td>
            </tr>
           @endforeach
          </tbody>
        </table>
       	
       	<style type="text/css">
			#pages{
				height:auto;
				overflow:hidden;
				margin-left:0px;
				padding-left:0px;
			}

			#pages li{
				float: left;
				height: 20px;
				padding: 0 10px;
				display: block;
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
				-webkit-box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
				-moz-box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
				box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
			}
			#pages a{
				color:white;
			}
			#pages ul{
				height:auto;
				padding-left:0px;
				margin-left:3px;
			}
			#pages .active {
				float: left;
				height: 20px;
				padding: 0 10px;
				display: block;
				font-size: 12px;
				line-height: 20px;
				text-align: center;
				cursor: pointer;
				outline: none;
				background-color: #88a9eb;
				color:black;
			}
			#pages .disabled{
				color: #666666;
				cursor: default;
			}
      </style>
      <div style="padding-left:0px;margin-right:0px;" class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
      <div id="pages">
			{!! $info->appends($request->all())->render() !!}			
		</div>
      </div>
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

     <!--<script type="text/javascript">
    // //动态修改分类的状态
    // $(function(){
    // $('.ibutton-container').click(function(){
    //   //获取状态
    //   var status = $(this).find('input')[0].checked ? 1 : 0;
    //   var id = $(this).find('input').attr('cid');
    //   //发送
    //   $.get('/admin/user/ajax-update', {status: status, id: id}, function(data){
    //     if(data == '1'){
    //       alert('更新成功');
    //     }else{
    //       alert('更新失败');
    //     }
    //   });
    // })
    // })
     </script>-->
@endsection