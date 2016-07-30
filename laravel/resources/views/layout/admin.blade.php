<!DOCTYPE html>
<<<<<<< HEAD
=======
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

@section('css')
<!DOCTYPE html>
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="http://localhost/isuning/laravel/public/favicon.ico" type="image/x-icon">
<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

@section("myCss")

@show

@section("css")

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/admins/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/custom-plugins/wizard/wizard.css" media="screen">

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
@show
<<<<<<< HEAD
<link rel="stylesheet" type="text/css" href="/admins/css/my.css" >

=======

<link rel="stylesheet" href="/admins/css/my.css">

<link rel="stylesheet" type="text/css" href="/admins/css/my.css" >
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974

<title>@yield('title')</title>

</head>

<body>
<<<<<<< HEAD
=======

>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
	<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
                <img src="/admins/images/suning.png" alt="mws admin">
			</div>
            <div id="mws-logo-wrap">
                <img src="/admins/images/slogn.jpg" alt="mws admin">
            </div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
        	<!-- Notifications -->
        	<div id="mws-user-notif" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>
                
                <!-- Unread notification count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Notifications dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
<<<<<<< HEAD
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
=======
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
                
                <!-- Unred messages count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-messages">
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
<<<<<<< HEAD
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
=======
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<img src="/admins/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
<<<<<<< HEAD
                        Hello, John Doe
=======
                       尊敬的管理员:{{session('username')}}
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
                    </div>
                    <ul>
                    	<li><a href="#">Profile</a></li>
                        <li><a href="#">Change Password</a></li>
                        <li><a href="index.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span>1</span>
                <span>2</span>
                <span>3</span>
<<<<<<< HEAD
=======

>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
            </div>
            
        	<!-- Searchbox -->
        	<div id="mws-searchbox" class="mws-inset">
            	<form action="typography.html">
                	<input type="text" class="mws-search-input" placeholder="Search...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li>
<<<<<<< HEAD
                        <a href="#"><i class="icon-list"></i> 轮播图管理</a>
                        <ul class="closed">
                            <li><a href="/admin/shuff/add">轮播图添加</a></li>
                            <li><a href="/admin/shuff/index">轮播图列表</a></li>
                        </ul>
                    </li>

                        
=======
                        <a href="#"><i class="icon-users"></i> 用户管理</a>
                        <ul class="closed">
                            <li><a href="/admin/user/add">用户添加</a></li>
                            <li><a href="/admin/user/index">用户列表</a></li>
                            <li><a href="/admin/adminuser/add">管理员添加</a></li>
                            <li><a href="/admin/adminuser/index">管理员列表</a></li>
                        </ul>
                    </li>

>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
                    <li>
                        <a href="#"><i class="icon-list"></i> 商品分类</a>
                        <ul class="closed">
                            <li><a href="/admin/cate/add">分类添加</a></li>
                            <li><a href="/admin/cate/index">分类列表</a></li>
                        </ul>
                    </li>

                     <li>
                        <a href="#"><i class="icon-list"></i> 类型管理</a>
                        <ul>
                            <li><a href="/admin/type/add">类型添加</a></li>
                            <li><a href="/admin/type/index">类型列表</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#"><i class="icon-list"></i> 品牌管理</a>
                        <ul>
                            <li><a href="/admin/brand/add">品牌添加</a></li>
                            <li><a href="/admin/brand/index">品牌列表</a></li>
                        </ul>
                    </li>
                    
                     <li>
                        <a href="#"><i class="icon-list"></i> 销售属性管理</a>
                        <ul class="closed">
                            <li><a href="/admin/attr/add">属性添加</a></li>
                            <li><a href="/admin/attr/index">属性列表</a></li>
                            <li><a href="/admin/attrValue/add">属性值添加</a></li>
                            <li><a href="/admin/attrValue/index">属性值列表</a></li>
                        </ul>
                    </li>

                     <li>
                        <a href="#"><i class="icon-list"></i> 规格与参数管理</a>
                        <ul class="closed">
                            <li><a href="/admin/spec/add">规格添加</a></li>
                            <li><a href="/admin/spec/index">规格列表</a></li>
                            <li><a href="/admin/param/add">参数添加</a></li>
                            <li><a href="/admin/param/index">参数列表</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#"><i class="icon-list"></i> 商品管理</a>
                        <ul class="closed ">
                            <li><a href="/admin/good/add">商品添加</a></li>
                            <li><a href="/admin/good/index">商品列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-list"></i> 库存管理</a>
                        <ul class="closed ">
                            <li><a href="/admin/store/index">库存列表</a></li>
                        </ul>
                    </li>

<<<<<<< HEAD
                    <li>
                        <a href="#"><i class="icon-list"></i> 友情链接管理</a>
                        <ul class="closed">
                            <li><a href="/admin/friendLink/add">友情链接添加</a></li>
                            <li><a href="/admin/friendLink/index">友情链接列表</a></li>
                        </ul>
                    </li>

=======
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
                </ul>
            </div>         
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
<<<<<<< HEAD
        	<!-- Inner Container Start -->
            @if(session('error'))
                <div class="mws-form-message error">
                      {{session('error')}}
                </div>
            @endif

            @if(session('success'))
                <div class="mws-form-message error">
                      {{session('success')}}
                </div>
            @endif
            <div class="container">
                @section("content")
            

                @show       
            </div>
            <!-- Inner Container End -->
            <!-- Footer -->
            <div id="mws-footer">
            	Copyright Your Website 2012. All Rights Reserved.
=======
            @if(session('info'))
            <div class="mws-form-message success">
                {{session('info')}}
            </div>
            @endif

            @if(session('error'))
            <div class="mws-form-message error">
                {{session('error')}}
            </div>
            @endif
        	<!-- Inner Container Start -->
            <div class="container">
                @section('content')

                @show
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
            <div id="mws-footer">
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
            </div>
            
        </div>
        <!-- Main Container End -->
        
    </div>
    
    @section("js")
    <!-- JavaScript Plugins -->
    <script src="/admins/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/admins/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/admins/js/libs/jquery.placeholder.min.js"></script>
    <script src="/admins/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/admins/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/admins/jui/jquery-ui.custom.min.js"></script>
    <script src="/admins/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/admins/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/admins/plugins/flot/jquery.flot.min.js"></script>
    <script src="/admins/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/admins/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/admins/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/admins/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/admins/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/admins/plugins/validate/jquery.validate-min.js"></script>
    <script src="/admins/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/admins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/admins/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/admins/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/admins/js/demo/demo.dashboard.js"></script>
    <script src="/admins/js/demo/demo.table.js"></script>
    @show
<<<<<<< HEAD
    
    @section("myJs")
=======

    @section('myJs')
>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974

    @show
</body>
</html>
<<<<<<< HEAD
=======

</body>
</html>

>>>>>>> 287bacaa388d4d3b758648be03d22b78eba9b974
