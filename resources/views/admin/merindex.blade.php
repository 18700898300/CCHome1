@extends('layouts.admin')
@section('title')
    <title>商户后台首页</title>
@endsection
<style>
    .a{
        width:200px;
        height:100px;
        margin:35px;
        float: left;
    }
    #qc{
        clear:both;
    }

    .shuzi{
        font-size:60px;
        text-align:center;
        color:#0091EA;
        padding-top:10px;
    }
    #xdd{
        width:100%;
        height: 50px;
        text-align:center;
        font-size:20px;
    }
    #ids{
        margin:20px;
        border:1px solid #ccc;
        background-color: #fff;
        border-radius: 10px;
    }
    .b{
        width:230px;
        height:150px;
        margin-top:20px;
        margin-left: 90px;
        float: left;

    }
</style>
<!--左侧导航 开始-->
{{--<div class="menu_box">--}}
    {{--<ul>--}}
        {{--<li>--}}
                {{--<h3><i class="fa fa-fw fa-clipboard"></i>常用操作</h3>--}}
                {{--<h3><i class="fa fa-fw fa-clipboard"></i>友情链接管理</h3>--}}

                {{--<ul class="sub_menu">--}}
                    {{--<li><a href="{{url('admin/flink/create')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>添加友情链接</a></li>--}}
                    {{--<li><a href="{{url('admin/flink')}}" target="main"><i class="fa fa-fw fa-list-alt"></i>友情链接列表</a></li>--}}
                {{--</ul>--}}
                {{--<ul class="sub_menu">--}}
                    {{--<li><a href="{{url('admin/flinkt/create')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>添加类别</a></li>--}}
                    {{--<li><a href="{{url('admin/flinkt')}}" target="main"><i class="fa fa-fw fa-list-alt"></i>类别列表</a></li>--}}
                {{--</ul>--}}
        {{--</li>--}}
        {{--<li>--}}
                {{--<h3><i class="fa fa-fw fa-clipboard"></i>评论管理</h3>--}}

                {{--<ul class="sub_menu">--}}
                {{--<li><a href="{{url('admin/comment')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>浏览评论列表</a></li>--}}
                {{--</ul>--}}
        {{--</li>--}}




        {{--<li>--}}
            {{--<h3><i class="fa fa-fw fa-clipboard"></i>分类管理</h3>--}}
            {{--<ul class="sub_menu">--}}
                {{--<li><a href="{{url('admin/foodlabel/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加分类</a></li>--}}
                {{--<li><a href="{{url('admin/foodlabel')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>分类列表</a></li>--}}

            {{--</ul>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<h3><i class="fa fa-fw fa-clipboard"></i>菜品管理</h3>--}}
            {{--<ul class="sub_menu">--}}
                {{--<li><a href="{{url('admin/food/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加菜品</a></li>--}}
                {{--<li><a href="{{url('admin/food')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>菜品列表</a></li>--}}

            {{--</ul>--}}
        {{--</li>--}}

{{-->>>>>>> origin/wf--}}


@section('body')
    <div id="ids">
        <div class="result_wrap">
            <div class="result_title">
                <h3>今日订单</h3>
                <hr>
            </div>
            <div class="a">
                <div class="shuzi">{{$sta['ydd']}}</div>
                <div id = "xdd"><b>预订单</b></div>
            </div>
            <div class="a" >
                <div class="shuzi" style="color:#ccc">{{$sta['yjs']}}</div>
                <div id = "xdd"><b>新订单</b></div>
            </div><div class="a">
                <div class="shuzi" style="color:#FF9A05">{{$con}}</div>
                <div id = "xdd"><b>今日总订单</b></div>
            </div><div class="a">
                <div class="shuzi" style="color:#ccc">{{ $sta['qx']}}</div>
                <div id = "xdd"><b>超时无效订单</b></div>
            </div>
            <div id = "qc"></div>
        </div>
    </div>


    <div id="ids">
        <div class="result_wrap">
            <div class="result_title">
                <h3>本月总览</h3>
                <hr>
            </div>
            <div class="b">
                <div class="shuzi" style="color:#666666">{{$zongshu}}</div>
                <div id = "xdd"><b>本月总订单</b></div>
            </div>
            <div class="b">
                <div class="shuzi" style="color:#FF9A05">{{$youxiaoshuliang}}</div>
                <div id = "xdd"><b>本月成功订单</b></div>
            </div>
            <div class="b" >
                <div class="shuzi" style="color:0091EA">￥{{$cnt}}</div>
                <div id = "xdd"><b>本月总收入</b></div>
            </div>

            <div id = "qc"></div>
        </div>
{{--=======--}}
    {{--<div class="top_right">--}}
        {{--<ul>--}}
            {{--<li>管理员：{{$shop[0]->bname}}</li>--}}
            {{--<li>商铺：{{$shop[0]->shop[0]->name}}</li>--}}
            {{--<li></li>--}}
            {{--<li><a href="pass.html" target="main">修改密码</a></li>--}}
            {{--<li><a href="{{url('admin/logout')}}">退出</a></li>--}}
        {{--</ul>--}}
{{-->>>>>>> origin/qym--}}
    {{--</div>--}}

{{--<<<<<<< HEAD--}}


{{--<<<<<<< HEAD--}}
{{--=======--}}
        {{--<li>--}}
            {{--<h3><i class="fa fa-fw fa-cog"></i>系统设置</h3>--}}
            {{--<ul class="sub_menu">--}}
                {{--<li><i class="fa fa-fw fa-cubes"></i>网站配置</li>--}}
                {{--<li><a href="{{url('admin/config/create')}}" target="main"><i class="fa fa-fw fa-cubes"></i>网站配置添加</a></li>--}}
                {{--<li><a href="{{url('admin/config')}}" target="main"><i class="fa fa-fw fa-cubes"></i>网站配置信息浏览</a></li>--}}
                {{--<li><a href="#" target="main"><i class="fa fa-fw fa-database"></i>备份还原</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<h3><i class="fa fa-fw fa-thumb-tack"></i>工具导航</h3>--}}
            {{--<ul class="sub_menu">--}}
                {{--<li><a href="http://www.yeahzan.com/fa/facss.html" target="main"><i class="fa fa-fw fa-font"></i>图标调用</a></li>--}}
                {{--<li><a href="http://hemin.cn/jq/cheatsheet.html" target="main"><i class="fa fa-fw fa-chain"></i>Jquery手册</a></li>--}}
                {{--<li><a href="http://tool.c7sky.com/webcolor/" target="main"><i class="fa fa-fw fa-tachometer"></i>配色板</a></li>--}}
                {{--<li><a href="element.html" target="main"><i class="fa fa-fw fa-tags"></i>其他组件</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
    {{--</ul>--}}
{{--</div>--}}
{{--<!--左侧导航 结束-->--}}
{{-->>>>>>> origin/wf--}}


<!--左侧导航 开始-->
<div class="menu_box">
    <ul>
            <li>
                    <h3><i class="fa fa-fw fa-clipboard"></i>常用操作</h3>
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
<div class="main_box">
    <iframe src="{{url('admin/info')}}" frameborder="0" width="100%" height="100%" name="main"></iframe>
</div>
<!--主体部分 结束-->

<!--底部 开始-->
<div class="bottom_box">
    CopyRight © 2015. Powered By <a href="http://www.itxdl.cn">http://www.itxdl.cn</a>.
</div>
<!--底部 结束-->

@endsection