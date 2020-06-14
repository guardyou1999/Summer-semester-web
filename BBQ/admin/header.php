<head>
    <?php 
session_start();
require_once('../config.php');
$password=$_SESSION['password'];
if($password!==$pass){
  header("Refresh:0;url=\"../index.php\"");
}
    ?>
      <body background="../assets/img/bg.jpg" class="mdui-theme-primary-indigo mdui-theme-accent-pink">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>表白墙 - Powered by XX</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/mdui/0.4.2/css/mdui.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/mdui/0.4.2/js/mdui.min.js"></script>
 <div class="mdui-tab mdui-tab-full-width mdui-tab-centered">
        <!--首页-->
        <?php 
            echo("<a href=\"./index.php?\" class=\"mdui-ripple\">首页</a>");
       next1:
       ?> 
       <?php 
            echo("<a href=\"../index.php\" class=\"mdui-ripple\">返回前台</a>");
       ?> 
       <!--信息管理-->
        <?php 
            echo("<a href=\"./control.php\" class=\"mdui-ripple\">信息管理</a>");
       ?> 
       <!--公告修改-->
        <?php 
            echo("<a href=\"./notice.php\" class=\"mdui-ripple\">公告修改</a>");
       ?> 
        <?php echo("<a href=\"http://blog.xsot.cn/archives/pro-bbq.html\" class=\"mdui-ripple\">关于</a>");?>
</div>
<center><h2>Mysterious Confession Wall</h2></center>
</head>
</body>