<?php
	include("../connectionCheck.php");
	
	$subcd = $_REQUEST['delete'];
	
	$sude = "DELETE FROM Subject WHERE subjectCode='$subcd'";
	
	$Qresult07 = mysqli_query($link,$sude);
	
	if($Qresult07){
		header('Location: subject_mgt.php?msg=user_deleted_data_Succssfulty>🙌🙌🙌🙌🙌🙌🙌🙌');
	}
	else{
		header('Location: subject_mgt.php?err=deleting_data_failed>🤬🤬🤬🤬🤬🤬🤬🤬🤬🤬🤬🤬');
	}
	
	mysqli_close($link);
?>