<?php 
session_start();
require '../ElZero/ElZero.php';
if (isset($_SESSION['passwordAdmin'])) {
	if ($_SESSION['passwordAdmin']  == $adminPanelPass) {
      header("Location: ./home");  
      
    }
	
}

?><form method="post">
	<center>
		<br><br><br>
		<input type="password" name="passwordAdmin">
		<button type="submit">Login</button>
	</center>
</form>


<?php



if (isset($_POST['passwordAdmin'])) {
	if ($_POST['passwordAdmin'] == $adminPanelPass) {
		$_SESSION['passwordAdmin'] = $adminPanelPass;
		header("Location: ./");exit();
	}else{
		echo "<center>Wrong password</center>";
	}
}
 ?>