@extends('/Home/layouts.person')
@section('body')

<!-- ngIf: pageTitleVisible -->
<h3 ng-if="pageTitleVisible" class="profile-paneltitle ng-scope"><span ng-bind="pageTitle" class="ng-binding">绑定邮箱</span> <span class="subtitle ng-binding" ng-bind-html="pageSubtitle | toTrusted"></span></h3>
<!-- end ngIf: pageTitleVisible -->
<div class="profile-panelcontent" ng-transclude="">
    <!-- ngIf: !success -->
    <div ng-if="!success" class="ng-scope">
        <div security-verify-form="" link="formLink" class="ng-isolate-scope">
            <form class="security-service ng-pristine ng-valid" action="{{url('home/dobdemail')}}" method="post">
                {{csrf_field()}}
                <!-- ngIf: link.serviceText -->
                <p class="service-text ng-binding ng-scope" ng-if="link.serviceText" ng-bind="link.serviceText">饿了么提示您：为了保障你的账户安全，请及时绑定邮箱！</p>
                <!-- end ngIf: link.serviceText -->
                <!-- ngIf: link.field -->
                <div class="formfield ng-isolate-scope" ng-class="{ 'validate-error': model.$hintTypes[property] === 'error' }" ng-if="link.field" form-field="" label="邮箱地址" model="link.verify.link" property="email">
                    <label ng-bind="label" class="ng-binding">邮箱地址</label>
                    <input  id="mazey" name="email" value="" ng-model="link.verify.link[link.field.property]" ng-blur="link.field.checkExist &amp;&amp; link.field.checkExist()" placeholder="请输入绑定的邮箱地址" class="ng-scope ng-pristine ng-valid" />
                    <span id="span" style="position:relative;left:15px;"></span>
                    <div class="formfield-hint">
                        <span ng-class="{ 'icon-dot-error': model.$hintTypes[property] === 'error', 'icon-dot-warning': model.$hintTypes[property] === 'warning' }" ng-bind="model.$hints[property]" class="ng-binding"></span>
                    </div>
                </div>
                <!-- end ngIf: link.field -->
                <!-- ngIf: link.origin -->
                <!-- ngIf: link.verify.type === 'mobile' -->
                <!-- ngIf: link.verify.type === 'email' -->
                <div  class="formfield form-field-verifymobile ng-isolate-scope" ng-class="{ 'validate-error': model.$hintTypes[property] === 'error' }" ng-if="link.verify.type === 'email'" email-verify-field="" label="验证码" model="link.verify.link" property="validate_code" link="link.verify.link" start-verify="link.verify.startVerify" start-count="">
                    <label  ng-bind="label" class="ng-binding">验证码</label>
                    <input name="code" ng-model="link.validate_code" class="ng-prixstine ng-valid" />
                    <button  onclick="sendcode()" type="button" ng-class="{ 'disabled': audio === 'running' }" countdown="" status="count" mode="text" time="60" tpl="?time秒 重新发送" started-once-text="获取验证码" ng-click="getToken()" class="ng-isolate-scope">获取验证码</button>
                    <div class="formfield-hint">
                        <span ng-class="{ 'icon-dot-error': model.$hintTypes[property] === 'error', 'icon-dot-warning': model.$hintTypes[property] === 'warning' }" ng-bind="model.$hints[property]" class="ng-binding"></span>
                        <span class="verifymobile-msg" ng-hide="count === 'running'">为保障账号安全，请先对你的身份进行验证</span>
                        <span class="verifymobile-msg ng-hide" ng-show="count === 'running'">请在您绑定的邮箱中查找验证码</span>
                    </div>
                </div>
                <!-- end ngIf: link.verify.type === 'email' -->
                <div class="form-group">
                    <button onclick="check()" type="submit" class="btn-primary btn-lg security-submit ng-binding" ng-bind="link.submitText">验证邮箱</button>
                </div>
            </form>
        </div>
        <p class="bindemail-form-tip"><b>没有收到验证邮件 ?</b><br />1. 您的邮箱系统可能会误将激活邮件识别为垃圾邮件，请到垃圾邮件目录找找。<br />2. 您可以在60s后重新获取验证码</p>
    </div>
    <!-- end ngIf: !success -->
    <div class="bindemail-success ng-scope ng-hide" ng-show="success">
        <img src="{{asset('a/image/security-success.3730bf.png')}}" alt="" />
        <p><b>恭喜，邮箱绑定成功！</b><br />绑定邮箱地址为：<span class="email ng-binding" ng-bind="user.email"></span>，您以后可以使用该邮箱登陆饿了么<br />5 秒后返回安全中心 <a href="{{url('home/safe')}}">立即返回</a></p>
    </div>


</div>
</div>
</div>
</div>

    <script>

        //验证邮箱
        $('input[name=email]').blur(function(){
            var phv = $(this).val();
            var reg = /^[A-Za-z0-9\u4e00-\u9fa5]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;

            if(!reg.test(phv)){
                $(this).next().text(' *邮箱格式不正确').css('color','red');
                $(this).css('border','solid 1px red');

            } else {
                $(this).next().text(' √').css('color','green');
                $(this).css('border','solid 1px green');
            }
        });


        function sendcode(){
//            alert(111);
            var uurl = $('[name="email"]').val();


            $.post('{{url('/home/dobdemail')}}',{'email':uurl,'_token':'{{csrf_token()}}'},function(data){

                console.log(data.email);
                if (data.email != "") {

                    layer.open({
                        content: '亲,请到邮箱查看验证码',
                        btn: ['确认', '取消'],
                        yes: function (index, layero) {
                            window.open('http://' + gotoEmail(uurl));
                        },
//
                    });
                } else {
                    alert("抱歉!未找到对应的邮箱登录地址，请自己登录邮箱查看邮件！");
                }
            });





            //功能：根据用户输入的Email跳转到相应的电子邮箱首页
            function gotoEmail($mail) {
                $t = $mail.split('@')[1];
                $t = $t.toLowerCase();
                if ($t == '163.com') {
                    return 'mail.163.com';
                } else if ($t == 'vip.163.com') {
                    return 'vip.163.com';
                } else if ($t == '126.com') {
                    return 'mail.126.com';
                } else if ($t == 'qq.com' || $t == 'vip.qq.com' || $t == 'foxmail.com') {
                    return 'mail.qq.com';
                } else if ($t == 'gmail.com') {
                    return 'mail.google.com';
                } else if ($t == 'sohu.com') {
                    return 'mail.sohu.com';
                } else if ($t == 'tom.com') {
                    return 'mail.tom.com';
                } else if ($t == 'vip.sina.com') {
                    return 'vip.sina.com';
                } else if ($t == 'sina.com.cn' || $t == 'sina.com') {
                    return 'mail.sina.com.cn';
                } else if ($t == 'tom.com') {
                    return 'mail.tom.com';
                } else if ($t == 'yahoo.com.cn' || $t == 'yahoo.cn') {
                    return 'mail.cn.yahoo.com';
                } else if ($t == 'tom.com') {
                    return 'mail.tom.com';
                } else if ($t == 'yeah.net') {
                    return 'www.yeah.net';
                } else if ($t == '21cn.com') {
                    return 'mail.21cn.com';
                } else if ($t == 'hotmail.com') {
                    return 'www.hotmail.com';
                } else if ($t == 'sogou.com') {
                    return 'mail.sogou.com';
                } else if ($t == '188.com') {
                    return 'www.188.com';
                } else if ($t == '139.com') {
                    return 'mail.10086.cn';
                } else if ($t == '189.cn') {
                    return 'webmail15.189.cn/webmail';
                } else if ($t == 'wo.com.cn') {
                    return 'mail.wo.com.cn/smsmail';
                } else if ($t == '139.com') {
                    return 'mail.10086.cn';
                } else {
                    return '';
                }
            };
        }


    </script>

    @endsection
