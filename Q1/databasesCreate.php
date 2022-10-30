<?php
	include("connectionCheck.php");
	
	$db = "CREATE DATABASE BICT";
	
	$Qr01 = mysqli_query($link,$db);
	
	if($Qr01 == false){
		echo "<p>Unable to execute Database !😒😒😒</p>";
	}
	else{
		echo "<p>Successfully  connected Database 💕💕💕</p>";
	}
	
	
?>