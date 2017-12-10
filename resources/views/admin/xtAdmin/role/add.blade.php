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
        <form action="{{url('/admin/xtAdmin/role')}}" method="post">
            <table class="add_tab">
                {{csrf_field()}}
                <tbody>

                <tr>
                    <th><i class="require">*</i>角色名称：</th>
                    <td>
                        <input type="text" name="name" value="{{old('name')}}">
                        <span><i class="fa fa-exclamation-circle yellow"></i>角色名称必须填写</span>
                    </td>
                </tr>

                <tr>
                    <th><i class="require">*</i>角色描述：</th>
                    <td>
                        <textarea name="description">{{old('description')}}</textarea>
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
    </div>
    <script>
        //    提示信息淡出
        $('.dh').fadeOut(3000);
    </script>
@endsection

