@extends('/Home/layouts.person')

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
    <h3 ng-if="pageTitleVisible" class="profile-paneltitle ng-scope"><span ng-bind="pageTitle" class="ng-binding">设置密码</span> <span class="subtitle ng-binding" ng-bind-html="pageSubtitle | toTrusted"></span></h3>
    <!-- end ngIf: pageTitleVisible -->
    <div class="profile-panelcontent" ng-transclude="">
        <form action="{{url('home/dosetpwd')}}" method="post" class="changepwd ng-scope ng-pristine ng-valid">
            {{csrf_field()}}
            <p class="changepwd-tip">饿了么提示你：使用大小写字母、数字与标点符号的组合，可以大幅提升帐号安全！</p>
            <!-- ngIf: !firstSet -->
            <div class="formfield ng-isolate-scope" ng-class="{ 'validate-error': model.$hintTypes[property] === 'error' }" form-field="" label="新密码" model="changePwdData" property="newPwd">
                <label ng-bind="label" class="ng-binding">新密码</label>
                <input name="password" ng-model="changePwdData.newPwd" placeholder="请输入新密码" class="ng-scope ng-pristine ng-valid" type="password" />
                <div class="formfield-hint">
                    <span ng-class="{ 'icon-dot-error': model.$hintTypes[property] === 'error', 'icon-dot-warning': model.$hintTypes[property] === 'warning' }" ng-bind="model.$hints[property]" class="ng-binding"></span>
                </div>
            </div>
            <div class="formfield ng-isolate-scope" ng-class="{ 'validate-error': model.$hintTypes[property] === 'error' }" form-field="" label="确认密码" model="changePwdData" property="confirmPwd">
                <label ng-bind="label" class="ng-binding">确认密码</label>
                <input name="re_password" ng-model="changePwdData.confirmPwd" placeholder="请再次输入密码" class="ng-scope ng-pristine ng-valid" type="password" />
                <div class="formfield-hint">
                    <span ng-class="{ 'icon-dot-error': model.$hintTypes[property] === 'error', 'icon-dot-warning': model.$hintTypes[property] === 'warning' }" ng-bind="model.$hints[property]" class="ng-binding"></span>
                </div>
            </div>
            <div class="form-group formfield ng-isolate-scope" ng-class="{ 'validate-error': model.$hintTypes[property] === 'error' }" form-field="">
                <label ng-bind="label" class="ng-binding"></label>
                <button type="submit" class="btn-primary btn-lg ng-scope" id="btn">确认</button>
                <div class="formfield-hint">
                    <span ng-class="{ 'icon-dot-error': model.$hintTypes[property] === 'error', 'icon-dot-warning': model.$hintTypes[property] === 'warning' }" ng-bind="model.$hints[property]" class="ng-binding"></span>
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>







@endsection
