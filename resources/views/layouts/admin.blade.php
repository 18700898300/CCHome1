<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    @yield('title')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="{{asset('/admin/assets')}}/style/css/ch-ui.admin.css">
    <link rel="stylesheet" href="{{asset('/admin/assets')}}/style/font/css/font-awesome.min.css">
        <script type="text/javascript" src="{{asset('admin/assets')}}/style/js/jquery.js"></script>
    <script type="text/javascript" src="{{asset('admin/assets/style/js/ch-ui.admin.js')}}"></script>
    <script type="text/javascript" src="{{asset('layer/layer.js')}}"></script>
    {{--<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.3&ak=pPGRydBmCrtAwDteGOey3EgsZFGKXqBj"></script>--}}

</head>
<body style="background:#F3F3F4;">
<div class="top_box">
    <div class="top_left">
        <div class="logo">后台管理模板</div>
        <ul>
            <li><a href="{{url('admin/merindex')}}" class="active">首页</a></li>
            <li><a href="#">管理页</a></li>
        </ul>
    </div>
    <div class="top_right">
        <ul>
            <li>管理员：admin</li>
            <li><a href="pass.html" target="main">修改密码</a></li>
            <li><a href="#">退出</a></li>
        </ul>
    </div>
</div>
<!--头部 结束-->

<!--左侧导航 开始-->
<div class="menu_box">
    <ul>
        <li>
            <h3><i class="fa fa-fw fa-clipboard"></i>常用操作</h3>
            <h3><i class="fa fa-fw fa-clipboard"></i>订单处理</h3>

            <ul class="sub_menu">
                <li><a href="{{url('admin/shadmin/neworder')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>新订单</a></li>
                <li><a href="{{url('admin/shadmin/yuneworder')}}" target="main"><i class="fa fa-fw fa-list-alt"></i>历史订单</a></li>
            </ul>

        </li>
        <li>
            <h3><i class="fa fa-fw fa-clipboard"></i>分类管理</h3>
            <ul class="sub_menu">
                <li><a href="{{url('admin/foodlabel/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加分类</a></li>
                <li><a href="{{url('admin/foodlabel')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>分类列表</a></li>

            </ul>
        </li>
        <li>
            <h3><i class="fa fa-fw fa-clipboard"></i>菜品管理</h3>
            <ul class="sub_menu">
                <li><a href="{{url('admin/food/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加菜品</a></li>
                <li><a href="{{url('admin/food')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>菜品列表</a></li>

            </ul>
        </li>


        <li>

            <h3><i class="fa fa-fw fa-clipboard"></i>友情链接管理</h3>

            <ul class="sub_menu">
                <li><a href="{{url('admin/flink/create')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>添加友情链接</a></li>
                <li><a href="{{url('admin/flink')}}" target="main"><i class="fa fa-fw fa-list-alt"></i>友情链接列表</a></li>
            </ul>
            <ul class="sub_menu">
                <li><a href="{{url('admin/flinkt/create')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>添加类别</a></li>
                <li><a href="{{url('admin/flinkt')}}" target="main"><i class="fa fa-fw fa-list-alt"></i>类别列表</a></li>



            </ul>
        </li>
        <li>
            <h3><i class="fa fa-fw fa-clipboard"></i>评论管理</h3>

            <ul class="sub_menu">
                <li><a href="{{url('admin/comment')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>浏览评论列表</a></li>
            </ul>
        </li>
        <li>
            <h3><i class="fa fa-fw fa-cog"></i>系统设置</h3>
            <ul class="sub_menu">
                <li><i class="fa fa-fw fa-cubes"></i>网站配置</li>
                <li><a href="{{url('admin/config/create')}}" target="main"><i class="fa fa-fw fa-cubes"></i>网站配置添加</a></li>
                <li><a href="{{url('admin/config')}}" target="main"><i class="fa fa-fw fa-cubes"></i>网站配置信息浏览</a></li>
                <li><a href="#" target="main"><i class="fa fa-fw fa-database"></i>备份还原</a></li>
            </ul>
        </li>
        <li>
            <h3><i class="fa fa-fw fa-thumb-tack"></i>工具导航</h3>
            <ul class="sub_menu">
                <li><a href="http://www.yeahzan.com/fa/facss.html" target="main"><i class="fa fa-fw fa-font"></i>图标调用</a></li>
                <li><a href="http://hemin.cn/jq/cheatsheet.html" target="main"><i class="fa fa-fw fa-chain"></i>Jquery手册</a></li>
                <li><a href="http://tool.c7sky.com/webcolor/" target="main"><i class="fa fa-fw fa-tachometer"></i>配色板</a></li>
                <li><a href="element.html" target="main"><i class="fa fa-fw fa-tags"></i>其他组件</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--左侧导航 结束-->

    <!--主体部分 开始-->
<div class="main_box" >

            @section('body')

            @show

</div>

<!--主体部分 结束-->

<!--底部 开始-->
<div class="bottom_box">
    CopyRight © 2015. Powered By <a href="http://www.itxdl.cn">http://www.itxdl.cn</a>.
</div>
<!--底部 结束-->

</body>
</html>