@extends('admin.xtAdmin.common')
@section('title')
    <title>后台管理员申请页面</title>
@endsection
@section('body')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">设置管理员</a> &raquo; 管理员申请
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
                        <th class="tc">申请人名称</th>
                        <th class="tc">联系电话</th>
                        <th class="tc">申请时间</th>
                        <th >操作</th>
                    </tr>


                @foreach($asks as $k=>$v)
                    <tr>
                        <td class="tc">{{$v->id}}</td>
                        <td class="tc">{{$v->aname}}</td>

                        <td class="tc">{{$v->phone}}</td>
                        <td class="tc">{{date('Y-m-d H:i:s',$v->time)}}</td>

                        <td class="tc">
                            <a href="javascript:;" onclick="creUser({{$v}})">通过</a>
                            <a href="{{url('admin/xtAdmin/delasks')}}/{{$v->id}}">拒绝</a>
                        </td>
                    </tr>


                    @endforeach

                </table>




            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->

    <script>

        //添加管理员
        function creUser(user) {
            //询问框
            layer.confirm('您确认通过吗？', {
                btn: ['确认','取消'] //按钮
            }, function(){
//                如果用户发出删除请求，应该使用ajax向服务器发送删除请求
//                $.get("请求服务器的路径","携带的参数", 获取执行成功后的额返回数据);
                //admin/user/1
                var id = user['id'];
                $.post("{{url('admin/xtAdmin/adminUser')}}",{"_token":"{{csrf_token()}}","user":user},function(data){
//                    console.log(data);
//                    data是json格式的字符串，在js中如何将一个json字符串变成json对象
//                    var res =  JSON.parse(data);
                    if(data.status == 0){

                        layer.msg(data.msg, {icon: 6});
//                       location.href = location.href;

                    }else{
                        layer.msg(data.msg, {icon: 5});

                        var t=setTimeout("location.href = location.href;",1000);
                        //location.href = location.href;
                    }

                });

                $.post("{{url('admin/xtAdmin/delask')}}/"+id,{"_token":"{{csrf_token()}}"},function(data){
                    console.log(data);
//                    data是json格式的字符串，在js中如何将一个json字符串变成json对象
//                    var res =  JSON.parse(data);
                    var t=setTimeout("location.href = location.href;",1000);
                });


            }, function(){

            });
        }



        //    提示信息淡出
        $('.dh').fadeOut(3000);

    </script>
@endsection
