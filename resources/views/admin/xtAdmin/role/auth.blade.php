@extends('admin.xtAdmin.common')
@section('title')
    <title>后台管理员授权页面</title>
@endsection
@section('body')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">管理员管理</a> &raquo; 管理员授权
    </div>
    <!--面包屑导航 结束-->

    <!--结果页快捷搜索框 开始-->
    <div class="search_wrap">


    </div>
    <!--结果页快捷搜索框 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="{{url('admin/xtAdmin/role/doauth')}}" method="post">
        <table class="add_tab">
            <tbody>
            <tr>
                {{csrf_field()}}
                <th><i class="require">*</i>角色名称：</th>
                <td>
                    <input type="hidden" name="rid"  value="{{$role->rid}}">
                    <input type="text" class="lg" disabled name="name" value="{{$role->name}}">
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>权限：</th>
                <td>
                    @foreach($permissions as $k=>$v)
                        @if(in_array($v->pid,$arr))
                            <label for=""><input type="checkbox"  checked name="pid[]"  value="{{$v->pid}}">{{$v->name}}</label>
                        @else
                            <label for=""><input type="checkbox"   name="pid[]"  value="{{$v->pid}}">{{$v->name}}</label>
                        @endif

                    @endforeach
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" value="提交">
                    <input type="button" class="back" onclick="history.go(-1)" value="返回">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
    <!--搜索结果页面 列表 结束-->

    <script>
        //    提示信息淡出
        $('.dh').fadeOut('slow');
    </script>
@endsection