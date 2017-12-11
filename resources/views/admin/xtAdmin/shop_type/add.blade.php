@extends('admin.xtAdmin.common')
@section('title')
    <title>后台商户分类添加页面</title>
@endsection
@section('body')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">分类管理</a> &raquo; 添加分类
    </div>
    <!--面包屑导航 结束-->

    <!--结果集标题与导航组件 开始-->
    <div class="result_wrap">
        <div class="result_title">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li  class="dh" style="color:red">{{ $error }}</li>
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
        <form action="{{url('/admin/xtAdmin/shop_type/insert')}}" method="post">
            <table class="add_tab">
                {{csrf_field()}}
                <tbody>
                <tr>
                    <th width="120"><i class="require">*</i>父级分类：</th>
                    <td>
                        <select name="pid">
                            <option value="0">==顶级分类==</option>
                            @foreach($cateOne as $k=>$v)
                                <option value="{{$v->tid}}">{{$v->tname}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>分类名称：</th>
                    <td>
                        <input type="text" name="tname" value="{{old('tname')}}">
                        <span><i class="fa fa-exclamation-circle yellow"></i>分类名称必须填写</span>
                    </td>
                </tr>


                <tr>
                    <th><i class="require">*</i>分类排序：</th>
                    <td>
                        <input type="text" name="torder" value="{{old('torder')}}">
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

