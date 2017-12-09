@extends('/Home/layouts.person')

@section('body')

<!-- ngIf: pageTitleVisible -->
<h3 ng-if="pageTitleVisible" class="profile-paneltitle ng-scope"><span ng-bind="pageTitle" class="ng-binding">地址管理</span> <span class="subtitle ng-binding" ng-bind-html="pageSubtitle | toTrusted"></span></h3>
<!-- end ngIf: pageTitleVisible -->
<div class="profile-panelcontent" ng-transclude="">
    <div class="loading ng-binding ng-isolate-scope ng-hide" loading="" content="正在载入地址..." ng-show="addressLoading">
        <!-- ngIf: type==='profile' -->
        <img ng-if="type==='profile'" src="{{asset('a/image/profile-loading.4984fa.gif')}}" alt="正在加载" class="ng-scope" />
        <!-- end ngIf: type==='profile' -->
        <!-- ngIf: type==='normal' -->正在载入地址...
    </div>
    <div class="desktop-addresslist clearfix ng-scope" ng-hide="addressLoading">
        <!-- ngRepeat: address in userAddresses -->
        <button id="btn" class="desktop-addressblock desktop-addressblock-addblock" ng-click="addAddress()"><i class="icon-plus" ><b></b></i>添加新地址</button>
    </div>
</div>
</div>
</div>
</div>

    <script type="text/javascript">
        $("#btn").on('click',function(){
//            alert(1111);
            layer.open({
                type: 1,
                title: false,
                closeBtn:0,
                shadeClose: true,
                skin: 'yourclass',
                content: '<form action="{{url('home/person/add')}}" method="post"  class="modifyname ng-scope ng-pristine ng-valid">{{csrf_field()}}<div class="addressdialog-close"></div> <h3 class="modifyname-title">添加新地址 </h3> <div class="addressdialog-content"> <div class="addressform"> <div> <div class="addressformfield"> <label>姓名</label> <input placeholder="请输入您的姓名" /> <div class="addressformfield-hint"> <span></span> </div> </div> <div class="addressformfield sexfield"> <label>性别</label> <div> <input id="sexfield-1-male" name="sex" value="1" type="radio" /> <label for="sexfield-1-male">先生</label> <input id="sexfield-1-female" name="sex" value="2" type="radio" /> <label for="sexfield-1-female">女士</label> </div> <div class="addressformfield-hint"> <span></span> </div> </div> <div class="addressformfield"> <label>详细地址</label> <input placeholder="单元、门牌号" /> <div class="addressformfield-hint"> <span></span> </div> </div> <div class="addressformfield phonefield"> <label>手机号</label> <input placeholder="请输入您的手机号" /> </div></div> </div> </div> <div class="addressform-buttons"><button>保存</button><button onclick="qx()">取消</button> </div> </div></form>'
            });



        });

        function qx() {
//        alert(111);
            layer.closeAll();
        }

    </script>

    @endsection