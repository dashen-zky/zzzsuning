@extends('layout.admin')

@section('content')
<div class="mws-panel grid_8">
<div class="mws-panel-header">
          <span>用户添加</span>
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
     <div class="mws-panel-body no-padding">
          <form class="mws-form" action="/admin/user/insert" method="post">
              
                    <div class="mws-form-row">
                         <label class="mws-form-label">用户名</label>
                         <div class="mws-form-item">
                              <input type="text" name="username" class="medium">
                         </div>
                    </div>

                      <div class="mws-form-row">
                         <label class="mws-form-label">密码</label>
                         <div class="mws-form-item">
                              <input type="password" name="password" class="medium">
                         </div>
                    </div>

                      <div class="mws-form-row">
                         <label class="mws-form-label">确认密码</label>
                         <div class="mws-form-item">
                              <input type="password" name="repassword" class="medium">
                         </div>
                    </div>

                      <div class="mws-form-row">
                         <label class="mws-form-label">邮箱地址</label>
                         <div class="mws-form-item">
                              <input type="text" name="email" class="medium">
                         </div>
                    </div>
               <div class="mws-button-row">
                    {{csrf_field()}}
                    <input type="submit" value="Submit" class="btn btn-danger">
                    <input type="reset" value="Reset" class="btn ">
               </div>
          </form>
     </div>         
 </div>
@endsection