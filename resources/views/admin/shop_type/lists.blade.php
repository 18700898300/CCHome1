@extends('admin/public/header');

@section('body')
    <!-- 内容区域 -->
    <div class="tpl-content-wrapper">

        <div class="container-fluid am-cf">
            <div class="row">
                <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                    <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span> 表格 <small>Amaze UI</small></div>
                    <p class="page-header-description">Amaze UI 有许多不同的表格可用。</p>
                </div>
                <div class="am-u-lg-3 tpl-index-settings-button">
                    <button type="button" class="page-header-button"><span class="am-icon-paint-brush"></span> 设置</button>
                </div>
            </div>

        </div>

        <div class="row-content am-cf">


            <div class="row">

                <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                    <div class="widget am-cf">
                        <div class="widget-head am-cf">
                            <div class="widget-title am-fl">斑马线</div>
                            <div class="widget-function am-fr">
                                <a href="javascript:;" class="am-icon-cog"></a>
                            </div>
                        </div>
                        <div class="widget-body  widget-body-lg am-fr">

                            <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                <thead>
                                <tr>
                                    <th>类别ID</th>
                                    <th>类别名称</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cates as $k=>$v)
                                <tr class="gradeX">
                                    <td>{{$v->tid}}</td>
                                    <td>
                                        {{$v->tname}}
                                    </td>
                                    <td>
                                        <div class="tpl-table-black-operation">
                                            <a href="{{url('/admin/shop_type/add')}}?tid={{$v->tid}}">
                                                <i class="am-icon-pencil"></i> 添加子分类
                                            </a>
                                            <a href="{{url('/admin/shop_type/edit')}}/{{$v->tid}}">
                                                <i class="am-icon-pencil"></i> 编辑
                                            </a>
                                            <a href="{{url('/admin/shop_type/del')}}/{{$v->tid}}" class="tpl-table-black-operation-del">
                                                <i class="am-icon-trash"></i> 删除
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                <!-- more data -->
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>




            </div>

        </div>
    </div>
</div>
</div>
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/amazeui.datatables.min.js"></script>
<script src="assets/js/dataTables.responsive.min.js"></script>
<script src="assets/js/app.js"></script>

</body>

</html>