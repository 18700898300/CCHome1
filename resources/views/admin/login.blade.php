<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/admin/assets')}}/style/css/ch-ui.admin.css">
    <link rel="stylesheet" href="{{asset('/admin/assets')}}/style/font/css/font-awesome.min.css">
</head>
<body style="background:#F3F3F4;">
<div class="login_box">
    <h1>CCHome</h1>
    <h2>欢迎使用CChome管理平台</h2>
    <div class="form">
        {{--此步必须有类名,否则样式不居中--}}

        <form action="{{asset('/admin/domlogin')}}" method="post">
            {{csrf_field()}}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @if(is_object($errors))
                            @foreach ($errors->all() as $error)
                                <li style="color:red">{{ $error }}</li>
                            @endforeach
                        @else
                            <li style="color:red;">{{$errors}}</li>
                        @endif

                    </ul>
                </div>
            @endif

            <ul>
                <li>
                    <input type="text" name="bname" placeholder = "请输入用户名|注册手机号" value="{{old('bname')}}" class="text"/>
                    <span><i class="fa fa-user"></i></span>
                </li>
                <li>
                    <input type="password" name="bpassword"  placeholder = "请输入密码" value="{{old('bpassword')}}" class="text"/>
                    <span><i class="fa fa-lock"></i></span>
                </li>
                <li>
                    <input type="text" class="code" name="code"/>
                    <span><i class="fa fa-check-square-o"></i></span>
                    {{--                    <img src="{{url('admin/yzm')}}" alt="点我换图" onclick = "this.src='{{url("admin/yzm")}}?'+Math.random()">--}}
                    <img src="{{url('admin/yzm')}}" onclick="this.src='{{url("admin/yzm")}}?'+Math.random()" alt=""/>
                </li>
                <li>
                    <input type="submit" value="立即登陆"/>
                </li>
            </ul>
        </form>
        <p><a href="#">返回首页</a> &copy; 2017 Powered by <a href="http://www.cchome.com" target="_blank">http://www.cchome.com</a></p>
    </div>
</div>

</body>

</html>
