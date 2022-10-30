<?php
		include '../connectionCheck.php';
		
		echo "<h2 class='h02'> User Management ✍️...</h2>";
		
		$us = "SELECT userid, userName, email, role FROM User ";
		$Qresult = mysqli_query($link,$us);
	
		
		echo "<table class='t04'>";
			echo "<tr>
					<th> Name </th>
					<th> Email </th>
					<th> Role </th>
					<th> Delete Records </th>
					
				</tr>";
		
		while($rows = mysqli_fetch_assoc($Qresult)){
			
			echo "<tr>";
				echo "<td>".$rows['userName']. "</td>
					 <td>" .$rows['email']. "</td>
					 <td>" .$rows['role']. "</td>
					 <td> <button type='button'name='Bdelete' class='btn'><a href='deleting.php?delete=".$rows['userid']."'>Remove</a></button> </td>" ;		 
					
			echo "</tr>";
		}
		echo "</table >";

	mysqli_close($link);	
?>
	
	
	
<html>
	<head>
		<title>User Management</title>
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
				
				 background-color: #4CAF50;
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
			  background-color: #A2FCFFC9;
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
					<td>🖋️ Username:</td>
					<td> <input type="text" name="usnme">  </td>
				</tr>
							  
				<tr>
					<td>🔐 Password:</td>
					<td> <input type="password" name="upsd"> </td>
				</tr>
				<tr>
					<td>📧 Email:</td>
					<td> <input type="text" name="uemail"> </td>
				</tr>
				
				<tr>
					<td>👩‍🎨 Role:</td>
					<td> 
						<select name="urole" >
							<option> Teacher </option>
							<option> Student </option>
						</select >
					</td>
				</tr>
							  
				<tr>
					<td> <input type="submit" name="add" value="Add"> </td>
					<td> <input type="reset" name="clear" value="Clear"> </td>
				</tr>
							  
			</form>
		</table>
	
	</body>
</html>

<?php
	include '../connectionCheck.php';
	
	if(isset($_POST['add'])){
			
			if(empty($_POST['usnme']) || empty($_POST['upsd']) || empty($_POST['uemail'])){
						
				echo "<center><p>Pleass fill all the fields 😨😨😨</p></center>";
				}		
				else{
					
					
					$userN = $_REQUEST['usnme'];
					$passW = $_REQUEST['upsd'];
					$emaiL = $_REQUEST['uemail'];
					$rolE = $_REQUEST['urole'];
					$encript_pssd = md5($passW); //md5 is password encripted function
					
					$A = "SELECT * FROM User WHERE userName='{$userN}' LIMIT 1";
					$Qresult09 = mysqli_query($link,$A);
					
					if($Qresult09){
						if(mysqli_num_rows($Qresult09) == 1){
							echo "<center><p>User Name is available in the database 👍👍👍<p></center>";
						}else{
							$U = "INSERT INTO User(userName,password,email,role) VALUES ('$userN','$encript_pssd','$emaiL','$rolE')";
							$Qresult03 = mysqli_query($link, $U);
							
							if($Qresult03 == false){
								echo "<center><p>Unable to execute the query😮😮😮</center></p>";							
							}
							else{
								header('Location: user_mgt.php?Successfully >💕💕💕💕');
							}	
						}
					}
					else{
						echo "<center><p>🤬 Error ! User name is Not available in the database 😡😡😡<p></center>";

					}
								
				}
						
		}
			
	mysqli_close($link);

?>