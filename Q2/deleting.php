<?php
	include("../connectionCheck.php");
	
	$USid = $_REQUEST['delete'];
	
	$de = "DELETE FROM User WHERE userid=$USid";
	
	$Qresult04 = mysqli_query($link,$de);
	
	if($Qresult04){
		header('Location: user_mgt.php?msg=user_deleted_data_Succssfulty>🙌🙌🙌🙌🙌🙌🙌🙌');
	}
	else{
		header('Location: user_mgt.php?err=deleting_data_failed>🤬🤬🤬🤬🤬🤬🤬🤬🤬🤬🤬🤬');
	}
	
	mysqli_close($link);
?>