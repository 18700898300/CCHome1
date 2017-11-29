@extends('admin/public/header');

@section('body')
    <!-- 内容区域 -->
    <div class="tpl-content-wrapper">

        <div class="container-fluid am-cf">
            <div class="row">
                <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                    <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span> 表单 <small>Amaze UI</small></div>
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

                        <div class="widget-body am-fr">

                            <form action="{{ url('/admin/shop_type/store') }}" method="post" class="am-form tpl-form-border-form tpl-form-border-br">
                                {{csrf_field()}}
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @if(is_object($errors))
                                                @foreach ($errors->all() as $error)
                                                    <li style="color:red">{{ $error }}</li>
                                                @endforeach
                                            @else
                                                <li style="color:red">{{ $errors }}</li>
                                            @endif
                                        </ul>
                                    </div>
                                @endif
                                @if(session('msg'))
                                <div class="alert alert-danger">
                                    <ul>
                                        <li style="color:red">{{session('msg')}}</li>
                                    </ul>
                                </div>
                                @endif
                                <div class="am-form-group">
                                    <label for="user-phone" class="am-u-sm-3 am-form-label"> 已有分类 <span class="tpl-form-line-small-title"></span></label>
                                    <div class="am-u-sm-9">
                                        <select name="pid" data-am-selected="{searchBox: 1}" style="display: none;">
                                            <option value="0">全部分类</option>

                                        <?php
                                            foreach($cates as $k=>$v){
                                                $n = substr_count($v->path,',')-1;
                                                echo "<option ";
                                                $_GET['tid'] = empty($_GET['tid']) ? '':$_GET['tid'];
                                                if ($v->tid==$_GET['tid']){echo ' selected ';};
                                                echo " value='{$v->tid}'>".str_repeat('&nbsp;',$n*4)."|--{$v->tname}</option>";
                                            }
                                        ?>
                                        </select>

                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">添加分类</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" class="tpl-form-input" id="user-name" name="tname" placeholder="请输入分类名称">

                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection

