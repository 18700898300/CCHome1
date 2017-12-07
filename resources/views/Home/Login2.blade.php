@extends('/Home/layouts.login')


@section('body')


    <div class="LoginHeader-22Up7_0">
        <a class="LoginHeader-33EiC_0"> 短信登录 </a>
        <a class="" href="/home/login"> 密码登录 </a>
    </div>
    </div>
    <div>
        <form action="{{asset('/home/dologin')}}" method="post">
            {{csrf_field()}}
            <section class="form-b6px1">
                <input maxlength="11" placeholder="手机号" type="tel" />
                <button  disabled="disabled" class="CountButton-3e-kd" ubt-click="101161"> 获取验证码 </button>
            </section>
            <section class="form-b6px1">
                <input maxlength="8" placeholder="验证码" type="tel" />
            </section>
            <section class="form-b6px1">
                温馨提示：未注册饿了么帐号的手机号，登录时将自动注册，且代表您已同意
                <a style="color:blue" href="https://h5.ele.me/service/agreement/">《用户服务协议》</a>
            </section>
            <button class="SubmitButton-2wG4T"> 登录 </button>
        </form>
        <!---->



@endsection


