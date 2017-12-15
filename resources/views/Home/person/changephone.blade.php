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
<div class="profile-panelcontent" ng-transclude="">
    <ol class="instruction-steps ng-isolate-scope" instruction-steps="" steps-data="steps" current-step="currentStep">
        <!-- ngRepeat: step in steps -->
        <li class="instruction-step ng-scope" ng-class="{'waiting': step.number &gt; current}" ng-repeat="step in steps">
            <!-- ngIf: step.number >= current --><span class="status ng-scope icon-dot" ng-class="{'icon-dot': step.number === current, 'icon-circle': step.number &gt; current}" ng-if="step.number &gt;= current"><var ng-bind="step.number" class="ng-binding">1</var></span>
            <!-- end ngIf: step.number >= current -->
            <!-- ngIf: step.number < current --> <span class="step-text ng-binding" ng-bind="step.text">验证原手机号码</span></li>
        <!-- end ngRepeat: step in steps -->
        <li class="instruction-step ng-scope waiting" ng-class="{'waiting': step.number &gt; current}" ng-repeat="step in steps">
            <!-- ngIf: step.number >= current --><span class="status ng-scope icon-circle" ng-class="{'icon-dot': step.number === current, 'icon-circle': step.number &gt; current}" ng-if="step.number &gt;= current"><var ng-bind="step.number" class="ng-binding">2</var></span>
            <!-- end ngIf: step.number >= current -->
            <!-- ngIf: step.number < current --> <span class="step-text ng-binding" ng-bind="step.text">绑定新手机号码</span></li>
        <!-- end ngRepeat: step in steps -->
        <li class="instruction-step ng-scope waiting" ng-class="{'waiting': step.number &gt; current}" ng-repeat="step in steps">
            <!-- ngIf: step.number >= current --><span class="status ng-scope icon-circle" ng-class="{'icon-dot': step.number === current, 'icon-circle': step.number &gt; current}" ng-if="step.number &gt;= current"><var ng-bind="step.number" class="ng-binding">3</var></span>
            <!-- end ngIf: step.number >= current -->
            <!-- ngIf: step.number < current --> <span class="step-text ng-binding" ng-bind="step.text">修改成功</span></li>
        <!-- end ngRepeat: step in steps -->
    </ol>
    <form class="security-service ng-scope ng-pristine ng-valid" ng-show="currentStep === 1" ng-submit="verifyOriginMobile()" novalidate="">
        {{csrf_field()}}
        <p class="service-text">为保障你的账号安全，请先帮助我们验证你的身份！</p>
        <div class="field-default formfield ng-isolate-scope" ng-class="{ 'validate-error': model.$hintTypes[property] === 'error' }" form-field="" label="原手机号码">
            <label ng-bind="label" name="phone" class="ng-binding">原手机号码</label>
            <span class="field-default-value default-mobile ng-binding ng-scope" ng-bind="user.mobile | mobileMask">{{$users->phone}}</span>
            <div class="formfield-hint">
                <span ng-class="{ 'icon-dot-error': model.$hintTypes[property] === 'error', 'icon-dot-warning': model.$hintTypes[property] === 'warning' }" ng-bind="model.$hints[property]" class="ng-binding"></span>
            </div>
        </div>
        <div class="formfield form-field-verifymobile ng-isolate-scope" ng-class="{ 'validate-error': model.$hintTypes[property] === 'error' }" mobile-verify-field="" label="验证码" model="originMobileVerifyLink" property="validate_code" link="originMobileVerifyLink">
            <label ng-bind="label" class="ng-binding">验证码</label>
            <input name="validate_code" ng-model="link.validate_code" class="ng-pristine ng-valid" />
            <button type="button" ng-class="{ 'disabled': audio === 'running' }" countdown="" status="sms" mode="text" time="60" tpl="?time秒 重新发送" started-once-text="重新发送" ng-click="getToken(link.sendType)" class="ng-isolate-scope">获取验证码</button>
            <div class="formfield-hint">
         <span ng-class="{
      'icon-dot-error': model.$hintTypes[property] === 'error',
      'icon-dot-warning': model.$hintTypes[property] === 'warning',
      'multi': audio === 'running' }" ng-bind="model.$hints[property]" class="ng-binding"></span>
                <span class="verifymobile-msg" ng-hide="sms === 'running' || sms === 'end' || audio === 'running'">为保障账号安全，请先对你的身份进行验证</span>
                <span class="verifymobile-msg ng-hide" ng-show="sms === 'running' &amp;&amp; audio !== 'running'">短信已发送，请输入短信中的验证码</span>
                <span class="verifymobile-msg ng-hide" ng-show="sms === 'end' &amp;&amp; audio !== 'running'"><span>收不到短信？请使用</span> <a ng-click="getToken('audio')">语音验证码</a></span>
                <span class="verifymobile-msg multi ng-hide" ng-show="audio === 'running'"><span>电话拨打中... 请留意你的手机来电</span> <span countdown="" status="audio" mode="text" time="60" tpl="(?time秒 可重新拨打)" class="ng-isolate-scope"></span></span>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn-primary btn-lg security-submit">下一步</button>
        </div>
        <div class="form-group">
            <p class="service-text notice-text">当前号码已不用或丢失/无法收到验证码？请联系客服：<span class="default-mobile">10105757</span></p>
        </div>
    </form>
    <form class="security-service ng-scope ng-pristine ng-valid ng-hide" ng-show="currentStep === 2" ng-submit="verifyNewMobile()" novalidate="">
        <p class="service-text">验证身份成功，请绑定新的手机号码！</p>
        <div class="formfield ng-isolate-scope" ng-class="{ 'validate-error': model.$hintTypes[property] === 'error' }" form-field="" label="新手机号码" model="newMobileVerifyLink" property="mobile">
            <label ng-bind="label" class="ng-binding">新手机号码</label>
            <input name="mobile" ng-model="newMobileVerifyLink.mobile" placeholder="请输入新的手机号码" class="ng-scope ng-pristine ng-valid" />
            <div class="formfield-hint">
                <span ng-class="{ 'icon-dot-error': model.$hintTypes[property] === 'error', 'icon-dot-warning': model.$hintTypes[property] === 'warning' }" ng-bind="model.$hints[property]" class="ng-binding"></span>
            </div>
        </div>
        <div class="formfield form-field-verifymobile ng-isolate-scope" ng-class="{ 'validate-error': model.$hintTypes[property] === 'error' }" mobile-verify-field="" label="验证码" model="newMobileVerifyLink" property="validate_code" link="newMobileVerifyLink">
            <label ng-bind="label" class="ng-binding">验证码</label>
            <input name="validate_code" ng-model="link.validate_code" class="ng-pristine ng-valid" />
            <button type="button" ng-class="{ 'disabled': audio === 'running' }" countdown="" status="sms" mode="text" time="60" tpl="?time秒 重新发送" started-once-text="重新发送" onclick="sendcode()" ng-click="getToken(link.sendType)" class="ng-isolate-scope">获取验证码</button>
            <div class="formfield-hint">
         <span ng-class="{
      'icon-dot-error': model.$hintTypes[property] === 'error',
      'icon-dot-warning': model.$hintTypes[property] === 'warning',
      'multi': audio === 'running' }" ng-bind="model.$hints[property]" class="ng-binding"></span>
                <span class="verifymobile-msg" ng-hide="sms === 'running' || sms === 'end' || audio === 'running'">为保障账号安全，请先对你的身份进行验证</span>
                <span class="verifymobile-msg ng-hide" ng-show="sms === 'running' &amp;&amp; audio !== 'running'">短信已发送，请输入短信中的验证码</span>
                <span class="verifymobile-msg ng-hide" ng-show="sms === 'end' &amp;&amp; audio !== 'running'"><span>收不到短信？请使用</span> <a ng-click="getToken('audio')">语音验证码</a></span>
                <span class="verifymobile-msg multi ng-hide" ng-show="audio === 'running'"><span>电话拨打中... 请留意你的手机来电</span> <span countdown="" status="audio" mode="text" time="60" tpl="(?time秒 可重新拨打)" class="ng-isolate-scope"></span></span>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn-primary btn-lg security-submit">下一步</button>
        </div>
    </form>
    <div class="security-service security-notice ng-scope ng-hide" ng-show="currentStep === 3">
        <img src="{{asset('a/image/security-success.3730bf.png')}}" alt="" class="notice-img" />
        <h4 class="notice-title">恭喜，手机已绑定成功！</h4>
        <p class="notice-text">绑定手机号为：<span class="highlight ng-binding" ng-bind="user.mobile">{{$users->phone}}</span>，你以后可以使用本手机号登陆曹操到家</p>
        <p class="notice-text">5s 后返回安全中心 <a ng-href="/profile/security" href="https://www.ele.me/profile/security">立即返回</a></p>
    </div>
</div>
</div>
</div>
</div>

    <script>
        function sendcode(){
            $phone = $('[name="phone"]').val();

//			2. 向服务器的发送短信的接口发送ajax请求
            $.post("{{url('home/sendcode')}}",{"phone":$phone,"_token":"{{csrf_token()}}"},function(data){
//                console.log(data);
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
