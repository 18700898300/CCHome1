@extends('admin.xtAdmin.common')
@section('title')
	<title>后台首页</title>
	@endsection
@section('body')
	<!--头部 开始-->
	<div class="top_box">
		<div class="top_left">
			<div class="logo">后台管理模板</div>
			<ul>
				<li><a href="{{url('admin/xtAdmin/index')}}" class="active">首页</a></li>
				<li><a href="#">管理页</a></li>
			</ul>
		</div>
		<div class="top_right">
			<ul>
				<li>管理员：{{session('user')->aname}}</li>
				<li><a href="pass.html" target="main">修改密码</a></li>
				<li><a href="{{url('admin/xtAdmin/logout')}}">退出</a></li>
			</ul>
		</div>
	</div>
	<!--头部 结束-->

	<!--左侧导航 开始-->
	<div class="menu_box">
		<ul>
            <li>
            	<h3><i class="fa fa-fw fa-clipboard"></i>管理员模块</h3>
                <ul class="sub_menu">
                    <li><a href="{{url('admin/xtAdmin/adminUser/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加管理员</a></li>
                    <li><a href="{{url('admin/xtAdmin/adminUser')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>管理员列表</a></li>

                </ul>
            </li>
			<li>
				<h3><i class="fa fa-fw fa-clipboard"></i>分类模块</h3>
				<ul class="sub_menu">
					<li><a href="{{url('admin/xtAdmin/shop_type/add')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加分类</a></li>
					<li><a href="{{url('admin/xtAdmin/shop_type/lists')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>分类列表</a></li>

				</ul>
			</li>
			<li>
				<h3><i class="fa fa-fw fa-clipboard"></i>角色模块</h3>
				<ul class="sub_menu">
					<li><a href="{{url('admin/xtAdmin/role/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加角色</a></li>
					<li><a href="{{url('admin/xtAdmin/role')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>角色列表</a></li>

				</ul>
			</li>
			<li>
				<h3><i class="fa fa-fw fa-clipboard"></i>权限模块</h3>
				<ul class="sub_menu">
					<li><a href="{{url('admin/xtAdmin/permission/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加权限</a></li>
					<li><a href="{{url('admin/xtAdmin/permission')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>权限列表</a></li>

				</ul>
			</li>
			<li>
				<h3><i class="fa fa-fw fa-clipboard"></i>商户入驻审核模块</h3>
				<ul class="sub_menu">
					<li><a href="{{url('admin/xtAdmin/verify')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>审核</a></li>
				</ul>
			</li>
            <li>
            	<h3><i class="fa fa-fw fa-cog"></i>系统设置</h3>
                <ul class="sub_menu">
                    <li><a href="#" target="main"><i class="fa fa-fw fa-cubes"></i>网站配置</a></li>
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
		<iframe src="{{url('admin/xtAdmin/info')}}" frameborder="0" width="100%" height="100%" name="main"></iframe>
	</div>
	<!--主体部分 结束-->

	<!--底部 开始-->
	<div class="bottom_box">
		CopyRight © 2015. Powered By <a href="http://www.itxdl.cn">http://www.itxdl.cn</a>.
	</div>
	<!--底部 结束-->
@endsection