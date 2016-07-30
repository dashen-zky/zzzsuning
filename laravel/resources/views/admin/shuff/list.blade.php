
@extends("layout.admin")

@section('title',$title)

@section('content')
<div class="mws-panel grid_8">
  <div class="mws-panel-header">
    <span style="text-shadow: 1px 1px 1px rgba(0, 0, 0, 0)">
      <i class="icon-table"></i>轮播图列表</span>
  </div>
  <div class="mws-panel-body no-padding">
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
      <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info" >
        <thead>
          <tr role="row">
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 70px;">轮播图序号</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="min-width: 300px;">轮播图展示</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 150px;">操作</th></tr>
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all" >
          @foreach($shuffs as $k=>$v)
         	<tr class="@if($k%2 == 0) even @else odd @endif" style="text-align:center">
              <td class=" ">{{$v->id}}</td>
              <td class=" ">@foreach(json_decode($v->imgs) as $key=>$value) <img src="{{$value}}" alt="" style="display:block;float:left;width:80px;height:55px;margin:0px 5px;border:1px solid black"> @endforeach </td>
	            <td class=" ">
	            	<span class="btn-group" >
                      <a href="/admin/shuff/delete?id={{$v->id}}" class="btn btn-small" name="delete"><i class="icon-trash"></i>  删除</a>
	                </span>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

        <div style="padding-left:0px;margin-right:0px;" class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
          <div id="pages">
            {!! $shuffs->render() !!}      
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