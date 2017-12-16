@extends('/Home/layouts.person')

@section('body')
            <!-- ngIf: pageTitleVisible -->
            <h3 ng-if="pageTitleVisible" class="profile-paneltitle ng-scope"><span ng-bind="pageTitle" class="ng-binding">安全中心</span> <span class="subtitle ng-binding" ng-bind-html="pageSubtitle | toTrusted"></span></h3>
            <!-- end ngIf: pageTitleVisible -->
            <div class="profile-panelcontent" ng-transclude="">
                <div class="security-level ng-scope">
                    <span>安全等级：</span>
                    <div class="security-level-bar">
                        <span class="security-level-progress low" ng-style="{'width': level.width, 'background-color': level.color}" style="width: 60%; background-color: rgb(148, 200, 82);"></span>
                    </div>
                    <span class="security-level-text ng-binding" ng-bind="level.text" ng-style="{'color': level.color}" style="color: rgb(148, 200, 82);">高</span>
                    <span class="security-level-tip">建议你启动全部安全设置，以保障账户及资金安全！</span>
                </div>
                <div class="loading ng-binding ng-isolate-scope ng-hide" loading="" content="正在载入安全信息..." ng-show="securityLoading">
                    <!-- ngIf: type==='profile' -->
                    <img ng-if="type==='profile'" src="{{asset('a/image/profile-loading.4984fa.gif')}}" alt="正在加载" class="ng-scope" />
                    <!-- end ngIf: type==='profile' -->
                    <!-- ngIf: type==='normal' -->正在载入安全信息...
                </div>
                <!-- ngRepeat: item in securityType -->
                <div class="security-type ng-scope" ng-repeat="item in securityType">
                    <span class="child security-type-icon"><i ng-class="item.status ? 'security-type-icon-ok icon-dot-check' : 'security-type-icon-warn icon-dot-warning'" class="security-type-icon-warn icon-dot-warning"></i></span>
                    <span class="child security-type-name ng-binding security-type-name-weak" ng-class="item.status || 'security-type-name-weak'" ng-bind="item.name">登录密码</span>
                    <div class="child security-type-tip">
                        <p ng-bind="item.text.text" class="ng-binding">您还没有设置密码</p>
                        <!-- ngIf: item.text.textMore -->
                        <p class="security-type-tip-more ng-binding ng-scope" ng-if="item.text.textMore" ng-bind-html="item.text.textMore | toTrusted">设置登陆密码，使用饿了么更方便、安全。</p>
                        <!-- end ngIf: item.text.textMore -->
                    </div>
                    <span class="child security-type-linkcon"><a class="security-type-link ng-binding btn-stress" target="" ng-href="/profile/security/changepassword" ng-class="item.status ? 'btn-link' : 'btn-stress'" ng-bind="item.text.link" href="{{asset('home/setpwd')}}">设置密码</a></span>
                </div>
                <!-- end ngRepeat: item in securityType -->
                <div class="security-type ng-scope" ng-repeat="item in securityType">
                    <span class="child security-type-icon"><i ng-class="item.status ? 'security-type-icon-ok icon-dot-check' : 'security-type-icon-warn icon-dot-warning'" class="security-type-icon-ok icon-dot-check"></i></span>
                    <span class="child security-type-name ng-binding" ng-class="item.status || 'security-type-name-weak'" ng-bind="item.name">手机验证</span>
                    <div class="child security-type-tip">
                        <p ng-bind="item.text.text" class="ng-binding">已绑定手机 {{$users['phone']}}</p>
                        <!-- ngIf: item.text.textMore -->
                    </div>
                    <span class="child security-type-linkcon"><a class="security-type-link ng-binding btn-link" target="" ng-href="/profile/security/changemobile/" ng-class="item.status ? 'btn-link' : 'btn-stress'" ng-bind="item.text.link" href="{{url('home/changephone')}}">更改手机</a></span>
                </div>
                <!-- end ngRepeat: item in securityType -->
                <div class="security-type ng-scope" ng-repeat="item in securityType">
                    <span class="child security-type-icon"><i ng-class="item.status ? 'security-type-icon-ok icon-dot-check' : 'security-type-icon-warn icon-dot-warning'" class="security-type-icon-warn icon-dot-warning"></i></span>
                    <span class="child security-type-name ng-binding security-type-name-weak" ng-class="item.status || 'security-type-name-weak'" ng-bind="item.name">邮箱激活</span>
                    <div class="child security-type-tip">
                        <p ng-bind="item.text.text" class="ng-binding">您还没有绑定邮箱</p>
                        <!-- ngIf: item.text.textMore -->
                        <p class="security-type-tip-more ng-binding ng-scope" ng-if="item.text.textMore" ng-bind-html="item.text.textMore | toTrusted">验证后可用户快速找回密码，接受账户提醒邮件。</p>
                        <!-- end ngIf: item.text.textMore -->
                    </div>
                    <span class="child security-type-linkcon"><a class="security-type-link ng-binding btn-stress" target="" ng-href="/profile/security/bindemail" ng-class="item.status ? 'btn-link' : 'btn-stress'" ng-bind="item.text.link" href="{{url('home/bdemail')}}">立即绑定</a></span>
                </div>
                <!-- end ngRepeat: item in securityType -->

                <!-- end ngRepeat: item in securityType -->
            </div>
        </div>
    </div>
</div>
@endsection