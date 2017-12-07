@extends('/Home/layouts.login')

@section('body')




            <div class="LoginHeader-22Up7_0">
                <a class="" href="/home/login2"> 短信登录 </a>
                <a class="LoginHeader-33EiC_0"> 密码登录 </a>
            </div>
        </div>
        <div>
            <form action="{{asset('/home/dologin')}}" method="post">
                {{csrf_field()}}
                <section class="form-b6px1">
                    <input autocapitalize="on" placeholder="手机/邮箱/用户名" type="text" name="uname" value="{{old('uname')}}" />
                </section>
                <section class="form-b6px1">
                    <input placeholder="密码" autocapitalize="on" type="password" name="password"  />
                    
                </section>
                <section class="form-b6px1" >
                    <input maxlength="6" placeholder="验证码" type="text" name="code" />
                    <div ubt-click="101160" class="form-2o2sO">
                        <a onclick="javascript:re_captcha();">
                            <img src="{{ URL('/code/captcha/1') }}" id="127ddf0de5a04167a9e427d883690ff6">
                        </a>

                        <script type="text/javascript">
                            function re_captcha() {
                                $url = "{{ URL('/code/captcha') }}";
                                $url = $url + "/" + Math.random();
                                document.getElementById('127ddf0de5a04167a9e427d883690ff6').src = $url;
                            }
                        </script>

                    </div>
                </section>
                <button class="SubmitButton-2wG4T"> 登录 </button>
            </form>





@endsection