@extends('admin/xtAdmin/common')
@section('title')
    <title>系统后台管理员申请</title>
@endsection
@section('body')
    <div class="login_box">
        <h1>Blog</h1>
        <h2>欢迎申请CCHome系统后台管理员</h2>
        <div class="form">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @if(is_object($errors))
                            @foreach ($errors->all() as $error)
                                <li class="dh" style="color:red">{{ $error }}</li>
                            @endforeach
                        @else
                            <li class="dh" style="color:red">{{ $errors }}</li>
                        @endif
                    </ul>
                </div>
            @endif
                <div class="alert alert-danger">
                    <ul>
                        @if(session('msg'))
                            <li class="dh" style="color:red">{{session('msg')}}</li>
                        @endif
                    </ul>

                </div>

            {{--<p style="color:red">用户名错误</p>--}}
            <form action="{{url('admin/xtAdmin/doregister')}}" method="post">
                <ul>
                    <li>
                        {{csrf_field()}}
                        <input type="text" placeholder="请输入管理员名称" name="aname" value="{{old('aname')}}" class="text"/>
                        <span><i class="fa fa-user"></i></span>
                    </li>
                    <li>
                        {{csrf_field()}}
                        <input type="text" placeholder="请输入手机号码" name="phone" value="{{old('phone')}}" class="text"/>
                        <span><i class="fa fa-phone"></i></span>
                    </li>
                    <li>
                        <input type="password" placeholder="请输入密码" name="password" class="text"/>
                        <span><i class="fa fa-lock"></i></span>
                    </li>
                    <li>
                        <input type="password" placeholder="请确认输入密码" name="re_password" class="text"/>
                        <span><i class="fa fa-lock"></i></span>
                    </li>
                    <li>
                        <input type="text" placeholder="请输入验证码" class="code" value="{{old('code')}}" name="code"/>
                        <span><i class="fa fa-check-square-o"></i></span>
                        <img src="{{url('admin/xtAdmin/code')}}" onclick="this.src='{{url('admin/xtAdmin/code')}}?'+Math.random()" alt="">
                    </li>
                    <input type="hidden" name="time" value="{{time()}}">
                    <li>
                        <input type="submit" value="立即申请"/>
                    </li>

                </ul>
            </form>
            <p><a href="{{url('admin/xtAdmin/login')}}">立即登录</a> &copy; 2016 Powered by <a href="http://www.itxdl.cn" target="_blank">http://www.itxdl.cn</a></p>
        </div>
    </div>
    <script>
        $('.dh').fadeOut(3000);

    </script>
@endsection