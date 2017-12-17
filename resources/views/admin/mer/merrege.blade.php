@extends('/Home/layouts.login')


@section('title')
    <title>后台商户注册页</title>
@endsection
@section('body')
    <!--面包屑导航 开始-->



    <div class="LoginHeader-22Up7_0">
        <a class="" href="{{asset('admin/meregisterm')}}"> 短信注册 </a>
        <a class="LoginHeader-33EiC_0"> 邮箱注册 </a>
    </div>
    </div>
    <div>
        <form action="" method="post">
            {{csrf_field()}}
            <section class="form-b6px1">
                <input autocapitalize="on" placeholder="手机/邮箱/用户名" type="text" name="uname" value="{{old('uname')}}" />
            </section>
            <section class="form-b6px1">
                <input placeholder="密码" autocapitalize="on" type="password" name="password"  />

            </section>
            <section class="form-b6px1" >
                <input maxlength="6" placeholder="验证码" type="text" name="code" />
                <img src="{{url('admin/yzm')}}" onclick="this.src='{{url("admin/yzm")}}?'+Math.random()" alt=""/>
            </section>
            <button class="SubmitButton-2wG4T"> 注册 </button>
        </form>
    </div>
@endsection