@extends('layouts.admin')
@section('title')
    <title>后台商户友情链接添加分类页面</title>
@endsection
@section('body')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">商品管理</a> &raquo; 添加商品
    </div>
    <!--面包屑导航 结束-->

    <!--结果集标题与导航组件 开始-->
    <div class="result_wrap">le">
            <h3>快捷操作</h3>
        </div>
        <div class="result_tit
        <div class="result_content">
            <div class="short_wrap">
                <a href="#"><i class="fa fa-plus"></i>新增文章</a>
                <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
                <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->

    <div class="result_wrap">
        <form action="{{url('admin/flinkt/'.$flinkt->fltid)}}" method="post">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @if(is_object($errors))
                            @foreach ($errors->all() as $error)
                                <li style="color:red">{{ $error }}</li>
                            @endforeach
                        @else
                            <li style="color:red;">{{$errors}}</li>
                        @endif

                    </ul>

                </div>
            @endif
            <div class="result_title">

                <div class="alert alert-danger">
                    <ul>
                        @if(session('msg'))
                            <li style="color:red">{{session('msg')}}</li>
                        @endif
                    </ul>
                </div>

            </div>
            <table class="add_tab">
                <tbody>
                <tr>
                    {{--token认证--}}
                    {{--方式一--}}
{{--                    {{csrf_field()}}--}}
                    {{--方式二隐藏域--}}
                    <input type = hidden name ='_token' value = "{{csrf_token()}}">
                    {{--提交方式put--}}
{{--                    {{method_field('put')}}--}}
                    <input type = "hidden" name = "_method" value = "put">
                    <th width="120"><i class="require">*</i></th>
                    <td>
                        <select name="flt_pid">
                            <option value="0" disabled
                            @if($flinkt->flt_pid==0)
                                selected
                                    @endif
                            >==请选择==</option>
                            @foreach($flinkts as $k=>$v)
                            <option value="$flinkt->flt_pid"
                                @if($v->fltid==$flinkt->flt_pid)
                                   selected
                                    @endif
                            disabled >
                                    {{$v->fltype_name}}
                            </option>
                                @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>分类名称：</th>
                    <td>
                        <input type="text" name="fltype_name" value ="{{$flinkt->fltype_name}}">
                        <span><i class="fa fa-exclamation-circle yellow"></i>分类名称必须填写</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="提交">
                        <input type="button" class="back" onclick="history.go(-1)" value="返回">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
@endsection