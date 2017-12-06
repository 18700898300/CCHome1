<!DOCTYPE html>
<html class="" lang="zh">
<head>
    <style type="text/css">
        /* Code tidied up by ScrapBook */
    </style>
    <style type="text/css">
        /* Code tidied up by ScrapBook */
        @keyframes amap-indrm-loader {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        @keyframes amap-indrm-loader {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        @keyframes amap-indrm-loader {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
    <style type="text/css">
        /* Code tidied up by ScrapBook */
    </style>
    <style type="text/css">
        /* Code tidied up by ScrapBook */
    </style>
    <style type="text/css">
        /* Code tidied up by ScrapBook */
    </style>
    <style type="text/css">
        /* Code tidied up by ScrapBook */
    </style>
    <style type="text/css">
        /* Code tidied up by ScrapBook */
    </style>
    <style type="text/css">
        /* Code tidied up by ScrapBook */
    </style>
    <style type="text/css">
        /* Code tidied up by ScrapBook */
        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak, .ng-hide:not(.ng-hide-animate) { display: none !important; }
    </style>
    <link rel="stylesheet" type="text/css" href="{{url('a/css/style1503546983737.css')}}" />
    <meta charset="UTF-8" />
    <title>饿了么-开店申请</title>
    <meta name="description" content="饿了么-开店申请" />
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="icon" href="favicon-32x32.png" type="image/x-icon" />
    <base href="" />
    <link href="{{url('a/css/app.73972d6.css')}}" rel="stylesheet" />
    <link href="{{url('a/css/app.0fd86d1.css')}}" rel="stylesheet" />
    <style type="text/css">
        /* Code tidied up by ScrapBook */
        .amap-container { cursor: url("openhand.cur"), default; }
    </style>
    <style type="text/css">
        /* Code tidied up by ScrapBook */
    </style>
</head>
<body ng-app="nevermore" class="ng-scope">
<!-- uiView: -->
<ui-view autoscroll="true" class="ng-scope" style="">
    <header class="row ng-scope ng-isolate-scope" show-user="false">
        <div>
            <!-- ngIf: showUser -->
            <!-- ngIf: !showUser -->
            <a ui-sref="home" class="title ng-scope" ng-if="!showUser" href="https://kaidian.ele.me/"> <span>饿了么商户中心</span> </a>
            <!-- end ngIf: !showUser -->
            <a class="notification-link" ng-click="openNotification()">点击查看《廉正告知书》</a>
            <!-- ngIf: showUser -->
            <!-- ngIf: !showUser -->
            <div class="pull-right tips ng-scope" ng-if="!showUser">
                <span>如开店过程遇到问题,请咨询 <a href="https://ecs-im.ele.me/?from=visitor-merchant&amp;ezone=open" target="_blank">在线客服</a></span>
            </div>
            <!-- end ngIf: !showUser -->
        </div>
    </header>
    <div class="steps ng-scope ng-isolate-scope" index="step" isrequireactivity="isRequireActivity">
        <ul>
            <!-- ngRepeat: step in steps -->
            <li ng-repeat="step in steps" ng-class="{active: step.index &lt;= index}" class="ng-binding ng-scope active">
                <!-- ngIf: $index --> <i class="index ng-binding">1</i> 门店信息 </li>
            <!-- end ngRepeat: step in steps -->
            <li ng-repeat="step in steps" ng-class="{active: step.index &lt;= index}" class="ng-binding ng-scope">
                <!-- ngIf: $index -->
                <div ng-if="$index" class="split-line ng-scope"></div>
                <!-- end ngIf: $index --> <i class="index ng-binding">2</i> 资质信息 </li>
            <!-- end ngRepeat: step in steps -->
            <li ng-repeat="step in steps" ng-class="{active: step.index &lt;= index}" class="ng-binding ng-scope">
                <!-- ngIf: $index -->
                <div ng-if="$index" class="split-line ng-scope"></div>
                <!-- end ngIf: $index --> <i class="index ng-binding">3</i> 合作方案 </li>
            <!-- end ngRepeat: step in steps -->
            <li ng-repeat="step in steps" ng-class="{active: step.index &lt;= index}" class="ng-binding ng-scope">
                <!-- ngIf: $index -->
                <div ng-if="$index" class="split-line ng-scope"></div>
                <!-- end ngIf: $index --> <i class="index ng-binding">4</i> 配送方案 </li>
            <!-- end ngRepeat: step in steps -->
            <li ng-repeat="step in steps" ng-class="{active: step.index &lt;= index}" class="ng-binding ng-scope">
                <!-- ngIf: $index -->
                <div ng-if="$index" class="split-line ng-scope"></div>
                <!-- end ngIf: $index --> <i class="index ng-binding">5</i> 结算信息 </li>
            <!-- end ngRepeat: step in steps -->
            <li ng-repeat="step in steps" ng-class="{active: step.index &lt;= index}" class="ng-binding ng-scope">
                <!-- ngIf: $index -->
                <div ng-if="$index" class="split-line ng-scope"></div>
                <!-- end ngIf: $index --> <i class="index ng-binding">6</i> 商品内容(选填) </li>
            <!-- end ngRepeat: step in steps -->
            <li ng-repeat="step in steps" ng-class="{active: step.index &lt;= index}" class="ng-binding ng-scope">
                <!-- ngIf: $index -->
                <div ng-if="$index" class="split-line ng-scope"></div>
                <!-- end ngIf: $index --> <i class="index ng-binding">7</i> 活动信息(选填) </li>
            <!-- end ngRepeat: step in steps -->
        </ul>
    </div>
    <!-- uiView: -->
    <div class="main-container ng-scope" ui-view="" autoscroll="true">
        <div class="store-info step-container ng-scope">
            <form name="storeForm" id="storeFormID" novalidate="" class="store-form form-horizontal ng-pristine ng-invalid ng-invalid-required ng-valid-maxlength ng-valid-pattern ng-invalid-require ng-valid-door-pic-input ng-valid-store-pic-input ng-submitted" style="">
                <div class="form-group">
                    <span id="mobile" class="ng-binding"> 门店绑定手机号：187-0089-8300 </span>
                </div>
                <div class="form-group flex">
                    <label for="store-name" class="control-label"> <b class="required">*</b> 门店名称 </label>
                    <div class="control-content">
                        <input name="storeName" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-maxlength" id="store-name" ng-model="form.store_name" maxlength="80" required="" type="text" />
                        <small class="red" style="display: block;" ng-show="storeForm.storeName.$invalid &amp;&amp; (storeForm.storeName.$dirty || storeForm.$submitted)"> 门店名称不能为空 </small>
                    </div>
                </div>
                <div class="form-group flex">
                    <label for="store-name" class="control-label"> <b class="required">*</b> 外卖电话 </label>
                    <div class="control-content">
                        <input name="extPhone" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern" id="ext-phone" ng-model="form.ext_phone" ng-pattern="/^\d+(-\d+)?$/" required="" type="text" />
                        <small class="red" ng-show="storeForm.extPhone.$error.required &amp;&amp; (storeForm.extPhone.$dirty || storeForm.$submitted)" style=""> 外卖电话不能为空 </small>
                        <small class="red ng-hide" ng-show="storeForm.extPhone.$error.pattern &amp;&amp; (storeForm.extPhone.$dirty || storeForm.$submitted)"> 外卖电话只能出现数字和- </small>
                    </div>
                </div>
                <div class="form-group flex">
                    <label for="contact-name" class="control-label"> <b class="required">*</b> 联系人姓名 </label>
                    <div class="control-content">
                        <input name="contactName" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-maxlength" id="contact-name" ng-model="form.contact_name" maxlength="80" required="" type="text" />
                        <small class="red" ng-show="storeForm.contactName.$invalid &amp;&amp; (storeForm.contactName.$dirty || storeForm.$submitted)" style=""> 联系人姓名不能为空 </small>
                    </div>
                </div>
                <div class="form-group flex">
                    <label class="control-label"> <b class="required">*</b> 门店分类 </label>
                    <div class="control-content">
                        <div id="categories">
                            <div>
                                <div class="need-validate nevSelect ng-isolate-scope ng-not-empty ng-invalid ng-invalid-require" name="categories" items="categories" require="true" placeholder="主营分类，必选" all-items="allClassifications" ng-model="form.store_classification_list" current-channel="currentChannel" selected-items="form.store_classification_list">
                                    <ul class="select-choices" ng-click="toggleContent()">
                                        <li class="tips ng-binding" ng-show="!selectedItems.length">主营分类，必选</li>
                                        <!-- ngRepeat: item in selectedItems track by $index -->
                                        <li class="icon"><i class="caret" ng-class="{'rotate': showContent}"></i></li>
                                    </ul>
                                    <div class="select-content ng-hide" ng-show="showContent">
                                        <div class="tab">
                                            <div ng-click="changeTab(1)" ng-class="{'active': tab === 1, 'disabled': currentChannel === 2}" class="active">
                                                餐饮店
                                            </div>
                                            <div ng-click="changeTab(2)" ng-class="{'active': tab === 2, 'disabled': currentChannel === 1}">
                                                新零售
                                            </div>
                                        </div>
                                        <div class="content">
                                            <!-- ngRepeat: item in currItems -->
                                            <div ng-repeat="item in currItems" class="clearfix item ng-scope">
                                                <div class="select-nav ng-binding">
                                                    异国料理
                                                </div>
                                                <div class="select-sub-content">
                                                    <!-- ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">披萨意面</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">日韩料理</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">西餐</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">东南亚菜</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                </div>
                                            </div>
                                            <!-- end ngRepeat: item in currItems -->
                                            <div ng-repeat="item in currItems" class="clearfix item ng-scope">
                                                <div class="select-nav ng-binding">
                                                    面包蛋糕
                                                </div>
                                                <div class="select-sub-content">
                                                    <!-- ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">蛋糕</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">面包</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                </div>
                                            </div>
                                            <!-- end ngRepeat: item in currItems -->
                                            <div ng-repeat="item in currItems" class="clearfix item ng-scope">
                                                <div class="select-nav ng-binding">
                                                    小吃夜宵
                                                </div>
                                                <div class="select-sub-content">
                                                    <!-- ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">烧烤</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">炸鸡炸串</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">鸭脖卤味</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">小龙虾</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">地方小吃</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">零食</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                </div>
                                            </div>
                                            <!-- end ngRepeat: item in currItems -->
                                            <div ng-repeat="item in currItems" class="clearfix item ng-scope">
                                                <div class="select-nav ng-binding">
                                                    特色菜系
                                                </div>
                                                <div class="select-sub-content">
                                                    <!-- ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">川湘菜</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">粤菜</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">东北菜</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">云南菜</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">江浙菜</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">西北菜</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">鲁菜</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">新疆菜</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">火锅烤鱼</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">海鲜</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">其他菜系</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                </div>
                                            </div>
                                            <!-- end ngRepeat: item in currItems -->
                                            <div ng-repeat="item in currItems" class="clearfix item ng-scope">
                                                <div class="select-nav ng-binding">
                                                    甜品饮品
                                                </div>
                                                <div class="select-sub-content">
                                                    <!-- ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">奶茶果汁</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">甜品</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">咖啡</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                </div>
                                            </div>
                                            <!-- end ngRepeat: item in currItems -->
                                            <div ng-repeat="item in currItems" class="clearfix item ng-scope">
                                                <div class="select-nav ng-binding">
                                                    快餐便当
                                                </div>
                                                <div class="select-sub-content">
                                                    <!-- ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">品牌快餐</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">盖浇饭</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">汉堡</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">米粉面馆</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">麻辣烫</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">包子粥店</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">生煎锅贴</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">饺子馄饨</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">香锅砂锅</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">简餐</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">烧腊饭</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">黄焖鸡米饭</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">咖喱饭</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">煲仔饭</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                </div>
                                            </div>
                                            <!-- end ngRepeat: item in currItems -->
                                        </div>
                                    </div>
                                </div>
                                <small class="red" ng-show="storeForm.categories.$invalid &amp;&amp; (storeForm.categories.$dirty || storeForm.$submitted)" style=""> 门店分类不能为空 </small>
                            </div>
                            <div>
                                <div class="need-validate nevSelect ng-isolate-scope ng-not-empty ng-valid ng-valid-require" name="categories2" items="data.categories" require="false" placeholder="次营分类，可选" all-items="allClassifications" current-channel="currentChannel" ng-model="form.store_classification_list2" selected-items="form.store_classification_list2">
                                    <ul class="select-choices" ng-click="toggleContent()">
                                        <li class="tips ng-binding" ng-show="!selectedItems.length">次营分类，可选</li>
                                        <!-- ngRepeat: item in selectedItems track by $index -->
                                        <li class="icon"><i class="caret" ng-class="{'rotate': showContent}"></i></li>
                                    </ul>
                                    <div class="select-content ng-hide" ng-show="showContent">
                                        <div class="tab">
                                            <div ng-click="changeTab(1)" ng-class="{'active': tab === 1, 'disabled': currentChannel === 2}" class="active">
                                                餐饮店
                                            </div>
                                            <div ng-click="changeTab(2)" ng-class="{'active': tab === 2, 'disabled': currentChannel === 1}">
                                                新零售
                                            </div>
                                        </div>
                                        <div class="content">
                                            <!-- ngRepeat: item in currItems -->
                                            <div ng-repeat="item in currItems" class="clearfix item ng-scope">
                                                <div class="select-nav ng-binding">
                                                    异国料理
                                                </div>
                                                <div class="select-sub-content">
                                                    <!-- ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">披萨意面</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">日韩料理</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">西餐</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">东南亚菜</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                </div>
                                            </div>
                                            <!-- end ngRepeat: item in currItems -->
                                            <div ng-repeat="item in currItems" class="clearfix item ng-scope">
                                                <div class="select-nav ng-binding">
                                                    面包蛋糕
                                                </div>
                                                <div class="select-sub-content">
                                                    <!-- ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">蛋糕</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">面包</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                </div>
                                            </div>
                                            <!-- end ngRepeat: item in currItems -->
                                            <div ng-repeat="item in currItems" class="clearfix item ng-scope">
                                                <div class="select-nav ng-binding">
                                                    小吃夜宵
                                                </div>
                                                <div class="select-sub-content">
                                                    <!-- ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">烧烤</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">炸鸡炸串</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">鸭脖卤味</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">小龙虾</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">地方小吃</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">零食</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                </div>
                                            </div>
                                            <!-- end ngRepeat: item in currItems -->
                                            <div ng-repeat="item in currItems" class="clearfix item ng-scope">
                                                <div class="select-nav ng-binding">
                                                    特色菜系
                                                </div>
                                                <div class="select-sub-content">
                                                    <!-- ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">川湘菜</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">粤菜</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">东北菜</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">云南菜</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">江浙菜</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">西北菜</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">鲁菜</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">新疆菜</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">火锅烤鱼</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">海鲜</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">其他菜系</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                </div>
                                            </div>
                                            <!-- end ngRepeat: item in currItems -->
                                            <div ng-repeat="item in currItems" class="clearfix item ng-scope">
                                                <div class="select-nav ng-binding">
                                                    甜品饮品
                                                </div>
                                                <div class="select-sub-content">
                                                    <!-- ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">奶茶果汁</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">甜品</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">咖啡</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                </div>
                                            </div>
                                            <!-- end ngRepeat: item in currItems -->
                                            <div ng-repeat="item in currItems" class="clearfix item ng-scope">
                                                <div class="select-nav ng-binding">
                                                    快餐便当
                                                </div>
                                                <div class="select-sub-content">
                                                    <!-- ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">品牌快餐</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">盖浇饭</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">汉堡</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">米粉面馆</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">麻辣烫</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">包子粥店</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">生煎锅贴</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">饺子馄饨</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">香锅砂锅</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">简餐</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">烧腊饭</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">黄焖鸡米饭</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">咖喱饭</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                    <label ng-repeat="rstFlavors in item.rstFlavors track by $id(rstFlavors)" ng-class="{'active': selectedItems &amp;&amp; selectedItems[0].id === rstFlavors.id, 'disabled': checkDisabled(rstFlavors)}" class="ng-scope"> <input style="display: none;" ng-model="rstFlavors.checked" ng-change="onCheckChange(rstFlavors)" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> <span class="item-label ng-binding">煲仔饭</span> </label>
                                                    <!-- end ngRepeat: rstFlavors in item.rstFlavors track by $id(rstFlavors) -->
                                                </div>
                                            </div>
                                            <!-- end ngRepeat: item in currItems -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="line-height: 34px; color: rgb(170, 170, 170);">
                                注：仅可在一个店铺类型中选择门店分类
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group flex">
                    <label class="control-label"> <b class="required">*</b> 营业时间 </label>
                    <div class="control-content">
                        <div class="open-period-directive ng-isolate-scope" value="form.open_period" locked="uiNeedLock">
                            <div class="day-panel">
                                <label class="title">营业日期</label>
                                <!-- ngRepeat: day in days -->
                                <label ng-repeat="day in days" class="ng-binding ng-scope"> <input ng-model="day.selected" ng-click="select()" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> 周一 </label>
                                <!-- end ngRepeat: day in days -->
                                <label ng-repeat="day in days" class="ng-binding ng-scope"> <input ng-model="day.selected" ng-click="select()" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> 周二 </label>
                                <!-- end ngRepeat: day in days -->
                                <label ng-repeat="day in days" class="ng-binding ng-scope"> <input ng-model="day.selected" ng-click="select()" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> 周三 </label>
                                <!-- end ngRepeat: day in days -->
                                <label ng-repeat="day in days" class="ng-binding ng-scope"> <input ng-model="day.selected" ng-click="select()" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> 周四 </label>
                                <!-- end ngRepeat: day in days -->
                                <label ng-repeat="day in days" class="ng-binding ng-scope"> <input ng-model="day.selected" ng-click="select()" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> 周五 </label>
                                <!-- end ngRepeat: day in days -->
                                <label ng-repeat="day in days" class="ng-binding ng-scope"> <input ng-model="day.selected" ng-click="select()" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> 周六 </label>
                                <!-- end ngRepeat: day in days -->
                                <label ng-repeat="day in days" class="ng-binding ng-scope"> <input ng-model="day.selected" ng-click="select()" class="ng-pristine ng-untouched ng-valid ng-empty" type="checkbox" /> 周日 </label>
                                <!-- end ngRepeat: day in days -->
                            </div>
                            <div class="time-panel">
                                <!-- ngIf: -->
                                <label class="padding-left-0"> <input name="openTime" value="full" ng-model="openTime.type" ng-change="changeType()" ng-disabled="locked" class="ng-pristine ng-untouched ng-valid ng-not-empty" type="radio" /> 24小时 </label>
                                <label> <input name="openTime" value="part" ng-model="openTime.type" ng-change="changeType()" ng-disabled="locked" class="ng-pristine ng-untouched ng-valid ng-not-empty" type="radio" /> 自定义 </label>
                                <div class="part-content" ng-show="openTime.type === 'part'">
                                    <!-- ngRepeat: time in openTime.partTime -->
                                    <div class="other-time ng-scope" ng-repeat="time in openTime.partTime" id="other-time-0">
                                        <input class="form-control input-sm" placeholder="其他时段" ng-click="showSelector(time, $index)" ng-value="time._open.hour + ':' + time._open.minute + ' - ' + time._close.hour + ':' + time._close.minute" ng-keydown="cancelInput($event)" value="10:00 - 22:00" type="text" />
                                        <i class="icon-clock"></i>
                                        <div class="selector ng-hide" ng-show="time.selectorIsVisible">
                                            <div class="title">
                                                开始时间
                                            </div>
                                            <div class="title">
                                                结束时间
                                            </div>
                                            <div class="scroll-box">
                                                <ul>
                                                    <!-- ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding">00</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding">01</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding">02</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding">03</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding">04</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding">05</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding">06</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding">07</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding">08</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding">09</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding active">10</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding">11</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding">12</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding">13</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding">14</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding">15</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding">16</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding">17</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding">18</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding">19</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding">20</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding">21</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding disabled">22</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.hour === h,
              'disabled': time._close.hour &lt; h ||
              (time._close.minute &lt;= time._open.minute &amp;&amp; time._close.hour === h) }" ng-click="scrollToItem(0, h, time)" class="ng-binding disabled">23</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                </ul>
                                            </div>
                                            <div class="scroll-box">
                                                <ul>
                                                    <!-- ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding active">00</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">01</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">02</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">03</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">04</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">05</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">06</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">07</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">08</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">09</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">10</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">11</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">12</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">13</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">14</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">15</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">16</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">17</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">18</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">19</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">20</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">21</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">22</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">23</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">24</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">25</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">26</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">27</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">28</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">29</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">30</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">31</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">32</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">33</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">34</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">35</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">36</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">37</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">38</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">39</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">40</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">41</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">42</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">43</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">44</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">45</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">46</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">47</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">48</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">49</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">50</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">51</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">52</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">53</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">54</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">55</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">56</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">57</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">58</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._open.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._close.minute &lt;= m }" ng-click="scrollToItem(1, m, time)" class="ng-binding">59</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                </ul>
                                            </div>
                                            <div class="scroll-box">
                                                <ul>
                                                    <!-- ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding disabled">00</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding disabled">01</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding disabled">02</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding disabled">03</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding disabled">04</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding disabled">05</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding disabled">06</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding disabled">07</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding disabled">08</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding disabled">09</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding disabled">10</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding">11</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding">12</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding">13</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding">14</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding">15</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding">16</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding">17</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding">18</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding">19</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding">20</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding">21</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding active">22</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                    <li ng-repeat="h in hours" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.hour === h,
              'disabled': time._open.hour &gt; h ||
              (time._open.minute &gt;= time._close.minute &amp;&amp; time._open.hour === h) }" ng-click="scrollToItem(2, h, time)" class="ng-binding">23</a> </li>
                                                    <!-- end ngRepeat: h in hours -->
                                                </ul>
                                            </div>
                                            <div class="scroll-box">
                                                <ul>
                                                    <!-- ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding active">00</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">01</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">02</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">03</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">04</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">05</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">06</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">07</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">08</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">09</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">10</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">11</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">12</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">13</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">14</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">15</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">16</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">17</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">18</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">19</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">20</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">21</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">22</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">23</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">24</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">25</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">26</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">27</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">28</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">29</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">30</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">31</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">32</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">33</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">34</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">35</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">36</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">37</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">38</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">39</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">40</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">41</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">42</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">43</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">44</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">45</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">46</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">47</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">48</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">49</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">50</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">51</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">52</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">53</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">54</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">55</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">56</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">57</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">58</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                    <li ng-repeat="m in minutes" class="ng-scope"> <a href="https://kaidian.ele.me/" ng-class="{ 'active': time._close.minute === m,
              'disabled': time._open.hour === time._close.hour &amp;&amp;
              time._open.minute &gt;= m }" ng-click="scrollToItem(3, m, time)" class="ng-binding">59</a> </li>
                                                    <!-- end ngRepeat: m in minutes -->
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- ngIf: openTime.partTime.length > 1 -->
                                    </div>
                                    <!-- end ngRepeat: time in openTime.partTime -->
                                    <!-- ngIf: openTime.partTime.length < 3 -->
                                    <a class="add ng-scope" href="https://kaidian.ele.me/" ng-click="addItem()" ng-if="openTime.partTime.length &lt; 3">新增</a>
                                    <!-- end ngIf: openTime.partTime.length < 3 -->
                                </div>
                            </div>
                        </div>
                        <small class="red ng-hide" ng-show="methods.checkOpenTimeInvalid() &amp;&amp; storeForm.openTimeIsEmpty &amp;&amp; storeForm.$submitted"> 营业时间不能为空 </small>
                        <small class="red ng-hide" ng-show="methods.checkOpenTimeInvalid() &amp;&amp; storeForm.openTimeIsIncomplete &amp;&amp; storeForm.$submitted"> 自定义时间填写不完整 </small>
                        <small class="red ng-binding ng-hide" ng-show="methods.checkOpenTimeInvalid() &amp;&amp; storeForm.openTimeTooShort &amp;&amp; storeForm.$submitted"> 营业总时长不能少于小时，请重新填写 </small>
                        <small class="red ng-binding ng-hide" ng-show="methods.checkOpenTimeInvalid() &amp;&amp; storeForm.openPeakHourTooShort &amp;&amp; storeForm.$submitted"> 高峰时段总时长不能少于小时，请重新填写 </small>
                    </div>
                </div>
                <div class="form-group flex">
                    <label class="control-label"> <b class="required">*</b> 城市 </label>
                    <div class="control-content city-group">
        <span>
         <div class="city-select ui-select-container ui-select-bootstrap dropdown ng-empty ng-invalid ng-invalid-required" ng-class="{open: $select.open}" name="province" ng-model="form.pcd_region.province_id" ng-change="methods.provinceChange($select.selected)">
          <div class="ui-select-match ng-scope" ng-hide="$select.open &amp;&amp; $select.searchEnabled" ng-disabled="$select.disabled" ng-class="{'btn-default-focus':$select.focus}" placeholder="-省-">
           <span tabindex="-1" class="btn btn-default form-control ui-select-toggle" aria-label="Select box activate" ng-disabled="$select.disabled" ng-click="$select.activate()" style="outline: 0px none;"><span ng-show="$select.isEmpty()" class="ui-select-placeholder text-muted ng-binding">-省-</span> <span ng-hide="$select.isEmpty()" class="ui-select-match-text pull-left ng-hide" ng-class="{'ui-select-allow-clear': $select.allowClear &amp;&amp; !$select.isEmpty()}" ng-transclude=""><span class="ng-binding ng-scope"></span></span> <i class="caret pull-right" ng-click="$select.toggle($event)"></i> <a ng-show="$select.allowClear &amp;&amp; !$select.isEmpty() &amp;&amp; ($select.disabled !== true)" aria-label="Select box clear" style="margin-right: 10px;" ng-click="$select.clear($event)" class="btn btn-xs btn-link pull-right ng-hide"><i class="glyphicon glyphicon-remove" aria-hidden="true"></i></a></span>
          </div>
          <input autocomplete="off" tabindex="-1" aria-expanded="true" aria-label="Select box" aria-owns="ui-select-choices-0" aria-activedescendant="ui-select-choices-row-0-0" class="form-control ui-select-search ng-pristine ng-untouched ng-valid ng-empty ng-hide" placeholder="-省-" ng-model="$select.search" ng-show="$select.searchEnabled &amp;&amp; $select.open" type="search" />
          <ul class="ui-select-choices ui-select-choices-content ui-select-dropdown dropdown-menu ng-scope ng-hide" role="listbox" ng-show="$select.open &amp;&amp; $select.items.length &gt; 0" repeat="item.id as item in data.provinces | filter: { name: $select.search }">
           <li class="ui-select-choices-group" id="ui-select-choices-0">
            <div class="divider ng-hide" ng-show="$select.isGrouped &amp;&amp; $index &gt; 0"></div>
            <div ng-show="$select.isGrouped" class="ui-select-choices-group-label dropdown-header ng-binding ng-hide" ng-bind="$group.name"></div>
               <!-- ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items -->
               <!-- ngIf: $select.open -->
               <!-- end ngRepeat: item in $select.items --></li>
          </ul>
          <div class="ui-select-no-choice"></div>
          <ui-select-single></ui-select-single>
          <input ng-disabled="$select.disabled" class="ui-select-focusser ui-select-offscreen ng-scope" id="focusser-0" aria-label="Select box focus" aria-haspopup="true" role="button" type="text" />
         </div> <small class="red" ng-show="storeForm.province.$invalid &amp;&amp; (storeForm.province.$dirty || storeForm.$submitted)" style=""> 省份不能为空 </small> </span>
                        <span>
         <div class="city-select ui-select-container ui-select-bootstrap dropdown ng-empty ng-invalid ng-invalid-required" ng-class="{open: $select.open}" name="city" ng-model="form.pcd_region.city_id" ng-change="methods.cityChange($select.selected)">
          <div class="ui-select-match ng-scope" ng-hide="$select.open &amp;&amp; $select.searchEnabled" ng-disabled="$select.disabled" ng-class="{'btn-default-focus':$select.focus}" placeholder="-市-">
           <span tabindex="-1" class="btn btn-default form-control ui-select-toggle" aria-label="Select box activate" ng-disabled="$select.disabled" ng-click="$select.activate()" style="outline: 0px none;"><span ng-show="$select.isEmpty()" class="ui-select-placeholder text-muted ng-binding">-市-</span> <span ng-hide="$select.isEmpty()" class="ui-select-match-text pull-left ng-hide" ng-class="{'ui-select-allow-clear': $select.allowClear &amp;&amp; !$select.isEmpty()}" ng-transclude=""><span class="ng-binding ng-scope"></span></span> <i class="caret pull-right" ng-click="$select.toggle($event)"></i> <a ng-show="$select.allowClear &amp;&amp; !$select.isEmpty() &amp;&amp; ($select.disabled !== true)" aria-label="Select box clear" style="margin-right: 10px;" ng-click="$select.clear($event)" class="btn btn-xs btn-link pull-right ng-hide"><i class="glyphicon glyphicon-remove" aria-hidden="true"></i></a></span>
          </div>
          <input autocomplete="off" tabindex="-1" aria-expanded="true" aria-label="Select box" aria-owns="ui-select-choices-1" aria-activedescendant="ui-select-choices-row-1-0" class="form-control ui-select-search ng-pristine ng-untouched ng-valid ng-empty ng-hide" placeholder="-市-" ng-model="$select.search" ng-show="$select.searchEnabled &amp;&amp; $select.open" type="search" />
          <ul class="ui-select-choices ui-select-choices-content ui-select-dropdown dropdown-menu ng-scope ng-hide" role="listbox" ng-show="$select.open &amp;&amp; $select.items.length &gt; 0" repeat="item.id as item in data.cities | filter: { name: $select.search }">
           <li class="ui-select-choices-group" id="ui-select-choices-1">
            <div class="divider ng-hide" ng-show="$select.isGrouped &amp;&amp; $index &gt; 0"></div>
            <div ng-show="$select.isGrouped" class="ui-select-choices-group-label dropdown-header ng-binding ng-hide" ng-bind="$group.name"></div>
               <!-- ngRepeat: item in $select.items --></li>
          </ul>
          <div class="ui-select-no-choice"></div>
          <ui-select-single></ui-select-single>
          <input ng-disabled="$select.disabled" class="ui-select-focusser ui-select-offscreen ng-scope" id="focusser-1" aria-label="Select box focus" aria-haspopup="true" role="button" type="text" />
         </div> <small class="red" ng-show="storeForm.city.$invalid &amp;&amp; (storeForm.city.$dirty || storeForm.$submitted)" style=""> 城市不能为空 </small> </span>
                        <span>
         <div class="city-select ui-select-container ui-select-bootstrap dropdown ng-empty ng-invalid ng-invalid-required" ng-class="{open: $select.open}" name="district" ng-model="form.pcd_region.district_id" ng-change="methods.districtChange($select.selected)">
          <div class="ui-select-match ng-scope" ng-hide="$select.open &amp;&amp; $select.searchEnabled" ng-disabled="$select.disabled" ng-class="{'btn-default-focus':$select.focus}" placeholder="-区/县-">
           <span tabindex="-1" class="btn btn-default form-control ui-select-toggle" aria-label="Select box activate" ng-disabled="$select.disabled" ng-click="$select.activate()" style="outline: 0px none;"><span ng-show="$select.isEmpty()" class="ui-select-placeholder text-muted ng-binding">-区/县-</span> <span ng-hide="$select.isEmpty()" class="ui-select-match-text pull-left ng-hide" ng-class="{'ui-select-allow-clear': $select.allowClear &amp;&amp; !$select.isEmpty()}" ng-transclude=""><span class="ng-binding ng-scope"></span></span> <i class="caret pull-right" ng-click="$select.toggle($event)"></i> <a ng-show="$select.allowClear &amp;&amp; !$select.isEmpty() &amp;&amp; ($select.disabled !== true)" aria-label="Select box clear" style="margin-right: 10px;" ng-click="$select.clear($event)" class="btn btn-xs btn-link pull-right ng-hide"><i class="glyphicon glyphicon-remove" aria-hidden="true"></i></a></span>
          </div>
          <input autocomplete="off" tabindex="-1" aria-expanded="true" aria-label="Select box" aria-owns="ui-select-choices-2" aria-activedescendant="ui-select-choices-row-2-0" class="form-control ui-select-search ng-pristine ng-untouched ng-valid ng-empty ng-hide" placeholder="-区/县-" ng-model="$select.search" ng-show="$select.searchEnabled &amp;&amp; $select.open" type="search" />
          <ul class="ui-select-choices ui-select-choices-content ui-select-dropdown dropdown-menu ng-scope ng-hide" role="listbox" ng-show="$select.open &amp;&amp; $select.items.length &gt; 0" repeat="item.id as item in data.districts | filter: { name: $select.search }">
           <li class="ui-select-choices-group" id="ui-select-choices-2">
            <div class="divider ng-hide" ng-show="$select.isGrouped &amp;&amp; $index &gt; 0"></div>
            <div ng-show="$select.isGrouped" class="ui-select-choices-group-label dropdown-header ng-binding ng-hide" ng-bind="$group.name"></div>
               <!-- ngRepeat: item in $select.items --></li>
          </ul>
          <div class="ui-select-no-choice"></div>
          <ui-select-single></ui-select-single>
          <input ng-disabled="$select.disabled" class="ui-select-focusser ui-select-offscreen ng-scope" id="focusser-2" aria-label="Select box focus" aria-haspopup="true" role="button" type="text" />
         </div> <small class="red" ng-show="storeForm.district.$invalid &amp;&amp; (storeForm.district.$dirty || storeForm.$submitted)" style=""> 区/县不能为空 </small> </span>
                    </div>
                </div>
                <div class="form-group flex">
                    <label class="control-label"> <b class="required">*</b> 详细地址 </label>
                    <div class="form-inline">
                        <input name="address" class="form-control address-detail mr-10 ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-maxlength" ng-model="form.address_info.address" placeholder="详细至门牌号，请与执照地址一致" maxlength="255" required="" type="text" />
                        <button type="button" class="btn btn-primary loca-btn" ng-click="methods.searchPlace()"> 去定位 </button>
                        <br />
                        <small class="red" ng-show="storeForm.address.$invalid &amp;&amp; (storeForm.address.$dirty || storeForm.$submitted || storeForm.address._searched)" style=""> 详细地址不能为空 </small>
                    </div>
                </div>
                <div class="form-group flex">
                    <div class="control-label"></div>
                    <div class="control-content">
                        <div class="amap-position-pick flex ng-isolate-scope" points="data.searchResults" area="data.area" position="form.address_info">
                            <div id="search-results" ng-show="points" class="ng-hide">
                                <div class="count">
                                    请选择门店位置
                                </div>
                                <ul ng-show="points.length" class="ng-hide">
                                    <!-- ngRepeat: result in points -->
                                </ul>
                                <p class="empty" ng-show="!points.length"> 未搜索到您输入的地址，请重新输入地址或者直接在右侧地图中<span class="blue">标记位置</span>！ </p>
                            </div>
                            <div id="map-container" style="position: relative; background: rgb(252, 249, 242) none repeat scroll 0% 0%; cursor: url(&quot;openhand.cur&quot;), default;" class="amap-container">
                                <object style="display: block; position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; overflow: hidden; pointer-events: none; z-index: -1;" type="text/html" data="about:blank"></object>
                                <div class="amap-maps">
                                    <div class="amap-drags" style="">
                                        <div class="amap-layers" style="transform: translateZ(0px);">
                                            <div class="amap-markers" style="position: absolute; z-index: 120; top: 249px; left: 399px;"></div>
                                            <canvas class="amap-layer" width="798" height="498" style="position: absolute; z-index: 0; top: 0px; left: 0px; height: 498px; width: 798px;"></canvas>
                                            <script>(function (data) { var scripts = document.getElementsByTagName("script"); var script = scripts[scripts.length-1], canvas = script.previousSibling; var img = new Image(); img.onload = function(){ canvas.getContext("2d").drawImage(img, 0, 0); }; img.src = data; script.parentNode.removeChild(script); })("data:image/png;base64,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")</script>
                                            <canvas class="amap-labels" draggable="false" width="798" height="498" style="position: absolute; z-index: 99; height: 498px; width: 798px; top: 0px; left: 0px;"></canvas>
                                            <script>(function (data) { var scripts = document.getElementsByTagName("script"); var script = scripts[scripts.length-1], canvas = script.previousSibling; var img = new Image(); img.onload = function(){ canvas.getContext("2d").drawImage(img, 0, 0); }; img.src = data; script.parentNode.removeChild(script); })("data:image/png;base64,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")</script>
                                        </div>
                                        <div class="amap-overlays" style=""></div>
                                    </div>
                                </div>
                                <div style="display: none;"></div>
                                <div class="amap-controls">
                                    <div class="amap-toolbar" style="left: 20px; top: 60px; visibility: visible;">
                                        <div class="amap-pancontrol" style="position: relative; display: block;">
                                            <div class="amap-pan-left"></div>
                                            <div class="amap-pan-top"></div>
                                            <div class="amap-pan-right"></div>
                                            <div class="amap-pan-bottom"></div>
                                        </div>
                                        <div class="amap-locate" style="position: relative; left: 17px; display: block;"></div>
                                        <div class="amap-zoomcontrol" style="position: relative; left: 14px;">
                                            <div class="amap-zoom-plus"></div>
                                            <div class="amap-zoom-ruler" style="display: block;">
                                                <div class="amap-zoom-mask" style="height: 137px;"></div>
                                                <div class="amap-zoom-cursor" style="top: 137px;"></div>
                                                <div class="amap-zoom-labels">
                                                    <div class="amap-zoom-label-street"></div>
                                                    <div class="amap-zoom-label-city"></div>
                                                    <div class="amap-zoom-label-province"></div>
                                                    <div class="amap-zoom-label-country"></div>
                                                </div>
                                            </div>
                                            <div class="amap-zoom-minus amap-zoom-minus2"></div>
                                        </div>
                                    </div>
                                </div>
                                <a class="amap-logo" href="http://gaode.com/" target="_blank"><img src="autonavi.png" /></a>
                                <div class="amap-copyright" style="display: none;">
                                    <!--v1.3.28--> &copy; 2017 AutoNavi
                                    <span class="amap-mcode">- GS(2016)710号</span>
                                </div>
                            </div>
                        </div>
                        <small class="red" ng-show="!form.address_info.longitude &amp;&amp; storeForm.$submitted" style=""> 请点击[去定位]，并在地图上选择准确的地址 </small>
                    </div>
                </div>
                <div class="form-group flex">
                    <label class="control-label"> <b class="required">*</b> 门店照片 </label>
                    <div class="control-content">
                        <div class="picture-item ng-isolate-scope" name="门脸照" desc="一张真实美观的门脸照可以提升店铺形象" src="{{asset('a/image/ex-front.png')}}">
                            <div class="name ng-binding">
                                门脸照
                            </div>
                            <ng-transclude class="img-container">
                                <div class="img-flow ng-scope ng-isolate-scope ng-empty ng-invalid ng-invalid-required ng-valid-door-pic-input" name="doorPicInput" ng-model="form.door_pic" mobile="18700898300">
                                    <img ng-class="{ 'show': ngModel &amp;&amp; isUploadStatus !== 1 }" safe-img="" mobile="18700898300" safe-src="ngModel" class="ng-isolate-scope" src="_.htm" ng-src="" />
                                    <input accept="image/*" type="file" />
                                    <p class="tip" ng-hide="ngModel || isUploadStatus === 1"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAYCAYAAACbU/80AAAABGdBTUEAALGPC/xhBQAAArRJREFUSA29lj2IE0EUx929TQxaBCxsPPQQTg4CCfnAVomF1x1cdXCF4AeKFmLlIYJYCNqJWghHCgXxKsHCwsJgpRzmw8RGEfzgBMHCSiUmZuPvrXubvWRnd/aQG5h7b97H//9m581cjG0xR61WmyHlFPOoYRj7JH0wGHxGPGUul0qlt2LTHYZuICQTjUbjOvICOROKvD8UdbNQKCwh+4qYDWatAiA16/X6IzLnNmSrF4+LxeI8RdjqkH8eMypA/M1m8wpCl1xS5twc0UNH5BdotVqTvV7vPSipUKRxZyeRSEzncrkv466hJfIL9Pv9RcLjkgtDys0dsgVokQXYtn0kIE/LpJMbWQCNNKnFFhCkkzvWA5z5bs58AbyyAHADcuhWAL6OqQdGGwzpgyo9sUJPfPMnegUQZHDVLpJwGX2nP+h/6WD/APsaV/QG+kBwnQIwmjwyD5Cy87hDHhzVwxSIBfkKj9Ui0nZ6gJ1fjUsuycz5dDq9C/kykElhFC7hFLfRbrf3d7tdeb8TiniV+Rbv/nlxuhhvUHeoggPsvWQyOWPScKdxxiX/SENdWgfNZrMf0L31uj1CJoRbjmA2InDMzSc/STf/9DtorNvYX/htGvqsyXlMaQR6IZAsQ1b1DK6C3bYs6zjLzqhPtRZu+QJx7ngnlUotqQD5Ku8o5K7KH2C3pIDQfxb+JMDXMpnMd79tVGdXr0dtIes12f0z5oGQIM8F+DTX5yFScr5yC56Ik19Je03TPMTbv4elczPErjGqFruqEHgGUO9VDEskbgG/zCbTKQDyg5DfD8sb9cErL2HFpKHqgMZKHgXb5PqecEsPyDjLXHW0rfmzyqbPCZVTAGf5C73M3IovIRxll3N4BV3DMX7L3eE8T1DhYc5pCrmdhE0PMH6D8Qn5nF6p5PP5V36wvySB+WxWUYFgAAAAAElFTkSuQmCC" /><br /> 点击上传 </p>
                                    <p class="rechoose ng-hide" ng-show="ngModel &amp;&amp; isUploadStatus !== 1">重新上传</p>
                                    <div class="inprogress ng-hide" ng-show="isUploadStatus === 1">
                                        <div class="bar-container">
                                            <bar-progress class="bar-progress"></bar-progress>
                                        </div>
                                        <div class="margin-top-5">
                                            上传中...
                                        </div>
                                    </div>
                                </div>
                            </ng-transclude>
                            <div class="desc ng-binding">
                                一张真实美观的门脸照可以提升店铺形象
                            </div>
                            <div class="example">
                                <span>示例</span>
                                <div class="directive-image-preview ng-isolate-scope" src="{{asset('a/image/ex-front.png')}}">
                                    <img class="d-thumbnail" ng-src="{{asset('a/image/ex-front.png')}}" alt="thumbnail" src="{{asset('a/image/ex-front.png')}}" />
                                    <img class="d-preview" ng-src="{{asset('a/image/ex-front.png')}}" alt="preview" src="{{asset('a/image/ex-front.png')}}" />
                                </div>
                            </div>
                        </div>
                        <div class="mrt-1 picture-item ng-isolate-scope" name="店内照片" desc="简洁干净的店内照可以让用户放心点单" src="{{asset('a/image/ex-shop.png')}}">
                            <div class="name ng-binding">
                                店内照片
                            </div>
                            <ng-transclude class="img-container">
                                <div class="img-flow ng-scope ng-isolate-scope ng-empty ng-invalid ng-invalid-required ng-valid-store-pic-input" name="storePicInput" ng-model="form.store_pic" mobile="18700898300">
                                    <img ng-class="{ 'show': ngModel &amp;&amp; isUploadStatus !== 1 }" safe-img="" mobile="18700898300" safe-src="ngModel" class="ng-isolate-scope" src="_.htm" ng-src="" />
                                    <input accept="image/*" type="file" />
                                    <p class="tip" ng-hide="ngModel || isUploadStatus === 1"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAYCAYAAACbU/80AAAABGdBTUEAALGPC/xhBQAAArRJREFUSA29lj2IE0EUx929TQxaBCxsPPQQTg4CCfnAVomF1x1cdXCF4AeKFmLlIYJYCNqJWghHCgXxKsHCwsJgpRzmw8RGEfzgBMHCSiUmZuPvrXubvWRnd/aQG5h7b97H//9m581cjG0xR61WmyHlFPOoYRj7JH0wGHxGPGUul0qlt2LTHYZuICQTjUbjOvICOROKvD8UdbNQKCwh+4qYDWatAiA16/X6IzLnNmSrF4+LxeI8RdjqkH8eMypA/M1m8wpCl1xS5twc0UNH5BdotVqTvV7vPSipUKRxZyeRSEzncrkv466hJfIL9Pv9RcLjkgtDys0dsgVokQXYtn0kIE/LpJMbWQCNNKnFFhCkkzvWA5z5bs58AbyyAHADcuhWAL6OqQdGGwzpgyo9sUJPfPMnegUQZHDVLpJwGX2nP+h/6WD/APsaV/QG+kBwnQIwmjwyD5Cy87hDHhzVwxSIBfkKj9Ui0nZ6gJ1fjUsuycz5dDq9C/kykElhFC7hFLfRbrf3d7tdeb8TiniV+Rbv/nlxuhhvUHeoggPsvWQyOWPScKdxxiX/SENdWgfNZrMf0L31uj1CJoRbjmA2InDMzSc/STf/9DtorNvYX/htGvqsyXlMaQR6IZAsQ1b1DK6C3bYs6zjLzqhPtRZu+QJx7ngnlUotqQD5Ku8o5K7KH2C3pIDQfxb+JMDXMpnMd79tVGdXr0dtIes12f0z5oGQIM8F+DTX5yFScr5yC56Ik19Je03TPMTbv4elczPErjGqFruqEHgGUO9VDEskbgG/zCbTKQDyg5DfD8sb9cErL2HFpKHqgMZKHgXb5PqecEsPyDjLXHW0rfmzyqbPCZVTAGf5C73M3IovIRxll3N4BV3DMX7L3eE8T1DhYc5pCrmdhE0PMH6D8Qn5nF6p5PP5V36wvySB+WxWUYFgAAAAAElFTkSuQmCC" /><br /> 点击上传 </p>
                                    <p class="rechoose ng-hide" ng-show="ngModel &amp;&amp; isUploadStatus !== 1">重新上传</p>
                                    <div class="inprogress ng-hide" ng-show="isUploadStatus === 1">
                                        <div class="bar-container">
                                            <bar-progress class="bar-progress"></bar-progress>
                                        </div>
                                        <div class="margin-top-5">
                                            上传中...
                                        </div>
                                    </div>
                                </div>
                            </ng-transclude>
                            <div class="desc ng-binding">
                                简洁干净的店内照可以让用户放心点单
                            </div>
                            <div class="example">
                                <span>示例</span>
                                <div class="directive-image-preview ng-isolate-scope" src="{{asset('a/image/ex-shop.png')}}">
                                    <img class="d-thumbnail" ng-src="{{asset('a/image/ex-shop.png')}}" alt="thumbnail" src="{{asset('a/image/ex-shop.png')}}" />
                                    <img class="d-preview" ng-src="{{asset('a/image/ex-shop.png')}}" alt="preview" src="{{asset('a/image/ex-shop.png')}}" />
                                </div>
                            </div>
                        </div>
                        <small class="red" ng-show="(storeForm.doorPicInput.$invalid || storeForm.storePicInput.$invalid ) &amp;&amp; storeForm.$submitted" style=""> 门店照片不能为空 </small>
                    </div>
                </div>
                <div class="form-group flex">
                    <label class="control-label"> <b class="required">*</b> 门店Logo </label>
                    <div class="control-content">
                        <div class="logo-item flex">
                            <div class="logo-card flex">
                                <div class="logo-crop ng-isolate-scope ng-not-empty ng-valid" ng-model="logo" mobile="18700898300">
                                    <img safe-img="" mobile="18700898300" safe-src="ngModel.oldLogo" ng-show="ngModel.oldLogo.dataUri" class="ng-isolate-scope ng-hide" src="_.htm" />
                                    <input accept="image/*" type="file" />
                                    <p class="tip" ng-hide="ngModel.oldLogo.dataUri"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAYCAYAAACbU/80AAAABGdBTUEAALGPC/xhBQAAArRJREFUSA29lj2IE0EUx929TQxaBCxsPPQQTg4CCfnAVomF1x1cdXCF4AeKFmLlIYJYCNqJWghHCgXxKsHCwsJgpRzmw8RGEfzgBMHCSiUmZuPvrXubvWRnd/aQG5h7b97H//9m581cjG0xR61WmyHlFPOoYRj7JH0wGHxGPGUul0qlt2LTHYZuICQTjUbjOvICOROKvD8UdbNQKCwh+4qYDWatAiA16/X6IzLnNmSrF4+LxeI8RdjqkH8eMypA/M1m8wpCl1xS5twc0UNH5BdotVqTvV7vPSipUKRxZyeRSEzncrkv466hJfIL9Pv9RcLjkgtDys0dsgVokQXYtn0kIE/LpJMbWQCNNKnFFhCkkzvWA5z5bs58AbyyAHADcuhWAL6OqQdGGwzpgyo9sUJPfPMnegUQZHDVLpJwGX2nP+h/6WD/APsaV/QG+kBwnQIwmjwyD5Cy87hDHhzVwxSIBfkKj9Ui0nZ6gJ1fjUsuycz5dDq9C/kykElhFC7hFLfRbrf3d7tdeb8TiniV+Rbv/nlxuhhvUHeoggPsvWQyOWPScKdxxiX/SENdWgfNZrMf0L31uj1CJoRbjmA2InDMzSc/STf/9DtorNvYX/htGvqsyXlMaQR6IZAsQ1b1DK6C3bYs6zjLzqhPtRZu+QJx7ngnlUotqQD5Ku8o5K7KH2C3pIDQfxb+JMDXMpnMd79tVGdXr0dtIes12f0z5oGQIM8F+DTX5yFScr5yC56Ik19Je03TPMTbv4elczPErjGqFruqEHgGUO9VDEskbgG/zCbTKQDyg5DfD8sb9cErL2HFpKHqgMZKHgXb5PqecEsPyDjLXHW0rfmzyqbPCZVTAGf5C73M3IovIRxll3N4BV3DMX7L3eE8T1DhYc5pCrmdhE0PMH6D8Qn5nF6p5PP5V36wvySB+WxWUYFgAAAAAElFTkSuQmCC" /><br /> 选择Logo </p>
                                    <p class="rechoose ng-hide" ng-show="ngModel.oldLogo.dataUri">重新上传</p>
                                </div>
                                <div class="exam">
                                    <p class="name ng-binding" uib-tooltip="">门店名称</p>
                                    <p class="stars">
                                        <!-- ngRepeat: item in [1,2,3,4,5] --><img ng-repeat="item in [1,2,3,4,5]" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAARCAYAAADQWvz5AAAAAXNSR0IArs4c6QAAAWpJREFUOBGNUz0vREEUPfdlJYqtNEg0lKImyw8QhUSCv6ARu1p/gNqiWYVWhGITCfEDRKXSopGgI1EQ641z57195n2M9ya5yZ17zzlz594ZoGSZNo7VSmCQ/wBmHw384NpiBA1p4saHD3wJGw/RcvKbjp9zvRXxOmMweCSjFrN6rH+cVT3lVBjwV2Sw44got0ZhjRUuMUcYxAemCBqlDfPUESIX6M8WM2zPLph/IfaV9ow67sTs4p6EiUJS9eBDwMsdVsd7kNSwzWZVa4Qc0PqN9TBy4R4j69JCJ5ma2bN9OeHd6zl4UUDYWYNVilxqOhHSDcWWEeJU/dIVYEU2cNbHpYUMO9bGN5P+ZxExQzQxIMJj45UmdDBUQUSpASJsLJM9+Yt/q+rKYNMVAXMpHcEn9+fWIv8vnXmwWaHpBCnochSTnMqimvq0rpOfSXw62XfzTvAt41v8nFcukBPSD7zEyc5z7Nu0Nzf/C8ZHVEepikvmAAAAAElFTkSuQmCC" class="ng-scope" />
                                        <!-- end ngRepeat: item in [1,2,3,4,5] --><img ng-repeat="item in [1,2,3,4,5]" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAARCAYAAADQWvz5AAAAAXNSR0IArs4c6QAAAWpJREFUOBGNUz0vREEUPfdlJYqtNEg0lKImyw8QhUSCv6ARu1p/gNqiWYVWhGITCfEDRKXSopGgI1EQ641z57195n2M9ya5yZ17zzlz594ZoGSZNo7VSmCQ/wBmHw384NpiBA1p4saHD3wJGw/RcvKbjp9zvRXxOmMweCSjFrN6rH+cVT3lVBjwV2Sw44got0ZhjRUuMUcYxAemCBqlDfPUESIX6M8WM2zPLph/IfaV9ow67sTs4p6EiUJS9eBDwMsdVsd7kNSwzWZVa4Qc0PqN9TBy4R4j69JCJ5ma2bN9OeHd6zl4UUDYWYNVilxqOhHSDcWWEeJU/dIVYEU2cNbHpYUMO9bGN5P+ZxExQzQxIMJj45UmdDBUQUSpASJsLJM9+Yt/q+rKYNMVAXMpHcEn9+fWIv8vnXmwWaHpBCnochSTnMqimvq0rpOfSXw62XfzTvAt41v8nFcukBPSD7zEyc5z7Nu0Nzf/C8ZHVEepikvmAAAAAElFTkSuQmCC" class="ng-scope" />
                                        <!-- end ngRepeat: item in [1,2,3,4,5] --><img ng-repeat="item in [1,2,3,4,5]" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAARCAYAAADQWvz5AAAAAXNSR0IArs4c6QAAAWpJREFUOBGNUz0vREEUPfdlJYqtNEg0lKImyw8QhUSCv6ARu1p/gNqiWYVWhGITCfEDRKXSopGgI1EQ641z57195n2M9ya5yZ17zzlz594ZoGSZNo7VSmCQ/wBmHw384NpiBA1p4saHD3wJGw/RcvKbjp9zvRXxOmMweCSjFrN6rH+cVT3lVBjwV2Sw44got0ZhjRUuMUcYxAemCBqlDfPUESIX6M8WM2zPLph/IfaV9ow67sTs4p6EiUJS9eBDwMsdVsd7kNSwzWZVa4Qc0PqN9TBy4R4j69JCJ5ma2bN9OeHd6zl4UUDYWYNVilxqOhHSDcWWEeJU/dIVYEU2cNbHpYUMO9bGN5P+ZxExQzQxIMJj45UmdDBUQUSpASJsLJM9+Yt/q+rKYNMVAXMpHcEn9+fWIv8vnXmwWaHpBCnochSTnMqimvq0rpOfSXw62XfzTvAt41v8nFcukBPSD7zEyc5z7Nu0Nzf/C8ZHVEepikvmAAAAAElFTkSuQmCC" class="ng-scope" />
                                        <!-- end ngRepeat: item in [1,2,3,4,5] --><img ng-repeat="item in [1,2,3,4,5]" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAARCAYAAADQWvz5AAAAAXNSR0IArs4c6QAAAWpJREFUOBGNUz0vREEUPfdlJYqtNEg0lKImyw8QhUSCv6ARu1p/gNqiWYVWhGITCfEDRKXSopGgI1EQ641z57195n2M9ya5yZ17zzlz594ZoGSZNo7VSmCQ/wBmHw384NpiBA1p4saHD3wJGw/RcvKbjp9zvRXxOmMweCSjFrN6rH+cVT3lVBjwV2Sw44got0ZhjRUuMUcYxAemCBqlDfPUESIX6M8WM2zPLph/IfaV9ow67sTs4p6EiUJS9eBDwMsdVsd7kNSwzWZVa4Qc0PqN9TBy4R4j69JCJ5ma2bN9OeHd6zl4UUDYWYNVilxqOhHSDcWWEeJU/dIVYEU2cNbHpYUMO9bGN5P+ZxExQzQxIMJj45UmdDBUQUSpASJsLJM9+Yt/q+rKYNMVAXMpHcEn9+fWIv8vnXmwWaHpBCnochSTnMqimvq0rpOfSXw62XfzTvAt41v8nFcukBPSD7zEyc5z7Nu0Nzf/C8ZHVEepikvmAAAAAElFTkSuQmCC" class="ng-scope" />
                                        <!-- end ngRepeat: item in [1,2,3,4,5] --><img ng-repeat="item in [1,2,3,4,5]" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAARCAYAAADQWvz5AAAAAXNSR0IArs4c6QAAAWpJREFUOBGNUz0vREEUPfdlJYqtNEg0lKImyw8QhUSCv6ARu1p/gNqiWYVWhGITCfEDRKXSopGgI1EQ641z57195n2M9ya5yZ17zzlz594ZoGSZNo7VSmCQ/wBmHw384NpiBA1p4saHD3wJGw/RcvKbjp9zvRXxOmMweCSjFrN6rH+cVT3lVBjwV2Sw44got0ZhjRUuMUcYxAemCBqlDfPUESIX6M8WM2zPLph/IfaV9ow67sTs4p6EiUJS9eBDwMsdVsd7kNSwzWZVa4Qc0PqN9TBy4R4j69JCJ5ma2bN9OeHd6zl4UUDYWYNVilxqOhHSDcWWEeJU/dIVYEU2cNbHpYUMO9bGN5P+ZxExQzQxIMJj45UmdDBUQUSpASJsLJM9+Yt/q+rKYNMVAXMpHcEn9+fWIv8vnXmwWaHpBCnochSTnMqimvq0rpOfSXw62XfzTvAt41v8nFcukBPSD7zEyc5z7Nu0Nzf/C8ZHVEepikvmAAAAAElFTkSuQmCC" class="ng-scope" />
                                        <!-- end ngRepeat: item in [1,2,3,4,5] --> </p>
                                    <p class="sale">月售999单</p>
                                    <span>示例</span>
                                </div>
                            </div>
                            <p class="desc"> 上传与店铺气质吻合的Logo，能提高用户进店的概率<br /> 支持JPG/JPEG/PNG格式图片，文件大小不超过500K </p>
                        </div>
                        <small class="red" ng-show="!logo.newLogo.url &amp;&amp; storeForm.$submitted" style=""> 门店logo不能为空 </small>
                    </div>
                </div>
                <div class="out-link flex">
                    <div class="desc">
                        其他平台开店链接
                    </div>
                    <div class="input-container">
                        <input class="form-control ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength" ng-model="form.third_party_platform_url" maxlength="255" placeholder="选填，填写网址可快速开店" type="text" />
                    </div>
                </div>
            </form>
        </div>
        <div class="footer-btns ng-scope">
            <button class="btn btn-default btn-pre" ui-sref="guide({ id: id })" href="/guide">返回上一步</button>
            <button type="submit" form="storeFormID" class="btn btn-primary btn-next" ng-click="methods.submit()" ng-disabled="data.isSubmitting || !mobile"> 提交并进入下一步 </button>
        </div>
    </div>
</ui-view>
<script async="async" src="about:blank"></script>
<script type="text/javascript" src="about:blank"></script>
<script src="about:blank"></script>
<script type="text/javascript" src="about:blank"></script>
<script type="text/javascript" src="about:blank"></script>
</body>
</html>