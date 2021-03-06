@extends('admin.xtAdmin.common')
@section('title')
    <title>后台权限浏览页面</title>
@endsection
@section('body')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">权限管理</a> &raquo; 查看权限
    </div>
    <!--面包屑导航 结束-->

	<!--结果页快捷搜索框 开始-->
	<div class="search_wrap">


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
                        <th class="tc" width="5%">ID</th>
                        <th class="tc">权限名称</th>
                        <th class="tc">权限描述</th>
                        <th class="tc">操作</th>
                    </tr>


                @foreach($permissions as $k=>$v)
                    <tr>
                        <td class="tc">{{$v->pid}}</td>
                        <td class="tc">{{$v->name}}</td>

                        <td class="tc">{{$v->description}}</td>

                        <td class="tc">
                            <a href="{{url('admin/xtAdmin/permission/'.$v->pid.'/edit')}}">修改</a>
                            <a href="javascript:;" onclick="delPerm({{$v->pid}})">删除</a>
                        </td>
                    </tr>


                    @endforeach

                </table>




            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->

    <script>

        function delPerm(id) {

            //询问框
            layer.confirm('您确认删除吗？', {
                btn: ['确认','取消'] //按钮
            }, function(){
//                如果用户发出删除请求，应该使用ajax向服务器发送删除请求
//                $.get("请求服务器的路径","携带的参数", 获取执行成功后的额返回数据);
                //admin/user/1
                $.post("{{url('admin/xtAdmin/permission')}}/"+id,{"_token":"{{csrf_token()}}","_method":"delete"},function(data){
//                    alert(data);
//                    data是json格式的字符串，在js中如何将一个json字符串变成json对象
                   //var res =  JSON.parse(data);
//                    删除成功
                   if(data.status == 0){
                       //console.log("错误号"+res.error);
                       //console.log("错误信息"+res.msg);
                       layer.msg(data.msg, {icon: 6});
//                       location.href = location.href;
                       var t=setTimeout("location.href = location.href;",1000);
                   }else{
                       layer.msg(data.msg, {icon: 5});

                       var t=setTimeout("location.href = location.href;",1000);
                       //location.href = location.href;
                   }


                });


            }, function(){

            });
        }
        //    提示信息淡出
        $('.dh').fadeOut(3000);

    </script>
@endsection
