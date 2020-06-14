<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
  <meta charset="UTF-8">
  <title>爱你一万年</title>
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
    </style>
</head>

<body>

  <div class="container">  
 <form id="contact" action="qixi.php" method="get">
    <h3>爱你哟！</h3>
    <h4>请填写以下内容，把之后的页面发给爱的人!</h4>
	特效加载慢，多写点，让她/他多停留下!
    <fieldset>
      <input placeholder="她/他对你的昵称" name="me" type="text" tabindex="1" required>
    </fieldset>
    <fieldset>
      <input placeholder="你爱的人昵称" name="you" type="text" tabindex="2" required>
    </fieldset>
	<fieldset>
      <textarea placeholder="你想说的话限128字内" name="yi" tabindex="5" required></textarea>
    </fieldset>
	<fieldset>
      <input placeholder="终极表白语10字内" name="wu" type="text" tabindex="2" required>
    </fieldset>
	  <!-- <fieldset>
   <input placeholder="想说的第二句话限32字内" name="er" type="text" tabindex="2" required>
    </fieldset>
	<fieldset>
      <input placeholder="想说的第三句话限20字内" name="san" type="text" tabindex="2" required>
    </fieldset>
	<fieldset>
      <input placeholder="想说的第四句话限28字内" name="jcbgoods.com" type="text" tabindex="2" required>
    </fieldset>	
	<fieldset>
      <input placeholder="表白语" name="jcbgoods" type="text" tabindex="2" required>
    </fieldset>	
    <fieldset>
      <input placeholder="年：如2014" name="year" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="月：如7" name="yue" type="text" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="日：如20" name="ri" type="text" tabindex="4" required>
    </fieldset>-->
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">提交</button>
    </fieldset>
  </form>
  <a href=""><img style="width:100%" src="" alt="" border="0" longdesc=""></a><br>
  <img style="width:100%" src="" alt="分享">
<script type="text/javascript" src=""></script>
</div>
 
<script>
        var imgUrl = "";
        var lineLink = "";
        var descContent = '';
        var shareTitle = '！';
        var appid = '';
         
        function shareFriend() {
            WeixinJSBridge.invoke('sendAppMessage',{
                "appid": appid,
                "img_url": imgUrl,
                "img_width": "200",
                "img_height": "200",
                "link": lineLink,
                "desc": descContent,
                "title": shareTitle
            }, function(res) {
                //_report('send_msg', res.err_msg);
            })
        }
        function shareTimeline() {
            WeixinJSBridge.invoke('shareTimeline',{
                "img_url": imgUrl,
                "img_width": "200",
                "img_height": "200",
                "link": lineLink,
                "desc": descContent,
                "title": shareTitle
            }, function(res) {
                   //_report('timeline', res.err_msg);
            });
        }
        function shareWeibo() {
            WeixinJSBridge.invoke('shareWeibo',{
                "content": descContent,
                "url": lineLink,
            }, function(res) {
                //_report('weibo', res.err_msg);
            });
        }
        // 当微信内置浏览器完成内部初始化后会触发WeixinJSBridgeReady事件。
        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
            // 发送给好友
            WeixinJSBridge.on('menu:share:appmessage', function(argv){
                shareFriend();
            });
            // 分享到朋友圈
            WeixinJSBridge.on('menu:share:timeline', function(argv){
                shareTimeline();
            });
            // 分享到微博
            WeixinJSBridge.on('menu:share:weibo', function(argv){
                shareWeibo();
            });
        }, false);
</script>
</body>
</html>