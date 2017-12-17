@extends('admin.xtAdmin.common')
@section('title')
    <title>后台用户添加页面</title>
@endsection
@section('body')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">个人用户模块</a> &raquo; 个人用户列表
    </div>
    <!--面包屑导航 结束-->

    <!--结果页快捷搜索框 开始-->
    <div class="search_wrap">
        <form action="{{url('admin/xtAdmin/person/lists')}}" method="get">
            <table class="search_tab">
                <tr>
                    <th style="width:100px;"></th>
                    <th>
                        每页条数：
                        <select name="num">
                            <option value="1"
                                    @if($request['num'] == 1)  selected  @endif
                            >1
                            </option>
                            <option value="2"
                                    @if($request['num'] == 2)  selected  @endif
                            >2
                            </option>
                        </select>
                    </th>
                    <th width="70">用户名:</th>
                    <td><input type="text" name="keywords1" value="{{$request->keywords1}}" placeholder="用户名"></td>
                    {{--<th width="70">邮箱:</th>--}}
                    {{--<td><input type="text" name="keywords2" value="{{$request->keywords2}}" placeholder="邮箱"></td>--}}
                    <td><input type="submit"  value="查询"></td>
                </tr>
            </table>
        </form>
    </div>

    </div>
    <!--结果页快捷搜索框 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
        <div class="result_wrap">
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <div class="alert alert-danger">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="dh" style="color:red">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <ul>
                            @if(session('msg'))
                                <li class="dh" style="color:red">{{session('msg')}}</li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>
                        <th class="tc" width="5%">ID编号</th>
                        <th class="tc" width="10%">用户名称</th>
                        <th class="tc" width="10%">手机号</th>
                        <th class="tc" width="10%">邮箱</th>
                        <th class="tc" width="10%">头像</th>
                        <th class="tc" width="10%">状态</th>
                        <th class="tc" width="10%">操作</th>
                    </tr>

                    @foreach($users as $k=>$v)
                    <tr>
                        <td>{{$v->uid}}</td>

                        <td>{{$v->uname}}</td>
                        <td>{{$v->phone}}</td>
                        <td>{{$v->email}}</td>
                        <td><img src="{{$v->avatar}}" style="width:50px;"></td>
                        <td>

                            <a href="javascript:;">禁用</a>

                            <a href="javascript:;">启用</a>

                        </td>
                        <td>
                            <a href="javascript:;">禁用</a>

                            <a href="javascript:;">启用</a>

                            <a onclick="userDel({{$v->uid}})" href="javascript:;">删除</a>
                        </td>

                    </tr>

                    @endforeach
                </table>
                {{--分页--}}
                {{--<div class="page_list">--}}
                <?php
                $v = empty($input) ? '' : $input;
                ?>
                {{--{!! $users->appends(['keywords'=>$v])->render() !!}--}}
                {{--</div>--}}



                <div class="page_list">

                    {{--appends(['keyword1'=>'a','keyword2'=>'aaa@q163.com','num'=>2])--}}
                    {!! $users->appends($request->all())->render() !!}
                </div>

                <style>
                    .page_list ul li span{
                        padding:6px 12px;
                    }
                </style>



            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->
<script>


    function userDel(id) {

        //询问框
        layer.confirm('您确认删除吗？', {
            btn: ['确认','取消'] //按钮
        }, function(){
//                如果用户发出删除请求，应该使用ajax向服务器发送删除请求
//                $.get("请求服务器的路径","携带的参数", 获取执行成功后的额返回数据);
            //admin/user/1
            $.post("{{url('admin/xtAdmin/person/del')}}/"+id,{"_token":"{{csrf_token()}}"},function(data){
//                alert(data);
//                    data是json格式的字符串，在js中如何将一个json字符串变成json对象
                //var res =  JSON.parse(data);
//                    删除成功
                console.log(data);
                if(data.error == 0){
                    //console.log("错误号"+res.error);
                    //console.log("错误信息"+res.msg);
                    layer.msg(data.msg, {icon: 6});
//                       location.href = location.href;
                    var t=setTimeout("location.href = location.href;",2000);
                }else{
                    layer.msg(data.msg, {icon: 5});

                    var t=setTimeout("location.href = location.href;",2000);
                    //location.href = location.href;
                }


            });


        }, function(){

        });
    }





</script>
@endsection
