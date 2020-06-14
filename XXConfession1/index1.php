<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>My Lonely Life</title>
	
	<style type="text/css">
		@font-face {
			font-family: digit;
			src: url('digital-7_mono.ttf') format("truetype");
		}
	</style>
	<link href="./jscss/default.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="./jscss/jquery.js"></script>
	<script type="text/javascript" src="./jscss/garden.js"></script>
</head>

<body>
	<div id="mainDiv">
		<div id="content" style="width: 1160px; height: 625px; margin-top: 52px; margin-left: 220px;">
			<div id="code" style="margin-top: 62.5px;">
			
				Boy * i = <span class="keyword">new</span> Boy(<span class="string">"<?php echo $_GET["me"]; ?>"</span>);<br>
				<span class="comments">// It's me. </span><br>
				Girl * u ;<br>
				<span class="keyword">while</span> (true) {<br>
				<span class="placeholder"><span class="keyword">try</span> {<br>
				<span class="placeholder"><span class="placeholder">u = <span class="keyword">new</span> Girl(); <br>
					<span class="placeholder">}<br>
				<span class="placeholder"><span class="keyword">catch</span> (std::bad_alloc) {<br>
					<span class="placeholder"><span class="placeholder"><span class="keyword">continue</span>; <br>
						<span class="placeholder">	}<br>
				<span class="placeholder">if (u != <span class="string">NULL</span>){ break; }</span><br> 
				<span class="placeholder"><span class="comments">// Usually you will be trapped in this loop<br></span>
				<span class="placeholder"><span class="comments">// for a *very* long time.<br></span>
				}<br>
					<span class="keyword">try</span>{<br>
					<span class="placeholder"><span class="keyword">while</span> (<span class="keyword">true</span>) {<br>
					<span class="placeholder"><span class="placeholder"><span class="keyword">switch</span>( u-&gt;statu() ){<br>
							<span class="placeholder"><span class="placeholder"><span class="keyword">case</span><span class="string">"hungry"</span>: i-&gt;feed(u);break; <br>
					<span class="placeholder"><span class="placeholder"><span class="keyword">case</span><span class="string">"tired"</span>: i-&gt;hug(u);break; <br>
					<span class="placeholder"><span class="placeholder"><span class="keyword">case</span><span class="string">"sleepy"</span>: i-&gt;sleep(u);break; <br>
					<span class="placeholder"><span class="placeholder"><span class="keyword">default</span>: i-&gt;say(u,<span class="string">"I Love U"</span>);break; <br>
					<span class="placeholder"><span class="placeholder">}<br>
					<span class="placeholder">}<br>
				}<br>
				<span class="keyword">catch</span>(Girl::DoNotLoveMe){ <br>
				<span class="comments">// Some day I will catch this message.<br></span>
				<span class="placeholder">i-&gt;believeInLove (<span class="keyword">false</span>); <br>
				<span class="placeholder"><span class="comments">// I will never believe in love anymore.<br></span>
				<span class="placeholder">sys.exit(-1); <span class="comments"><br>// Until reboot.</span><br>
				}<br>
			</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></div>
			<div id="loveHeart">
				<canvas id="garden" width="670" height="625"></canvas>
				<div id="words">
					<div id="messages">
						&nbsp;&nbsp;Girls, I have &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<br> waiting for you<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for
						<br>
						<div id="elapseClock">&nbsp;&nbsp;&nbsp;&nbsp;<span class="digit">333</span> days <span class="digit">17</span> hrs <span class="digit"><br>&nbsp;&nbsp;07</span> mins <span class="digit">33</span> secs</div>
					</div>
					
					<div id="loveu">
						Live alone forever and ever.<br>
                        TO <?php echo $_GET["you"]; ?>
						<div class="signature">- <?php echo $_GET["me"]; ?></div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<script type="text/javascript">
		var offsetX = $("#loveHeart").width() / 2;
		var offsetY = $("#loveHeart").height() / 2 - 55;
		var nolovetime = new Date();
		nolovetime.setFullYear(<?php echo $_GET["year"]; ?>, <?php echo $_GET["month"]; ?>, <?php echo $_GET["day"]; ?>);
		nolovetime.setHours(0);
		nolovetime.setMinutes(0);
		nolovetime.setSeconds(0);
		nolovetime.setMilliseconds(0);
		
		if (!document.createElement('canvas').getContext) {
			var msg = document.createElement("div");
			msg.id = "errorMsg";
			msg.innerHTML = "Your browser doesn't support HTML5!<br/>Recommend use Chrome 14+/IE 9+/Firefox 7+/Safari 4+"; 
			document.body.appendChild(msg);
			$("#code").css("display", "none")
			$("#copyright").css("position", "absolute");
			$("#copyright").css("bottom", "10px");
		    document.execCommand("stop");
		} else {
			setTimeout(function () {
				startHeartAnimation();
			}, 100);

			timeElapse(nolovetime);
			setInterval(function () {
				timeElapse(nolovetime);
			}, 500);

			adjustCodePosition();
			$("#code").typewriter();
		}
	</script>


</body></html>