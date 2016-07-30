@extends("layout.admin")

@section('title','页面不存在')

@section('content')
<div class="container">
	<div id="mws-error-page">
        <h1>错误 页面不存在</h1>
        <h5>Oopss... this is embarassing, either you tried to access a non existing page, or our server has gone crazy.</h5>
        <p><a href="/admin">点击 这里</a> 回到后台主页</p>
    </div>
</div>
@endsection
