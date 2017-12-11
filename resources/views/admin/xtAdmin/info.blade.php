<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{asset('/wf/admin/style/css/ch-ui.admin.css')}}">
	<link rel="stylesheet" href="{{asset('/wf/admin/style/font/css/font-awesome.min.css')}}">
    <script type="text/javascript" src="{{asset('wf/admin/style/js/jquery.js')}}"></script>
</head>
<body>

    <div class="result_wrap">
        <div class="result_title">
            <h3>系统基本信息</h3>
        </div>
        <div class="result_content">
            <div class="alert alert-danger">
                <ul>
                    @if(session('msg'))
                        <li class="dh" style="color:red">{{session('msg')}}</li>
                    @endif
                </ul>

            </div>
            <ul>
                <li>
                    <label>操作系统</label><span>WINNT</span>
                </li>
                <li>
                    <label>运行环境</label><span>{{$_SERVER['SERVER_SOFTWARE']}}</span>
                </li>
                <li>
                    <label>PHP运行方式</label><span>apache2handler</span>
                </li>

                <li>
                    <label>上传附件限制</label><span><?php echo get_cfg_var("upload_max_filesize")?get_cfg_var("upload_max_filesize"):"不允许上传";?></span>
                </li>
                <li>
                    <label>北京时间</label><span>{{date('Y-m-d H:i:s')}}</span>
                </li>
                <li>
                    <label>服务器域名/IP</label><span>{{$_SERVER['SERVER_NAME']}} [{{$_SERVER['SERVER_ADDR']}}  ]</span>
                </li>
                <li>
                    <label>Host</label><span>{{$_SERVER['SERVER_ADDR']}}</span>
                </li>
            </ul>
        </div>
    </div>


    <div class="result_wrap">
        <div class="result_title">
            <h3>使用帮助</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    <label>官方交流网站：</label><span><a href="#">http://bbs.itxdl.cn</a></span>
                </li>
                <li>
                    <label>官方交流QQ群：</label><span><a href="#"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png"></a></span>
                </li>
            </ul>
        </div>
    </div>
	<!--结果集列表组件 结束-->
    <script>
        //    提示信息淡出
        $('.dh').fadeOut(3000);
    </script>

</body>
</html>