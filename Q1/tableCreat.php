<?php
	include("connectionCheck.php");
	
	$w = mysqli_select_db($link,"BICT");
	
	if($w == false){
		die ("Unable to execute Database 😒😒😒". mysqli_error($link));
	}
	
		echo "Successfully  connected Database 😍😍😍";
	
	
	
	$tb01 = "CREATE TABLE User(
			userid INT AUTO_INCREMENT PRIMARY KEY,
			userName CHAR(50),
			password VARCHAR(50),
			email VARCHAR(100),
			role VARCHAR(30)
			)";
	
	$tb02 = "CREATE TABLE Subject(
			subjectCode VARCHAR(30) PRIMARY KEY,
			subjectName VARCHAR(50),
			credits DECIMAL(5,2)
			)";
	
	$tb03 = "CREATE TABLE Student(
			studnetID VARCHAR(30) PRIMARY KEY,
			studnetName VARCHAR(50),
			age INT,
			subject VARCHAR(30)
			)";
	
	$T1 = mysqli_query($link,$tb01);
	$T2 = mysqli_query($link,$tb02);
	$T3 = mysqli_query($link,$tb03);
	
	if($T1 == false || $T2 == false || $T3 == false ){
		die("<p>Unable to execute the query 🥵🥵🥵</p>"); 
	}
	else{
	    echo "<p>Successfully Create Table 😍😍😍😍</p>";
	}
	
	mysqli_close($link);	
	
?>