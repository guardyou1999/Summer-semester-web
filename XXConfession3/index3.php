
<!-- saved from url=(0033)http://www.duocoo.com/love/0o4o0/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css"> 
<!--
.STYLE1 {font-size: medium}
-->
</style> 
</head>
<body bgcolor="url(./icon/bg_105_wrap2.jpg)" ><center><br><br><br><br> 
<title>我顶着大太阳，只想为你撑伞。——记录着第一次遇见的你！</title> 

<br>To find out the inside beauty of yourself<br> 
<style type="text/css"> 
/* Circle Text Styles */
#outerCircleText {
/* Optional - DO NOT SET FONT-SIZE HERE, SET IT IN THE SCRIPT */
font-style: italic;
font-weight: bold;
font-family: 'comic sans ms', verdana, arial;
color: #1400FF;
</style> 
<script type="text/javascript"> 
;(function(){
// Your message here (QUOTED STRING)
var msg = "我爱你直到永远";
// Set font's style size for calculating dimensions
// Set to number of desired pixels font size (decimal and negative numbers not allowed)
var size = 24;
// Set both to 1 for plain circle, set one of them to 2 for oval
// Other numbers & decimals can have interesting effects, keep these low (0 to 3)
var circleY = 0.75; var circleX = 2;
// The larger this divisor, the smaller the spaces between letters
// (decimals allowed, not negative numbers)
var letter_spacing = 5;
// The larger this multiplier, the bigger the circle/oval
// (decimals allowed, not negative numbers, some rounding is applied)
var diameter = 10;
// Rotation speed, set it negative if you want it to spin clockwise (decimals allowed)
var rotation = 0.4;
// This is not the rotation speed, its the reaction speed, keep low!
// Set this to 1 or a decimal less than one (decimals allowed, not negative numbers)
var speed = 0.3;
if (!window.addEventListener && !window.attachEvent || !document.createElement) return;
msg = msg.split('');
var n = msg.length - 1, a = Math.round(size * diameter * 0.208333), currStep = 20,
ymouse = a * circleY + 20, xmouse = a * circleX + 20, y = [], x = [], Y = [], X = [],
o = document.createElement('div'), oi = document.createElement('div'),
b = document.compatMode && document.compatMode != "BackCompat"? document.documentElement : document.body,
mouse = function(e){
 e = e || window.event;
 ymouse = !isNaN(e.pageY)? e.pageY : e.clientY; // y-position
 xmouse = !isNaN(e.pageX)? e.pageX : e.clientX; // x-position
},
makecircle = function(){ // rotation/positioning
 if(init.nopy){
  o.style.top = (b || document.body).scrollTop + 'px';
  o.style.left = (b || document.body).scrollLeft + 'px';
 };
 currStep -= rotation;
 for (var d, i = n; i > -1; --i){ // makes the circle
  d = document.getElementById('iemsg' + i).style;
  d.top = Math.round(y[i] + a * Math.sin((currStep + i) / letter_spacing) * circleY - 15) + 'px';
  d.left = Math.round(x[i] + a * Math.cos((currStep + i) / letter_spacing) * circleX) + 'px';
 };
},
drag = function(){ // makes the resistance
 y[0] = Y[0] += (ymouse - Y[0]) * speed;
 x[0] = X[0] += (xmouse - 20 - X[0]) * speed;
 for (var i = n; i > 0; --i){
  y[i] = Y[i] += (y[i-1] - Y[i]) * speed;
  x[i] = X[i] += (x[i-1] - X[i]) * speed;
 };
 makecircle();
},
init = function(){ // appends message divs, & sets initial values for positioning arrays
 if(!isNaN(window.pageYOffset)){
  ymouse += window.pageYOffset;
  xmouse += window.pageXOffset;
 } else init.nopy = true;
 for (var d, i = n; i > -1; --i){
  d = document.createElement('div'); d.id = 'iemsg' + i;
  d.style.height = d.style.width = a + 'px';
  d.appendChild(document.createTextNode(msg[i]));
  oi.appendChild(d); y[i] = x[i] = Y[i] = X[i] = 0;
 };
 o.appendChild(oi); document.body.appendChild(o);
 setInterval(drag, 25);
},
ascroll = function(){
 ymouse += window.pageYOffset;
 xmouse += window.pageXOffset;
 window.removeEventListener('scroll', ascroll, false);
};
o.id = 'outerCircleText'; o.style.fontSize = size + 'px';
if (window.addEventListener){
 window.addEventListener('load', init, false);
 document.addEventListener('mouseover', mouse, false);
 document.addEventListener('mousemove', mouse, false);
  if (/Apple/.test(navigator.vendor))
   window.addEventListener('scroll', ascroll, false);
}
else if (window.attachEvent){
 window.attachEvent('onload', init);
 document.attachEvent('onmousemove', mouse);
};
})();
</script> 
<script type="text/javascript"> 
<!-- Begin
/*
 * Notes on hue
 *
 * This script uses hue rotation in the following manner:
 * hue=0   is red (#FF0000)
 * hue=60  is yellow (#FFFF00)
 * hue=120 is green (#00FF00)
 * hue=180 is cyan (#00FFFF)
 * hue=240 is blue (#0000FF)
 * hue=300 is magenta (#FF00FF)
 * hue=360 is hue=0 (#FF0000)
 *
 * Notes on the script
 *
 * This script should function in any browser that supports document.getElementById
 * It has been tested in Netscape7, Mozilla Firefox 1.0, and Internet Explorer 6
 *
 * Accessibility
 *
 * The script does not write the string out, but rather takes it from an existing
 * HTML element. Therefore, users with javascript disabled will not be adverely affected.
 * They just won't get the pretty colors.
 */
 
/*
 * splits par.firstChild.data into 1 span for each letter
 * ARGUMENTS
 *   span - HTML element containing a text node as the only element
 */
function toSpans(span) {
  var str=span.firstChild.data;
  var a=str.length;
  span.removeChild(span.firstChild);
  for(var i=0; i<a; i++) {
    var theSpan=document.createElement("SPAN");
    theSpan.appendChild(document.createTextNode(str.charAt(i)));
    span.appendChild(theSpan);
  }
}
function RainbowSpan(span, hue, deg, brt, spd, hspd) {
    this.deg=(deg==null?360:Math.abs(deg));
    this.hue=(hue==null?0:Math.abs(hue)%360);
    this.hspd=(hspd==null?3:Math.abs(hspd)%360);
    this.length=span.firstChild.data.length;
    this.span=span;
    this.speed=(spd==null?50:Math.abs(spd));
    this.hInc=this.deg/this.length;
    this.brt=(brt==null?255:Math.abs(brt)%256);
    this.timer=null;
    toSpans(span);
    this.moveRainbow();
}
RainbowSpan.prototype.moveRainbow = function() {
  if(this.hue>359) this.hue-=360;
  var color;
  var b=this.brt;
  var a=this.length;
  var h=this.hue;
 
  for(var i=0; i<a; i++) {
 
    if(h>359) h-=360;
 
    if(h<60) { color=Math.floor(((h)/60)*b); red=b;grn=color;blu=0; }
    else if(h<120) { color=Math.floor(((h-60)/60)*b); red=b-color;grn=b;blu=0; }
    else if(h<180) { color=Math.floor(((h-120)/60)*b); red=0;grn=b;blu=color; }
    else if(h<240) { color=Math.floor(((h-180)/60)*b); red=0;grn=b-color;blu=b; }
    else if(h<300) { color=Math.floor(((h-240)/60)*b); red=color;grn=0;blu=b; }
    else { color=Math.floor(((h-300)/60)*b); red=b;grn=0;blu=b-color; }
 
    h+=this.hInc;
 
    this.span.childNodes[i].style.color="rgb("+red+", "+grn+", "+blu+")";
  }
  this.hue+=this.hspd;
}
// End -->
</script> 
 

 
<style> 
body {
 padding:0;
 margin:0;
 background-image:url(./icon/bg_105_wrap2.jpg);
 background-repeat: no-repeat;
 background-position:bottom;

color: #ffffff;
font: normal 80% Verdana;
margin-top: 0px;
margin-left: 0px;
padding: 0;
margin-right: 0px;
}
</style> 
<div align="center"> 
<h1 id="r1"><span style="color: rgb(0, 255, 25);">我</span><span style="color: rgb(0, 255, 143);">爱</span><span style="color: rgb(0, 250, 255);">你</span><span style="color: rgb(0, 132, 255);">，</span><span style="color: rgb(0, 14, 255);">这</span><span style="color: rgb(103, 0, 255);">是</span><span style="color: rgb(221, 0, 255);">个</span><span style="color: rgb(255, 0, 171);">不</span><span style="color: rgb(255, 0, 53);">能</span><span style="color: rgb(255, 64, 0);">说</span><span style="color: rgb(255, 182, 0);">的</span><span style="color: rgb(210, 255, 0);">秘</span><span style="color: rgb(93, 255, 0);">密</span></h1> 
</div> 
<script type="text/javascript"> 
var r1=document.getElementById("r1"); //get span to apply rainbow
var myRainbowSpan=new RainbowSpan(r1, 0, 360, 255, 50, 18); //apply static rainbow effect
myRainbowSpan.timer=window.setInterval("myRainbowSpan.moveRainbow()", myRainbowSpan.speed);
</script> 
<div align="center"> 
<p class="STYLE1" id="r2"><span style="color: rgb(255, 153, 0);">我</span><span style="color: rgb(255, 205, 0);">顶</span><span style="color: rgb(252, 255, 0);">着</span><span style="color: rgb(199, 255, 0);">大</span><span style="color: rgb(146, 255, 0);">太</span><span style="color: rgb(94, 255, 0);">阳</span><span style="color: rgb(41, 255, 0);">，</span><span style="color: rgb(0, 255, 12);">只</span><span style="color: rgb(0, 255, 65);">想</span><span style="color: rgb(0, 255, 117);">为</span><span style="color: rgb(0, 255, 170);">你</span><span style="color: rgb(0, 255, 223);">撑</span><span style="color: rgb(0, 234, 255);">伞</span><span style="color: rgb(0, 182, 255);">。</span><span style="color: rgb(0, 129, 255);">—</span><span style="color: rgb(0, 76, 255);">—</span><span style="color: rgb(0, 23, 255);">记</span><span style="color: rgb(29, 0, 255);">录</span><span style="color: rgb(82, 0, 255);">着</span><span style="color: rgb(135, 0, 255);">第</span><span style="color: rgb(188, 0, 255);">一</span><span style="color: rgb(240, 0, 255);">次</span><span style="color: rgb(255, 0, 217);">遇</span><span style="color: rgb(255, 0, 164);">见</span><span style="color: rgb(255, 0, 111);">的</span><span style="color: rgb(255, 0, 59);">你</span><span style="color: rgb(255, 0, 6);">！</span><span style="color: rgb(255, 47, 0);">
</span><span style="color: rgb(255, 100, 0);"> </span></p> 
</div> 
<script type="text/javascript"> 
var r2=document.getElementById("r2"); //get span to apply rainbow
var myRainbowSpan2=new RainbowSpan(r2, 0, 360, 255, 50, 348); //apply static rainbow effect
myRainbowSpan2.timer=window.setInterval("myRainbowSpan2.moveRainbow()", myRainbowSpan2.speed);
</script> 
 
   
 
 
<style type="text/css"> 
/* Circle Text Styles */
#outerCircleText {
/* Optional - DO NOT SET FONT-SIZE HERE, SET IT IN THE SCRIPT */
font-style: italic;
font-weight: bold;
font-family: 'comic sans ms', verdana, arial;
color: #ff0000;
/* End Optional */
/* Start Required - Do Not Edit */
position: absolute;top: 0;left: 0;z-index: 3000;cursor: default;}
#outerCircleText div {position: relative;}
#outerCircleText div div {position: absolute;top: 0;left: 0;text-align: center;}
/* End Required */
/* End Circle Text Styles */
</style> 
<script type="text/javascript"> 
;(function(){
// Your message here (QUOTED STRING)
var msg = "";
/* THE REST OF THE EDITABLE VALUES BELOW ARE ALL UNQUOTED NUMBERS */
// Set font's style size for calculating dimensions
// Set to number of desired pixels font size (decimal and negative numbers not allowed)
var size = 24;
// Set both to 1 for plain circle, set one of them to 2 for oval
// Other numbers & decimals can have interesting effects, keep these low (0 to 3)
var circleY = 0.75; var circleX = 2;
// The larger this divisor, the smaller the spaces between letters
// (decimals allowed, not negative numbers)
var letter_spacing = 5;
// The larger this multiplier, the bigger the circle/oval
// (decimals allowed, not negative numbers, some rounding is applied)
var diameter = 10;
// Rotation speed, set it negative if you want it to spin clockwise (decimals allowed)
var rotation = 0.4;
// This is not the rotation speed, its the reaction speed, keep low!
// Set this to 1 or a decimal less than one (decimals allowed, not negative numbers)
var speed = 0.3;
if (!window.addEventListener && !window.attachEvent || !document.createElement) return;
msg = msg.split(');
var n = msg.length - 1, a = Math.round(size * diameter * 0.208333), currStep = 20,
ymouse = a * circleY + 20, xmouse = a * circleX + 20, y = [], x = [], Y = [], X = [],
o = document.createElement('div'), oi = document.createElement('div'),
b = document.compatMode && document.compatMode != "BackCompat"? document.documentElement : document.body,
mouse = function(e){
 e = e || window.event;
 ymouse = !isNaN(e.pageY)? e.pageY : e.clientY; // y-position
 xmouse = !isNaN(e.pageX)? e.pageX : e.clientX; // x-position
},
makecircle = function(){ // rotation/positioning
 if(init.nopy){
  o.style.top = (b || document.body).scrollTop + 'px';
  o.style.left = (b || document.body).scrollLeft + 'px';
 };
 currStep -= rotation;
 for (var d, i = n; i > -1; --i){ // makes the circle
  d = document.getElementById('iemsg' + i).style;
  d.top = Math.round(y[i] + a * Math.sin((currStep + i) / letter_spacing) * circleY - 15) + 'px';
  d.left = Math.round(x[i] + a * Math.cos((currStep + i) / letter_spacing) * circleX) + 'px';
 };
},
drag = function(){ // makes the resistance
 y[0] = Y[0] += (ymouse - Y[0]) * speed;
 x[0] = X[0] += (xmouse - 20 - X[0]) * speed;
 for (var i = n; i > 0; --i){
  y[i] = Y[i] += (y[i-1] - Y[i]) * speed;
  x[i] = X[i] += (x[i-1] - X[i]) * speed;
 };
 makecircle();
},
init = function(){ // appends message divs, & sets initial values for positioning arrays
 if(!isNaN(window.pageYOffset)){
  ymouse += window.pageYOffset;
  xmouse += window.pageXOffset;
 } else init.nopy = true;
 for (var d, i = n; i > -1; --i){
  d = document.createElement('div'); d.id = 'iemsg' + i;
  d.style.height = d.style.width = a + 'px';
  d.appendChild(document.createTextNode(msg[i]));
  oi.appendChild(d); y[i] = x[i] = Y[i] = X[i] = 0;
 };
 o.appendChild(oi); document.body.appendChild(o);
 setInterval(drag, 25);
},
ascroll = function(){
 ymouse += window.pageYOffset;
 xmouse += window.pageXOffset;
 window.removeEventListener('scroll', ascroll, false);
};
o.id = 'outerCircleText'; o.style.fontSize = size + 'px';
if (window.addEventListener){
 window.addEventListener('load', init, false);
 document.addEventListener('mouseover', mouse, false);
 document.addEventListener('mousemove', mouse, false);
  if (/Apple/.test(navigator.vendor))
   window.addEventListener('scroll', ascroll, false);
}
else if (window.attachEvent){
 window.attachEvent('onload', init);
 document.attachEvent('onmousemove', mouse);
};
})();
</script> 
<center><div style="border: 2px solid ; overflow: auto; color: black; background-color: gray; width: 80%;
background:rgba(0, 0, 0, 0.7) none repeat scroll 0 0 !important;
filter:Alpha(opacity=70); background:#fff;}
.con p{ position:relative;"> 
<h2> 
<center> 
<script language="JavaScript1.2"> 
var message="某人，我喜欢你，不长，到我老去。"
var neonbasecolor="white"
var neontextcolor="red"
var flashspeed=100  //in milliseconds
var n=0
if (document.all||document.getElementById){
document.write('<font color="'+neonbasecolor+'">')
for (m=0;m<message.length;m++)
document.write('<span id="neonlight'+m+'">'+message.charAt(m)+'</span>')
document.write('</font>')
}
else
document.write(message)
function crossref(number){
var crossobj=document.all? eval("document.all.neonlight"+number) : document.getElementById("neonlight"+number)
return crossobj
}
function neon(){
//Change all letters to base color
if (n==0){
for (m=0;m<message.length;m++)
//eval("document.all.neonlight"+m).style.color=neonbasecolor
crossref(m).style.color=neonbasecolor
}
//cycle through and change individual letters to neon color
crossref(n).style.color=neontextcolor
if (n<message.length-1)
n++
else{
n=0
clearInterval(flashing)
setTimeout("beginneon()",1500)
return
}
}
function beginneon(){
if (document.all||document.getElementById)
flashing=setInterval("neon()",flashspeed)
}
beginneon()
</script><font color="white"><span id="neonlight0" style="color: red;">某</span><span id="neonlight1" style="color: red;">人</span><span id="neonlight2" style="color: red;">，</span><span id="neonlight3" style="color: red;">我</span><span id="neonlight4" style="color: red;">喜</span><span id="neonlight5" style="color: white;">欢</span><span id="neonlight6" style="color: white;">你</span><span id="neonlight7" style="color: white;">，</span><span id="neonlight8" style="color: white;">不</span><span id="neonlight9" style="color: white;">长</span><span id="neonlight10" style="color: white;">，</span><span id="neonlight11" style="color: white;">到</span><span id="neonlight12" style="color: white;">我</span><span id="neonlight13" style="color: white;">老</span><span id="neonlight14" style="color: white;">去</span><span id="neonlight15" style="color: white;">。</span></font></center></h2> 
<img src="./icon/20140523223608.gif" tppabs="http://i7.topit.me/7/3b/fa/1177856673f6afa3b7l.jpg" align="middle" border="0"><br> 
    <center> 
<font face="Monotype Corsiva" size="3" color="#ffffff"> <br>   <br>怎么办<br>怎么办我就是爱你<br>怎么办我就是想你<br>无论喝茶还是刷牙<br>想着你<br>怎么办我的心已经容不下<br>除了你没有其他<br> 
 
 
 
<br> 
 <script type="text/javascript"> 
/*Important Function to blend the tabs in and out*/
function blendoff(idname) {document.getElementById(idname).style.display = 'none';}
function blendon(idname) {document.getElementById(idname).style.display = 'block';}
</script> 
<script type="text/javascript"> 
/*Function for our Tabmenu with 4 Tabs*/
function swichtabs(wert) {
if (wert=='1'){
document.getElementById('tablink1').className='tab1 tabactive';
document.getElementById('tablink2').className='tab2';
document.getElementById('tablink3').className='tab3';
document.getElementById('tablink4').className='tab4';
}else if (wert=='2'){
document.getElementById('tablink1').className='tab1';
document.getElementById('tablink2').className='tab2 tabactive';
document.getElementById('tablink3').className='tab3';
document.getElementById('tablink4').className='tab4';
}else if (wert=='3'){
document.getElementById('tablink1').className='tab1';
document.getElementById('tablink2').className='tab2';
document.getElementById('tablink3').className='tab3 tabactive';
document.getElementById('tablink4').className='tab4';
} else if (wert=='4'){
document.getElementById('tablink1').className='tab1';
document.getElementById('tablink2').className='tab2';
document.getElementById('tablink3').className='tab3';
document.getElementById('tablink4').className='tab4 tabactive';
}
}
</script> 
<script language="JavaScript" type="text/javascript"> 
<!--
var rows=1; // must be an odd number
var speed=10; // lower is faster
var reveal=2; // between 0 and 2 only. The higher, the faster the word appears
var effectalign="default" //enter "center" to center it.
var w3c=document.getElementById && !window.opera;;
var ie45=document.all && !window.opera;
var ma_tab, matemp, ma_bod, ma_row, x, y, columns, ma_txt, ma_cho;
var m_coch=new Array();
var m_copo=new Array();
function matrix() {
if (!w3c && !ie45) return
var matrix=(w3c)?document.getElementById("matrix"):document.all["matrix"];
ma_txt=(w3c)?matrix.firstChild.nodeValue:matrix.innerHTML;
ma_txt=" "+ma_txt+" ";
columns=ma_txt.length;
if (w3c) {
while (matrix.childNodes.length) matrix.removeChild(matrix.childNodes[0]);
ma_tab=document.createElement("table");
ma_tab.setAttribute("border", 0);
ma_tab.setAttribute("align", effectalign);
ma_tab.style.backgroundColor="#000000";
ma_bod=document.createElement("tbody");
for (x=0; x<rows; x++) {
ma_row=document.createElement("tr");
for (y=0; y<columns; y++) {
matemp=document.createElement("td");
matemp.setAttribute("id", "Mx"+x+"y"+y);
matemp.className="matrix";
matemp.appendChild(document.createTextNode(String.fronCharCode(160)));
ma_row.appendChild(matemp);
}
ma_bod.appendChild(ma_row);
}
ma_tab.appendChild(ma_bod);
matrix.appendChild(ma_tab);
} else {
ma_tab='<ta'+'ble align="'+effectalign+'" border="0" style="background-color:#000000">';
for (var x=0; x<rows; x++) {
ma_tab+='<t'+'r>';
for (var y=0; y<columns; y++) {
ma_tab+='<t'+'d class="matrix" id="Mx'+x+'y'+y+'">&nbsp;</'+'td>';
}
ma_tab+='</'+'tr>';
}
ma_tab+='</'+'table>';
matrix.innerHTML=ma_tab;
}
ma_cho=ma_txt;
for (x=0; x<columns; x++) {
ma_cho+=String.fronCharCode(32+Math.floor(Math.random()*94));
m_copo[x]=0;
}
ma_bod=setInterval("mytricks()", speed);
}
 
function mytricks() {
x=0;
for (y=0; y<columns; y++) {
x=x+(m_copo[y]==100);
ma_row=m_copo[y]%100;
if (ma_row && m_copo[y]<100) {
if (ma_row<rows+1) {
if (w3c) {
matemp=document.getElementById("Mx"+(ma_row-1)+"y"+y);
matemp.firstChild.nodeValue=m_coch[y];
}
else {
matemp=document.all["Mx"+(ma_row-1)+"y"+y];
matemp.innerHTML=m_coch[y];
}
matemp.style.color="#FF0000";
matemp.style.fontWeight="bold";
}
if (ma_row>1 && ma_row<rows+2) {
matemp=(w3c)?document.getElementById("Mx"+(ma_row-2)+"y"+y):document.all["Mx"+(ma_row-2)+"y"+y];
matemp.style.fontWeight="normal";
matemp.style.color="#FF0000";
}
if (ma_row>2) {
matemp=(w3c)?document.getElementById("Mx"+(ma_row-3)+"y"+y):document.all["Mx"+(ma_row-3)+"y"+y];
matemp.style.color="#FF0000";
}
if (ma_row<Math.floor(rows/2)+1) m_copo[y]++;
else if (ma_row==Math.floor(rows/2)+1 && m_coch[y]==ma_txt.charAt(y)) zoomer(y);
else if (ma_row<rows+2) m_copo[y]++;
else if (m_copo[y]<100) m_copo[y]=0;
}
else if (Math.random()>0.9 && m_copo[y]<100) {
m_coch[y]=ma_cho.charAt(Math.floor(Math.random()*ma_cho.length));
m_copo[y]++;
}
}
if (x==columns) clearInterval(ma_bod);
}
function zoomer(ycol) {
var mtmp, mtem, ytmp;
if (m_copo[ycol]==Math.floor(rows/2)+1) {
for (ytmp=0; ytmp<rows; ytmp++) {
if (w3c) {
mtmp=document.getElementById("Mx"+ytmp+"y"+ycol);
mtmp.firstChild.nodeValue=m_coch[ycol];
}
else {
mtmp=document.all["Mx"+ytmp+"y"+ycol];
mtmp.innerHTML=m_coch[ycol];
}
mtmp.style.color="#FF0000";
mtmp.style.fontWeight="bold";
}
if (Math.random()<reveal) {
mtmp=ma_cho.indexOf(ma_txt.charAt(ycol));
ma_cho=ma_cho.substring(0, mtmp)+ma_cho.substring(mtmp+1, ma_cho.length);
}
if (Math.random()<reveal-1) ma_cho=ma_cho.substring(0, ma_cho.length-1);
m_copo[ycol]+=199;
setTimeout("zoomer("+ycol+")", speed);
}
else if (m_copo[ycol]>200) {
if (w3c) {
mtmp=document.getElementById("Mx"+(m_copo[ycol]-201)+"y"+ycol);
mtem=document.getElementById("Mx"+(200+rows-m_copo[ycol]--)+"y"+ycol);
}
else {
mtmp=document.all["Mx"+(m_copo[ycol]-201)+"y"+ycol];
mtem=document.all["Mx"+(200+rows-m_copo[ycol]--)+"y"+ycol];
}
mtmp.style.fontWeight="normal";
mtem.style.fontWeight="normal";
setTimeout("zoomer("+ycol+")", speed);
}
else if (m_copo[ycol]==200) m_copo[ycol]=100+Math.floor(rows/2);
if (m_copo[ycol]>100 && m_copo[ycol]<200) {
if (w3c) {
mtmp=document.getElementById("Mx"+(m_copo[ycol]-101)+"y"+ycol);
mtmp.firstChild.nodeValue=String.fronCharCode(160);
mtem=document.getElementById("Mx"+(100+rows-m_copo[ycol]--)+"y"+ycol);
mtem.firstChild.nodeValue=String.fronCharCode(160);
}
else {
mtmp=document.all["Mx"+(m_copo[ycol]-101)+"y"+ycol];
mtmp.innerHTML=String.fronCharCode(160);
mtem=document.all["Mx"+(100+rows-m_copo[ycol]--)+"y"+ycol];
mtem.innerHTML=String.fronCharCode(160);
}
setTimeout("zoomer("+ycol+")", speed);
}
}
// --> 
setTimeout('matrix()', 1);
col=0;
function fadein()
{
document.getElementById("fade1").style.color="rgb(" + col + ",0,0)";
document.getElementById("fade2").style.color="rgb(" + col + ",0,0)";
document.getElementById("fade3").style.color="rgb(" + col + ",0,0)";
document.getElementById("fade4").style.color="rgb(" + col + ",0,0)";
document.getElementById("fade5").style.color="rgb(" + col + ",0,0)";
document.getElementById("fade6").style.color="rgb(" + col + ",0,0)";
col+=5;
if(col<255) setTimeout('fadein()', 1);
if(col==255) setTimeout('fadeout()', 1);
}
function fadeout()
{
document.getElementById("fade1").style.color="rgb(" + col + ",0,0)";
document.getElementById("fade2").style.color="rgb(" + col + ",0,0)";
document.getElementById("fade3").style.color="rgb(" + col + ",0,0)";
document.getElementById("fade4").style.color="rgb(" + col + ",0,0)";
document.getElementById("fade5").style.color="rgb(" + col + ",0,0)";
document.getElementById("fade6").style.color="rgb(" + col + ",0,0)";
col-=5;
if(col>0) setTimeout('fadeout()', 1);
if(col==0) setTimeout('fadein()', 1);
}
setTimeout('fadein()', 1);
</script> 
<script language="JavaScript1.2"> 
function disableselect(e){
return false
}
function reEnable(){
return true
}
document.onselectstart=new Function ("return false")
if (window.sidebar){
document.onmousedown=disableselect
document.onclick=reEnable
}
</script>
<br>
</center> 
</div><center><DIV id=matrix>xxxxxxxxx</DIV><!-- xxxxxxxxx --> 
</center></body> 
<html> 
</center></html>


<p align="center" style="font-size:12px">
<font color="#008000">

</font>
</p> 

</div></script></center></div></center></center></div></div></body></html>