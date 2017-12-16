@extends('/Home/layouts.login')
<style type="text/css">
    *{margin:0px;padding:0px;}
    #all{width:570px;height:400px;margin:30px auto}
    table{width:570px;height:400px;border-collapse:collapse;}
    .into{text-align:right;padding-right:20px;width:130px;}
    input{width:160px;height:30px;border:solid 1px #333;margin-left:10px;}
    .cur{border:solid 2px blue;}
</style>

@section('body')
    <div class="LoginHeader-22Up7_0">
        <a class="LoginHeader-33EiC_0"> 短信登录 </a>
        <a class="" href="/home/login"> 密码登录 </a>
    </div>
    </div>

        <form action="{{asset('/home/dologin2')}}" method="post">
            {{csrf_field()}}
            <section class="form-b6px1">
                <input maxlength="11"  name="phone" value="" placeholder="手机号" type="tel" />
                <span id="span" style="position:relative;left:320px;"></span>
                <a href="javascript:;" onclick="sendcode()"   class="CountButton-3e-kd">发送验证码</a>

            </section>
            <section class="form-b6px1">
                <input maxlength="8" name="code" placeholder="验证码" type="tel" />
            </section>
            <section class="form-b6px1">
                温馨提示：未注册饿了么帐号的手机号，登录时将自动注册，且代表您已同意
                <a style="color:blue" href="https://h5.ele.me/service/agreement/">《用户服务协议》</a>
            </section>
            <button class="SubmitButton-2wG4T"> 登录 </button>
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

                function sendcode(){
                $phone = $('[name="phone"]').val();

//			2. 向服务器的发送短信的接口发送ajax请求
                $.post("{{url('home/sendcode')}}",{"phone":$phone,"_token":"{{csrf_token()}}"},function(data){
//                    console.log(data);
                    var obj = JSON.parse(data);
                    if(obj.failure == 0){
                        layer.msg(obj.message, {icon: 5,area: ['100px', '80px']});
                    }else{
                        layer.msg(obj.message, {icon: 6,area: ['100px', '80px']});
                    }
                });
            }

        </script>
@endsection


