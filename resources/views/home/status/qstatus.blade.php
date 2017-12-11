@extends('layouts.admin')
@section('title')
    <title>商户申请件编号查询系统</title>
    @endsection
@section('body')
    <body style="background:#F3F3F4;">
    <div class="login_box">
        <h1>CCHome</h1>
        <h2>欢迎使用商户申请件编号查询系统</h2>
        <div class="form">
            {{--此步必须有类名,否则样式不居中--}}

            <form action="{{asset('/home/doqstatus')}}" method="post">
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
                        <input type="text" name="number" placeholder = "请输入申请件编号" value="{{old('number')}}" class="text"/>
                        <span><i class="fa fa-user"></i></span>
                    </li>

                    <li>
                        <input type="text" class="code" name="code"/>
                        <span><i class="fa fa-check-square-o"></i></span>
                        {{--                    <img src="{{url('admin/yzm')}}" alt="点我换图" onclick = "this.src='{{url("admin/yzm")}}?'+Math.random()">--}}
                        <img src="{{url('admin/yzm')}}" onclick="this.src='{{url("admin/yzm")}}?'+Math.random()" alt=""/>
                    </li>
                    <li>
                        <input type="submit" value="提交"/>
                    </li>
                </ul>
            </form>
            <p><a href="#">返回首页</a> &copy; 2017 Powered by <a href="http://www.cchome.com" target="_blank">http://www.cchome.com</a></p>
        </div>
    </div>
    @endsection
    </body>
