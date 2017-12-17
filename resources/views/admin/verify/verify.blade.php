@extends('admin.xtAdmin.common')
@section('title')
    <title>系统后台商户入驻审核页面</title>
@endsection
@section('body')
    <!--面包屑导航 开始-->
    <style type="text/css">
        /*表格固定布局*/
        table{table-layout: fixed;word-break: break-all; word-wrap: break-word; }
        .award-name{-o-text-overflow:ellipsis;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;width:100%; //超出部分显示省略号}
        .award-name:hover {
            text-overflow:inherit;
            overflow: visible;
            white-space: pre-line;
        }
        /*超出表格部分隐藏鼠标移动上去时显示*/
    </style>

    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">商品管理</a> &raquo; 添加商品
    </div>
    <!--面包屑导航 结束-->

    <!--结果页快捷搜索框 开始-->
    <div class="search_wrap"s>
        <form action="" method="post">
            <table class="search_tab">
                <tr>
                    <th width="120">选择分类:</th>
                    <td>
                        <select onchange="javascript:location.href=this.value;">
                            <option value="">全部</option>
                            <option value="http://www.baidu.com">百度</option>
                            <option value="http://www.sina.com">新浪</option>
                        </select>
                    </td>
                    <th width="70">关键字:</th>
                    <td><input type="text" name="keywords" placeholder="关键字"></td>
                    <td><input type="submit" name="sub" value="查询"></td>
                </tr>
            </table>
        </form>
    </div>
    <!--结果页快捷搜索框 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
        <div class="result_wrap">
            <!--快捷导航 开始-->

            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <div class="result_title">

                    <div class="alert alert-danger">
                        <ul>
                            @if(session('msg'))
                                <li style = "color:red" id = "info">{{session('msg')}}</li>
                            @endif
                        </ul>
                    </div>

                </div>
                <table class="list_tab">

                    <tr>
                        <th class="tc">商户名称</th>
                        <th class="tc">商户头像</th>
                        <th class="tc ">商家描述</th>
                        <th class="tc">商户名称</th>
                        <th class="tc">联系电话</th>
                        <th class="tc">申请时间</th>
                        <th class="tc">申请件编号</th>
                        <th class="tc">审核状态</th>
                        <th class="tc">电子邮箱</th>
                        <th class="tc">身份证号</th>
                        <th class="tc">公司地址</th>
                        <th class="tc">操作</th>

                    </tr>
                    @foreach($shops as $k=>$v)
                        <tr>
                            <td class="tc">{{$v->name}}</td>
                            <td><img class="tc"><img src="{{$v->avatar}}"  style="width:50px;"/></td>
                            <td class="tc award-name">{{$v->description}}</td>
                            <td class="tc">{{$v->cate->tname}}</td>
                            <td class="tc">{{$v->phone}}</td>
                            <td class="tc">{{$v->ctime}}</td>
                            <td class="tc">{{$v->number}}</td>
                            @if($v->vstatus==0)
                            <td class="tc">待审核</td>
                            @elseif($v->vstatus==1)
                            <td class="tc">审核中</td>
                            @elseif($v->vstatus==2)
                            <td class="tc">审核通过</td>
                            @elseif($v->vstatus==3)
                            <td class="tc">未通过审核</td>
                            @endif
                            <td class="tc">{{$v->email}}</td>
                            <td class="tc">{{$v->card}}</td>
                            <td class="tc">{{$v->address}}</td>
{{--                            <td class="tc">{{$v->sid}}</td>--}}

                            <td class="tc">
                                <a href="{{url('admin/xtAdmin/verify/result/'.$v->sid)}}" class="tc">审核处理</a>
                            </td>
                        </tr>
                    @endforeach

                </table>
                <div class="page_list">

                    {{--appends(['keyword1'=>'a','keyword2'=>'aaa@q163.com','num'=>2])--}}
                    {!! $shops->render() !!}
                </div>
                <style>
                    .page_list ul li span{
                        padding:6px 12px;
                    }
                </style>
            </div>
        </div>
    </form>
    <script>
        function changeOrder(obj,fltid){
            var flt_order = $(obj).val();
//        console.log(flt_order);
            $.post("{{url('admin/flinkt/changeOrder')}}",{'_token':"{{csrf_token()}}",'fltid':fltid,'flt_order':flt_order},function(data){
                console.log(data);//测试是否有值传过来
//            dd(data);语法不支持
                if(data['status']=='ok'){
                    layer.msg(data.msg,{icon:6});
//                location.href = location.href;
                    var t=setTimeout("location.href = location.href;",2000);
//
                }else{
                    layer.msg(data.msg,{icon:5});
//                location.href = location.href;
                    var t=setTimeout("location.href = location.href;",2000);
                }
            })
        }
        function delFlinkt(id){
            layer.confirm('您确认删除吗?',{
                btn:['确认','取消']//按钮
            },function(){
                //如果用户发出删除请求,使用ajax想服务器发送删除请求,$.post('请求服务器的路径','携带的参数',获取执行成功后的返回数据)
//        admin/flinkt/1
                $.post("{{url('admin/flinkt')}}/"+id,{"_method":'delete','_token':"{{csrf_token()}}"},function(data){
                    console.log(data);
//                data是json格式的字符串，在js中如何将一个json字符串变成json对象
//                //var res =  JSON.parse(data);
                    if(data.error==0){
                        layer.msg(data.msg,{icon:6});
//                    location.href  = location.href;
                        var t = setTimeout("location.href = location.href;",2000);
                    }else{
                        layer.msg(data.msg,{icon:5});
                        var t = setTimeout("location.href = location.href;",2000);
                    }
                })

            })
        }
        $('#info').fadeOut(2000);
    </script>
    <!--搜索结果页面 列表 结束-->
@endsection
