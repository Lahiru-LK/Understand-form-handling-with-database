<?php
	
	$host = "localhost";
	$username = "root";
	$password = "";
	
	$link = mysqli_connect($host, $username, $password);
	
	if(!$link){
		die('Could not connect ! 🥵🥵🥵: '. mysqli_error($link));
	}
	else{
		echo 'Connected  Successfull ! 😍😍😍: ';
	}

	mysqli_select_db($link, 'BICT');
?>