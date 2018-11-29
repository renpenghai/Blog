<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>登录--OpenAuth.Net</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="format-detection" content="telephone=no">

  <link rel="stylesheet" href="{{asset('resources/css/login.css')}}" media="all" />
</head>
<body class="main" style="background-position: -280.8px 0px;">

<div id="mainBody">
  <div id="cloud1" class="cloud" style="background-position: 891.1px 100px;"></div>
  <div id="cloud2" class="cloud" style="background-position: 401px 460px;"></div>
</div>
<div class="loginbody">

  <span class="systemlogo"></span>

  <div class="loginbox" style="position: absolute; left: 294px;">
    <div style="width:165px; height:96px; position:absolute;top:8px;left:-70px">
      <div class="tou"></div>
      <div class="initial_left_hand" id="left_hand"></div>
      <div class="initial_right_hand" id="right_hand"></div>
    </div>
    <form class="layui-form">
      <ul>
        <li>
          <input name="username" type="text" class="loginuser" value="System"
                 placeholder="请输入用户名/手机号码" lay-verify="required">
        </li>
        <li>
          <input name="password" type="password" id="password" value="123456"
                 class="loginpwd ipt" placeholder="请输入密码" lay-verify="required">
        </li>
        <li>
          <input name="username" type="text" class="loginuser" value="System"
                 placeholder="请输入用户名/手机号码" lay-verify="required" width="200px">
          <button class="layui-btn loginbtn" lay-submit  lay-filter="login">登录</button>
        </li>
      </ul>
    </form>
  </div>

</div>

<div class="loginbm">版权所有 2018 </div>
</body>
</html>