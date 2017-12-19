@extends('admin.xtAdmin.common')
@section('title')
    <title>后台角色管理添加页面</title>
@endsection
@section('body')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">角色管理</a> &raquo; 添加角色
    </div>
    <!--面包屑导航 结束-->

    <!--结果集标题与导航组件 开始-->
    <div class="result_wrap">
        <div class="result_title">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="dh" style="color:red">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="alert alert-danger">
                <ul>
                    @if(session('msg'))
                        <li class="dh" style="color:red">{{session('msg')}}</li>
                    @endif
                </ul>

            </div>

        </div>

    </div>
    <!--结果集标题与导航组件 结束-->

    <div class="result_wrap">
        <form action="{{url('admin/xtAdmin/password/update')}}" method="post">
            <table class="add_tab">
                {{csrf_field()}}
                <tbody>
                <input type="hidden" name="id" value="{{$id}}">
                <tr>
                    <th><i class="require">*</i>旧密码：</th>
                    <td>
                        <input type="password" placeholder="请输入旧密码" name="oldpassword">
                    </td>
                </tr>

                <tr>
                    <th><i class="require">*</i>新密码：</th>
                    <td>
                        <input type="password" placeholder="请输入新密码" name="password">
                    </td>
                </tr>

                <tr>
                    <th><i class="require">*</i>确认密码：</th>
                    <td>
                        <input type="password" placeholder="请确认新密码" name="re_password">
                    </td>
                </tr>

                <tr>
                    <th></th>
                    <td>
                        <input type="submit" value="修改">
                        <input type="button" class="back" onclick="history.go(-1)" value="返回">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
    <script>
        //    提示信息淡出
        $('.dh').fadeOut(3000);
    </script>
@endsection

