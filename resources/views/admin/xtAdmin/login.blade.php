@extends('admin/xtAdmin/common')
@section('title')
    <title>系统后台登录页</title>
@endsection
@section('body')
    <div class="login_box">
        <h1>Blog</h1>
        <h2>欢迎使用CCHome系统管理平台</h2>
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

            {{--<p style="color:red">用户名错误</p>--}}
            <form action="{{url('admin/xtAdmin/dologin')}}" method="post">
                <ul>
                    <li>
                        {{csrf_field()}}
                        <input type="text" name="aname" value="{{old('aname')}}" class="text"/>
                        <span><i class="fa fa-user"></i></span>
                    </li>
                    <li>
                        <input type="password" name="password" value="{{old('password')}}" class="text"/>
                        <span><i class="fa fa-lock"></i></span>
                    </li>

                    <li>
                        <input type="submit" value="立即登陆"/>
                    </li>
                </ul>
            </form>
            <p><a href="#">返回首页</a> &copy; 2016 Powered by <a href="http://www.itxdl.cn" target="_blank">http://www.itxdl.cn</a></p>
        </div>
    </div>
    <script>
        $('.dh').fadeOut('slow');
    </script>
@endsection