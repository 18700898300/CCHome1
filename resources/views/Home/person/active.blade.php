<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <p>尊敬的{{$user['uname']}},感谢您注册我们的blog，请登录您的邮箱绑定 ，并在24小时内绑定您的登录账号, 你的验证码是{{session('codes')}}快去绑定吧!!!</p>
</body>
</html>