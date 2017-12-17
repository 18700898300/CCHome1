@extends('home.layouts.person')
@section('body')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>

                @if(is_object($errors))
                    @foreach ($errors->all() as $error)
                        <li style="color:#ff0000">{{ $error }}</li>
                    @endforeach
                @else
                    <li style="color:#ff0000">{{ $errors }}</li>
                @endif
            </ul>
        </div>
    @endif

    <!-- ngIf: pageTitleVisible -->
<h3 ng-if="pageTitleVisible" class="profile-paneltitle ng-scope"><span ng-bind="pageTitle" class="ng-binding">更改手机</span> <span class="subtitle ng-binding" ng-bind-html="pageSubtitle | toTrusted"></span></h3>
<!-- end ngIf: pageTitleVisible -->
    <div id="msg" style="color:red;">{{session('msg')}}</div>
<div class="profile-panelcontent" ng-transclude="">
    <ol class="instruction-steps ng-isolate-scope" instruction-steps="" steps-data="steps" current-step="currentStep">
        <!-- ngRepeat: step in steps -->

            <!-- ngIf: step.number >= current -->
            <!-- end ngIf: step.number >= current -->
            <!-- ngIf: step.number < current -->
        <!-- end ngRepeat: step in steps -->
        <li class="instruction-step ng-scope waiting" ng-class="{'waiting': step.number &gt; current}" ng-repeat="step in steps">
            <!-- ngIf: step.number >= current -->
            <!-- end ngIf: step.number >= current -->
            <!-- ngIf: step.number < current --> <span class="step-text" ng-bind="step.text"><h3>绑定新手机号码</h3></span></li>
        <!-- end ngRepeat: step in steps -->

            <!-- ngIf: step.number >= current -->
            <!-- end ngIf: step.number >= current -->
            <!-- ngIf: step.number < current -->
        <!-- end ngRepeat: step in steps -->
    </ol>
    <form class="security-service ng-scope ng-pristine ng-valid" action="{{url('home/dochangephone')}}" method="post"  >
        {{csrf_field()}}
        <p class="service-text">为保障你的账号安全，请先帮助我们验证你的身份！</p>
        <div class="field-default formfield ng-isolate-scope" ng-class="{ 'validate-error': model.$hintTypes[property] === 'error' }" form-field="" label="原手机号码">
            <label ng-bind="label"  class="ng-binding">新的手机号:</label>
            <input name="phone" value="" ng-model="link.validate_code" class="ng-pristine ng-valid" />
            <span id="span" style="position:relative;left:20px;"></span>
            {{--<span class="field-default-value default-mobile ng-binding ng-scope" ng-bind="user.mobile | mobileMask">--}}
                {{----}}
            {{--</span>--}}
            <div class="formfield-hint">
                <span ng-class="{ 'icon-dot-error': model.$hintTypes[property] === 'error', 'icon-dot-warning': model.$hintTypes[property] === 'warning' }" ng-bind="model.$hints[property]" class="ng-binding"></span>
            </div>
        </div>
        <div class="formfield form-field-verifymobile ng-isolate-scope" ng-class="{ 'validate-error': model.$hintTypes[property] === 'error' }" mobile-verify-field="" label="验证码" model="originMobileVerifyLink" property="validate_code" link="originMobileVerifyLink">
            <label  ng-bind="label" class="ng-binding">验证码:</label>
            <input name="code" ng-model="link.validate_code" class="ng-pristine ng-valid" />
            <button type="button" onclick="sendcode()" ng-class="{ 'disabled': audio === 'running' }" countdown="" status="sms" mode="text" time="60" tpl="?time秒 重新发送" started-once-text="重新发送" ng-click="getToken(link.sendType)" class="ng-isolate-scope">获取验证码</button>
            <div class="formfield-hint">
         <span ng-class="{
      'icon-dot-error': model.$hintTypes[property] === 'error',
      'icon-dot-warning': model.$hintTypes[property] === 'warning',
      'multi': audio === 'running' }" ng-bind="model.$hints[property]" class="ng-binding"></span>
                <span class="verifymobile-msg" ng-hide="sms === 'running' || sms === 'end' || audio === 'running'">为保障账号安全，请先对你的身份进行验证</span>

            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn-primary btn-lg security-submit">提交</button>
        </div>
        <div class="form-group">
            <p class="service-text notice-text">当前号码已不用或丢失/无法收到验证码？请联系客服：<span class="default-mobile">10105757</span></p>
        </div>
    </form>


</div>
</div>
</div>
</div>

    <script>
        //验证手机号
//        alert ($);

        $('input[name=phone]').blur(function(){
//            alert(22);
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
//            console.log($phone);

//			2. 向服务器的发送短信的接口发送ajax请求
            $.post("{{url('home/sendcode')}}",{"phone":$phone,"_token":"{{csrf_token()}}"},function(data){
                    console.log(data);
                var obj = JSON.parse(data);
                if(obj.failure == 0){
                    layer.msg(obj.message, {icon: 5,area: ['100px', '80px']});
                }else{
                    layer.msg(obj.message, {icon: 6,area: ['100px', '80px']});
                }
            });
        }

        $('#msg').fadeOut(2000);

    </script>


    @endsection
