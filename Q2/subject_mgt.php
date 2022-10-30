<?php
		include '../connectionCheck.php';
		
		echo "<h2 class='h02'> Subject Management 📚...</h2>";
		
		$su = "SELECT * FROM Subject ";
		$Qresult05 = mysqli_query($link,$su);
	
		
		echo "<table class='t04'>";
			echo "<tr>
					<th> Subject Code </th>
					<th> Subject Name </th>
					<th> Credits </th>
					<th> Remove Records </th>
					
				</tr>";
		
		while($rows2 = mysqli_fetch_assoc($Qresult05)){
			
			echo "<tr>";
				echo "<td>".$rows2['subjectCode']. "</td>
					 <td>" .$rows2['subjectName']. "</td>
					 <td>" .$rows2['credits']. "</td>
					 <td> <button type='button'name='Bdelete' class='btn'><a href='deletesub.php?delete=".$rows2['subjectCode']."'>Remove</a></button> </td>" ;		 
					
			echo "</tr>";
		}
		echo "</table >";

	mysqli_close($link);	
?>
	
	
	
<html>
	<head>
		<title>Subject Management</title>
		<link rel="icon" type="image/user" href="image/book.png">
		
		<style>
			table.t03{
				  margin-left: auto;
				  margin-right: auto;
				  margin-top:40px;
				  
				  
			}
			table.t04 {
				 margin-left: auto;
				 margin-right: auto;
				 
				 width: 46%;
				 text-align:center;
				 
				 border:1px solid black;
				 border-collapse: collapse; 
				 box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
				 
				 }
			
			table.t04 td,th{
				border:1px solid black;
				
				 
			}
			table.t04 th{
				
				 background-color: #008CBA;
				 color:white;
			}
			
			.h02{
				font-size:50px;
				text-align:center;
			}
			
			.btn{
				margin-top:5px;
				margin-bottom:5px;
				padding: 1px 50px ;
				background-color: white;
				color: black;
				border: 2px solid #555555;
				border-radius:2px;
				
			}
			.btn:hover {
			  background-color: #4CAF50 ;
			  color: white;
			  border-radius:5px;
			  border: 2px solid white;
			}
			
		</style>
	</head>

	<body>
			
		<table class="t03">
			<form action="" method="POST">
				<tr>
					<td>👩‍💻 Subject Code:</td>
					<td> <input type="text" name="subc">  </td>
				</tr>
							  
				<tr>
					<td>📝 Subject Name:</td>
					<td> <input type="text" name="subn"> </td>
				</tr>
				
				<tr>
					<td>⭐ Credits:</td>
					<td> <input type="text" name="scred"> </td>
				</tr>
										  
				<tr>
					<td> <input type="submit" name="add02" value="Add"> </td>
					<td> <input type="reset" name="clear02" value="Clear"> </td>
				</tr>
							  
			</form>
		</table>
	
	</body>
</html>

<?php
	include '../connectionCheck.php';
	
	if(isset($_POST['add02'])){
			
			if(empty($_POST['subc']) || empty($_POST['subn']) || empty($_POST['scred'])){
						
				echo "<center><p>Pleass fill all the fields 😨😨😨</p></center>";
			}		
			else{
				$subCo = $_REQUEST['subc'];
				$subN = $_REQUEST['subn'];
				$subCr = $_REQUEST['scred'];
				
				$Q = "SELECT * FROM subject WHERE subjectCode='{$subCo}' LIMIT 1";
				$Qresult08 = mysqli_query($link,$Q);
				
				if($Qresult08){
					if(mysqli_num_rows($Qresult08) == 1){
						echo "<center><p>Subject code is available in the database 👍👍👍<p></center>";
					}
					else{
						$S = "INSERT INTO subject(subjectCode,subjectName,credits) VALUES ('$subCo','$subN',$subCr)";
						$Qresult06 = mysqli_query($link, $S);
								
						if($Qresult06 == false){
							echo "<center><p>Unable to execute the query😮😮😮</center></p>";							
						}
						else{
							header('Location: subject_mgt.php?Successfully >💕💕💕💕');
						}
							
					}
				}
				else{
						echo "<center><p>🤬 Error ! Subject code is Not available in the database 😡😡😡<p></center>";
					}
					
			}
				
		
	}
				
	
		mysqli_close($link);


	/*
				$Q = "SELECT * FROM Subject WHERE subc='{$subCo'} LIMIT 1";
				$Qresult08 = mysqli_query($link,$Q);
					
				if($Qresult08){
					if($Qresult08 == 1){
						echo "<center><p>Subject code is available in the database 🤩🤩🤩<p></center>";
					}
					else{
					
					
					
					
					else{
						echo "<center><p>🤬 Error ! Subject code is Not available in the database 😡😡😡<p></center>";
					}*/
?>

