@extends('/Home/layouts.login')


@section('title')
    <title>后台商户注册页</title>
@endsection
@section('body')
    <!--面包屑导航 开始-->
    <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
    <script src="{{asset('js/leftTime.min.js')}}"></script>
    <style type="text/css">
        *{margin:0px;padding:0px;}
        #all{width:570px;height:400px;margin:30px auto}
        table{width:570px;height:400px;border-collapse:collapse;}
        .into{text-align:right;padding-right:20px;width:130px;}
        input{width:160px;height:30px;border:solid 1px #333;margin-left:10px;}
        .cur{border:solid 2px blue;}



        *,html,body{padding:0;margin:0;font-size:12px;outline: none;font-family:"微软雅黑",arial;}
        .wrap-box{width:1100px;min-width:1100px; margin:6% auto;}
        h1{line-height:2; font-size:30px; text-align: center; margin-bottom:40px;}
        table.data-table{width:100%;}
        /*table.data-table tr:odd{background:#dcebff;}*/
        table.data-table td{line-height:24px;padding:3px;vertical-align: top;}
        table.data-table th{height:50px;line-height:50px;padding: 3px;font-size:20px;text-align: left;}
        table.data-table .colspan-a{width:35%;}
        table.data-table .colspan-b{width:25%;}
        table.data-table .colspan-c{width:40%;}
        table.data-table td pre{display: block; padding:5px; border: 1px solid #00caff;background: #f8fcff;text-align: left;}
        .testBtn-a{display: inline-block;height:30px;line-height:30px;padding:0 10px; border:0; border-radius:5px;color:#fff;background:rgb(65,133,244);cursor: pointer;}
        .testBtn-a.on{background:#c9c9c9;color:#666;cursor: default;}
        .data-show-box{line-height:30px;}
        .date-tiem-span,.date-s-span{display: inline-block;font-size:18px; width:36px; height:30px;line-height:30px; text-align: center; color:#fff; border-radius:5px;}
        .date-tiem-span{ background:#333;}
        .date-s-span{ background:#f00;}
        .date-select-a{margin-right:5px;}

    </style>


    <div class="alert alert-danger">
        <ul>
            @if(session('msg'))
                <li style="color:red" id = "info">{{session('msg')}}</li>
            @endif
        </ul>
    </div>
    <div class="LoginHeader-22Up7_0">
        <a class="LoginHeader-33EiC_0"> 短信注册 </a>
        <a  href="{{asset('admin/meregistere')}}"> 邮箱注册 </a>
    </div>






        <form action="{{url('admin/domeregisterm')}}" method="post">
            {{csrf_field()}}

            <section class="form-b6px1">
                <input autocapitalize="on" placeholder="手机号" type="text" name="phone" value="{{old('bname')}}" />
                <span id="span" style="position:relative;left:320px;"></span>

                    <td class="colspan-a"><button type="button" onclick="sendcode()" class="testBtn-a"  id="dateBtn1">获取验证码</button></td>
                    <td class="colspan-b"></td>
                    <td class="colspan-c">
                        {{--<pre>$.leftTime(60,function(d){--}}
                        {{--//d.status,值true||false,倒计时是否结束;--}}
                        {{--//d.s,倒计时秒;--}}
                        {{--});</pre>--}}

                    </td>

                {{--<a href="javascript:;" onclick="sendcode(this)"   class="CountButton-3e-kd">发送验证码</a>--}}
            </section>


            <section class="form-b6px1">
                <input maxlength="8" name="mcode" placeholder="请输入短信验证码" type="text" />
            </section>

            <section class="form-b6px1">
                <input placeholder="密码" autocapitalize="on" type="password" name="bpassword"  />
            </section>
            <section class="form-b6px1" >
                <input maxlength="6" placeholder="验证码" type="text" name="code" />
                <img src="{{url('admin/yzm')}}" onclick="this.src='{{url("admin/yzm")}}?'+Math.random()" alt=""/>
            </section>

            <button class="SubmitButton-2wG4T"> 注册 </button>
        </form>

    <script>
        //验证手机号
        $('input[name=phone]').blur(function(){
            var phv = $(this).val();
            var reg = /^1[34578]\d{9}$/;

            if(!reg.test(phv)){
                $(this).next().text(' *手机号码格式不正确').css('color','red');
                $(this).css('border','solid 1px red');

            } else {
                $(this).next().text(' √').css('color','green');
                $(this).css('border','solid 1px green');
            }
        });
//            var countdown=60;
//            function settime(obj){
//                if (countdown == 0) {
//                    obj.removeAttribute("disabled");
//                    obj.value="免费获取验证码";
//                    countdown = 60;
//                    return;
//                } else {
//                    obj.setAttribute("disabled", true);
//                    obj.value="重新发送还需(" + countdown + ")秒";
//                    countdown--;
//                }
//                setTimeout(function() {
//                        settime(obj) }
//                    ,1000)
//
//
//            }
//        var InterValObj; //timer变量，控制时间
//        var count = 60; //间隔函数，1秒执行
//        var curCount;//当前剩余秒数

        function sendcode(){
//            curCount = count;
//            //设置button效果，开始计时
//            $("#btnSendCode").attr("disabled", "true");
//            $("#btnSendCode").val("请在" + curCount + "秒内输入验证码");
//            InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
            //向后台发送处理数据
            $phone = $('[name="phone"]').val();

//			2. 向服务器的发送短信的接口发送ajax请求
            $.post("{{url('home/sendcode')}}",{"phone":$phone,"_token":"{{csrf_token()}}"},function(data){
                    console.log(data);
//                var obj = JSON.parse(data);
                var obj = data;
                if(obj.failure == 0){
                    layer.msg(obj.message, {icon: 5,area: ['100px', '80px']});
                }else if(obj=='手机号码不能为空'){
                    obj.message='手机号码不能为空';
                    layer.msg(obj.message, {icon: 5,area: ['100px', '80px']});
                }else if(obj=='请等待60秒后重新获取'){
                    obj.message='请等待60秒后重新获取';
                    layer.msg(obj.message, {icon: 5,area: ['100px', '80px']});
                }
                else{
                    layer.msg(obj.message, {icon: 6,area: ['100px', '80px']});
                }
            });

        }
        //timer处理函数
//        function SetRemainTime() {
//            if (curCount == 0) {
//                window.clearInterval(InterValObj);//停止计时器
//                $("#btnSendCode").removeAttr("disabled");//启用按钮
//                $("#btnSendCode").val("重新发送验证码");
//            }
//            else {
//                curCount--;
//                $("#btnSendCode").val("请在" + curCount + "秒内输入验证码");
//            }
//        }





        $(function(){
            //60秒倒计时
            $("#dateBtn1").on("click",function(){
                var phone = $('[name="phone"]').val();
                console.log(phone);
                if(phone == ''){
                        return '手机号码不能为空';
                };
                var _this=$(this);
                if(!$(this).hasClass("on")){
//                    sendcode();//在此处调用时(行内不加onclick="sendcode()"事件),不触发sendcode()方法,但是不return信息;
                    $.leftTime(60,function(d){
//                       sendcode();//死循环
                        if(d.status){
                            _this.addClass("on");
//                            sendcode();//死循环
                            _this.html((d.s=="00"?"60":d.s)+"秒后重新获取");
                        }else{
                            _this.removeClass("on");
                            _this.html("获取验证码");
                        }
                    });
                }
            });

        });
        $('#info').fadeOut(2000);
    </script>

@endsection