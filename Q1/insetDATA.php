<?php
	include("connectionCheck.php");
	
	$w = mysqli_select_db($link,"BICT");
	
	if($w == false){
		die ("Unable to execute Database 😒😒😒". mysqli_error($link));
	}
	
		echo "Successfully  connected Database 😍😍😍";
 
	$in01 = "INSERT INTO User(userName,password,email,role)
		  VALUES
		  ('admin','admin123','admin@gmail.com','administrator')"; 
	
	$in02 = "INSERT INTO Subject(subjectCode,subjectName,credits)
		  VALUES
		  ('S001','Science',5)"; 
	
	$in03 = "INSERT INTO Student(studnetID,studnetName,age,subject)
		  VALUES
		  ('ST001','Lahiru',22,'Maths')"; 		
	
	$S1 = mysqli_query($link,$in01);
	$S2 = mysqli_query($link,$in02);
	$S3 = mysqli_query($link,$in03);
	
	if($S1 == false || $S2 == false || $S3 == false ){
		die("<p>Unable to execute the query 🥵🥵🥵</p>"); 
	}
	else{
	    echo "<p>Successfully Insert DATA of Table 😍😍😍😍</p>";
	}
	
   mysqli_close($link);
?>