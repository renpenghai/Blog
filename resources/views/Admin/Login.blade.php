
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

  <meta charset="utf-8">
  <title>Fullscreen Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- CSS -->
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
  <link rel="stylesheet" href="{{asset('resources/css/Login/reset.css')}}">
  <link rel="stylesheet" href="{{asset('resources/css/Login/supersized.css')}}">
  <link rel="stylesheet" href="{{asset('resources/css/Login/style.css')}}">

  <!-- Javascript -->
  <script src="{{asset('resources/js/Login/jquery-1.8.2.min.js')}}"></script>
  <script src="{{asset('resources/js/Login/supersized.3.2.7.min.js')}}"></script>
  <script src="{{asset('resources/js/Login/supersized-init.js')}}"></script>
  <script src="{{asset('resources/js/Login/scripts.js')}}"></script>

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>

<body>

<div class="page-container">
  <h1>博客后台管理</h1>
  <form action="" method="post">
    {{csrf_field()}}
    <input type="text" name="user_name" class="username" placeholder="账号">
    <input type="password" name="user_pass" class="password" placeholder="密码">
    <div style="white-space: nowrap;float:left;width: 305px;" >
      <div style="float: left">
        <input type="text" name="user_code" class="verification" placeholder="验证码">
      </div>
      <div class="imgverification">
        <img src="{{url('Code')}}" onclick="this.src='{{url('Code')}}?'+Math.random()">
      </div>
    </div>
    <button type="submit">登录</button>
    <div style="margin-top: 20px">{{session('msg')}}</div>
    <div class="error"><span>+</span></div>
  </form>
  <div class="connect">
  </div>
</div>
</body>
</html>

