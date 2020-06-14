<head>
<?php session_start();?>
      <body background="./assets/img/bg.jpg" class="mdui-theme-primary-indigo mdui-theme-accent-pink">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>表白墙 - Powered by Anonymous</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/mdui/0.4.2/css/mdui.min.css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/mdui/0.4.2/js/mdui.min.js"></script>
 <div class="mdui-tab mdui-tab-full-width mdui-tab-centered">
        <!--首页-->
        <?php 
            echo("<a href=\"./index.php\" class=\"mdui-ripple\">首页</a>");  
       # 登出
        if(!empty($_SESSION['password'])){
            echo("<a href=\"./logout.php\" class=\"mdui-ripple\">登出</a>");
        }
        else{
       }
        # 登陆
        if(!empty($_SESSION['password'])){
            echo("<a href=\"./admin\" class=\"mdui-ripple\">管理</a>");
        }
      else{
            echo("<a href=\"./login.php\" class=\"mdui-ripple\">登录</a>");  
       }
        echo("<a href=\"./find.php\" class=\"mdui-ripple\">查询Beta</a>");  
        echo("<a href=\"http://xsot.tk\" class=\"mdui-ripple\">网址缩短</a>");
        echo("<a href=\"http://blog.xsot.cn/archives/pro-bbq.html\" class=\"mdui-ripple\">关于</a>");
        $password=$_SESSION['password'];
        ?>
</div>
<center><h1>Mysterious Confession Wall</h1></center>
</head>
</body>