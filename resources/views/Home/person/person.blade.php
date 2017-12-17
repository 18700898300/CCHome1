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
    <h3 ng-if="pageTitleVisible" class="profile-paneltitle ng-scope"><span ng-bind="pageTitle" class="ng-binding">个人资料</span> <span class="subtitle ng-binding" ng-bind-html="pageSubtitle | toTrusted"></span></h3>
    <!-- end ngIf: pageTitleVisible -->
    <div class="profile-panelcontent" ng-transclude="">
        <div class="profileinfo ng-scope">
            <p class="profileinfo-item"><span class="profileinfo-label">头像</span> <span class="profileinfo-face"><img  alt="eb6d4037dca" src="{{asset('a/image/1.jpg')}}" /> <a class="profileinfo-facedit" href="{{asset('/home/avatar')}}">编辑头像</a></span></p>
            <p class="profileinfo-item"><span class="profileinfo-label">用户名</span> <span><span class="profileinfo-value ng-binding" ng-bind="user.username">{{$users->uname}}</span>
                    <!-- ngIf: user.is_auto_generated.username --><a ng-if="user.is_auto_generated.username" class="profileinfo-link ng-scope" dialog-trigger="username" href="#" id="editName">[修改]</a>
                    <!-- end ngIf: user.is_auto_generated.username --></span></p>
            <p class="profileinfo-item"><span class="profileinfo-label">手机号码</span>
                <!-- ngIf: user.is_mobile_valid --><span ng-if="user.is_mobile_valid" class="ng-scope"><span class="profileinfo-value ng-binding" ng-bind="user.mobile">{{$users->phone}}</span> <a class="profileinfo-link" href="{{asset('home/safe')}}">[修改]</a></span>
                <!-- end ngIf: user.is_mobile_valid -->
                <!-- ngIf: !user.is_mobile_valid --></p>
            <p class="profileinfo-item"><span class="profileinfo-label">我的邮箱</span>
                <!-- ngIf: user.is_email_valid -->
                <!-- ngIf: !user.is_email_valid --><span ng-if="!user.is_email_valid" class="ng-scope"><span class="profileinfo-value unbind">未绑定</span> <a class="profileinfo-link unbind" href="https://www.ele.me/profile/security">[立即绑定]</a></span>
                <!-- end ngIf: !user.is_email_valid --></p>



        </div>
    </div>
    </div>
    </div>
    </div>




    <script>

     $('#editName').on('click',function(){
//         alert(111);
         layer.open({
             type: 1,
             title: false,
             closeBtn:0,
             shadeClose: true,
             skin: 'yourclass',
             content: '<div class="dialog" role="dialog" dialog="username" style=""><div class="dialog-close icon-close" onclick="qx();"></div><div class="dialog-content" ><form action="{{url('home/person/edit')}}" method="post"  class="modifyname ng-scope ng-pristine ng-valid">{{csrf_field()}}<tr><h3 class="modifyname-title">修改用户名 <small>用户名只能修改一次</small></h3> <div class="formfield ng-isolate-scope" ><label ng-bind="label" class="ng-binding"></label><input type="hidden" name="uid" value="{{$users->uid}}"><input  placeholder="请输入新的用户名（5-24字符）" value="{{$users->uname}}" name="uname" class="ng-scope ng-pristine ng-valid" /><div class="formfield-hint"><span class="ng-binding"></span></div></div></tr><button class="btn-primary btn-lg" style="width:140px;margin:5px;">确定</button><a onclick="qx()" class="modifyname-cancel" href="javascript:void(0);" dialog-closer="username">取消</a></form></div></div>'
         });
     });

     function qx() {
//        alert(111);
         layer.closeAll();
     }



    </script>

@endsection
