@extends('/Home/layouts.person')

@section('body')

<!-- ngIf: pageTitleVisible -->
<h3 ng-if="pageTitleVisible" class="profile-paneltitle ng-scope"><span ng-bind="pageTitle" class="ng-binding">我的收藏</span> <span class="subtitle ng-binding" ng-bind-html="pageSubtitle | toTrusted"></span></h3>
<!-- end ngIf: pageTitleVisible -->
<div class="profile-panelcontent" ng-transclude="">
    <div class="loading ng-binding ng-isolate-scope ng-hide" loading="" content="正在载入商家信息..." ng-show="favorLoading">
        <!-- ngIf: type==='profile' -->
        <img ng-if="type==='profile'" src="{{asset('a/image/profile-loading.4984fa.gif')}}" alt="正在加载" class="ng-scope" />
        <!-- end ngIf: type==='profile' -->
        <!-- ngIf: type==='normal' -->正在载入商家信息...
    </div>
    <div class="favor-restaurants ng-scope" ng-show="!favorLoading">
        <h4 class="favor-title">当前区域共有<span ng-bind="inRegionFavors.length || 0" class="ng-binding">0</span>家可配送商家</h4>
        <div class="clearfix">
            <!-- ngRepeat: restaurant in inRegionFavors -->
            <!-- ngIf: !inRegionFavors.length -->
            <div class="nodata ng-isolate-scope" ng-if="!inRegionFavors.length" nodatatip="" content="暂无可配送商家">
                <p class="nodata-container ng-binding" ng-bind-html="content | toTrusted">暂无可配送商家</p>
            </div>
            <!-- end ngIf: !inRegionFavors.length -->
        </div>
    </div>
    <div class="favor-restaurants ng-scope" ng-show="!favorLoading">
        <h4 class="favor-title">当前区域不可配送的商家</h4>
        <div class="clearfix">
            <!-- ngRepeat: restaurant in outOfRegionFavors -->
            <!-- ngIf: !outOfRegionFavors.length -->
            <div class="nodata ng-isolate-scope" ng-if="!outOfRegionFavors.length" nodatatip="" content="暂无不可配送商家">
                <p class="nodata-container ng-binding" ng-bind-html="content | toTrusted">暂无不可配送商家</p>
            </div>
            <!-- end ngIf: !outOfRegionFavors.length -->
        </div>
    </div>
</div>
</div>
</div>
</div>

    @endsection
