
<?php
			include '../connectionCheck.php';
 
				if(isset($_POST['Sub'])){
					
					if(empty($_POST['usnme']) || empty($_POST['psd'])){
						
						echo "<center><p>Pleas fill all the fields 😨😨😨</p></center>";
						}
						
						else{
							$UserN = $_REQUEST['usnme'];
							$PassW = $_REQUEST['psd'];
							
							
							$Un = "SELECT * FROM User WHERE username = '{$UserN}' LIMIT 1";
								
							$Qresult01 = mysqli_query($link,$Un);
								
							if($Qresult01){
									
								if(mysqli_num_rows($Qresult01) == 1){
										
									$Ps = "SELECT * FROM User WHERE password = '{$PassW}'";
									$Qresult02 = mysqli_query($link,$Ps);
										
									if(mysqli_num_rows($Qresult02) == 1){
											
										header('Location: admin_page.php');
									}
									else{
										echo "<center><p>Password is incorrect 😮😮😮</center></p>";
										}
								}
								else{
									echo "Please enter a valid user name 🫠🫠🫠";
								}
							}
							else{
								echo "<p>error !!! 😡😡😡</p>";
							}
						
						}
				
				}
		
				
			mysqli_close($link);
		?>
		

<html>
	<head>
		<title>Q2</title>
		
		
		<style>
			.t01{
				  margin-left: auto;
				  margin-right: auto;
				  margin-top:40px;
				  
			}
			
			
		
		
		</style>
	</head>
	
	<body>
			
		<table class="t01">
			<form action="" method="POST">
				<tr>
					<td>Username:</td>
					<td> <input type="text" name="usnme">  </td>
				</tr>
							  
				<tr>
					<td>Password:</td>
					<td> <input type="password" name="psd"> </td>
				</tr>
							  
				<tr>
					<td> <input type="submit" name="Sub" value="Submit"> </td>
					<td> <input type="reset" name="Res" value="Reset"> </td>
				</tr>
							  
			</form>
		</table>
		
		
		
		
		
	</body>

</html>