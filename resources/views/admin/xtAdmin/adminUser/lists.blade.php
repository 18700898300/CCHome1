@extends('admin.xtAdmin.common')
@section('title')
    <title>后台角色浏览页面</title>
@endsection
@section('body')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">角色管理</a> &raquo; 查看角色
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
                        <th class="tc">管理员名称</th>
                        <th class="tc">权限</th>
                        <th >操作</th>
                    </tr>


                @foreach($adminUser as $k=>$v)
                    <tr>
                        <td class="tc">{{$v->id}}</td>
                        <td class="tc">{{$v->aname}}</td>

                        <td class="tc">@foreach($v->role as $m=>$n)
                                            {{$n->name}}<br>
                                           @endforeach
                        </td>

                        <td class="tc">
                            <a href="{{url('admin/xtAdmin/adminUser/auth')}}/{{$v->id}}">授权</a>
                            <a href="javascript:;" onclick="delUser({{$v->id}})">删除</a>
                        </td>
                    </tr>


                    @endforeach

                </table>




            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->

    <script>

        //排序
        function changeOrder(obj,tid){
            //获取当前需要排序的记录的ID,cate_id
            //获取当前记录的排序文本框中的值
            var torder = $(obj).val();
            $.post("{{url('admin/xtAdmin/shop_type/changeorder')}}",{'_token':"{{csrf_token()}}","tid":tid,"torder":torder},function(data){
                //如果排序成功，提示排序成功
                if(data.status == 0){

                    layer.msg(data.msg,{icon: 6});
                    var t=setTimeout("location.href = location.href;",2000);
                }else{
                    //如果排序失败，提示排序失败
                    layer.msg(data.msg,{icon: 5});
                    var t=setTimeout("location.href = location.href;",2000);
                }
            })

        }

//        删除
        function delUser(id) {

            //询问框
            layer.confirm('您确认删除吗？', {
                btn: ['确认','取消'] //按钮
            }, function(){
//                如果用户发出删除请求，应该使用ajax向服务器发送删除请求
//                $.get("请求服务器的路径","携带的参数", 获取执行成功后的额返回数据);
                //admin/user/1
                $.post("{{url('admin/xtAdmin/adminUser')}}/"+id,{"_token":"{{csrf_token()}}","_method":"delete"},function(data){
                    //alert(data);
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
