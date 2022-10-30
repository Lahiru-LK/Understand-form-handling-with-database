<?php
	
	$host = "localhost";
	$username = "root";
	$password = "";
	
	$link = mysqli_connect($host, $username, $password);
	
	if(!$link){
		die('center><p>🔴 Local Host Could not connect..... ❌</p><center>'. mysqli_error($link));
	}
	else{
		echo '<center><p>🟢 Local Host Connected  Successfull.....  ✅</p><center>';
	}

	mysqli_select_db($link, 'BICT');
?>