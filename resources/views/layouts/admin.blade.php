<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    @yield('title')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="{{asset('/admin/assets')}}/style/css/ch-ui.admin.css">
    <link rel="stylesheet" href="{{asset('/admin/assets')}}/style/font/css/font-awesome.min.css">
    <script type="text/javascript" src="{{asset('admin/assets')}}/style/js/jquery.js"></script>
    <script type="text/javascript" src="{{asset('admin/assets/style/js/ch-ui.admin.js')}}"></script>
    <script type="text/javascript" src="{{asset('layer/layer.js')}}"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.3&ak=pPGRydBmCrtAwDteGOey3EgsZFGKXqBj"></script>
</head>
<body style="background:#F3F3F4;">
    @section('body')
        @show
</body>
</html>