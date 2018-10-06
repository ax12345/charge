<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/static/admins/css/public.css"/>
    <link rel="stylesheet" type="text/css" href="/static/admins/css/style.css"/>
</head>
<body>
<!--头部-->
<header class="publicHeader">
    <h1>后台管理系统</h1>

    <div class="publicHeaderR">
        <p><span>下午好！</span><span style="color: #fff21b"> Admin</span> , 欢迎你！</p>
        <a href="login.html">退出</a>
    </div>
</header>
<!--时间-->
<section class="publicTime">
    <span id="time">{{date('Y-m-d H:i:s',time())}}</span>
    <a href="#">温馨提示：为了能正常浏览，请使用高版本浏览器！（IE10+）</a>
</section>
<!--主体内容-->
<section class="publicMian">
    <div class="left">
        <h2 class="leftH2"><span class="span1"></span>功能列表 <span></span></h2>
        <nav>
            <ul class="list">
                <li ><a href="billList.html">账单管理</a></li>
                <li><a href="providerList.html">供应商管理</a></li>
                <li><a href="/adminuser">用户管理</a></li>
                <li><a href="password.html">密码修改</a></li>
                <li><a href="login.html">退出系统</a></li>
            </ul>
        </nav>
    </div>
    @section('mail')
    @show
</section>
<footer class="footer">
</footer>
<script src="./static/admin/js/time.js"></script>
<div style="text-align:center;">
<p><a href="http://www.mycodes.net/" target="_blank"></a></p>
</div>
</body>
</html>