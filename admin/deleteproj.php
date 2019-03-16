<?php 
	$conn = mysqli_connect('localhost','root','','e-governance');
	$_SESSION['msg'] = '';
		//select dbs
		mysqli_select_db($conn, 'e-governance');

	//delete user
	$sql1 = "DELETE FROM proj_uploads WHERE id='$_POST[id]'";

	//update
	if ($record = mysqli_query($conn, $sql1)) {
		header("Location: projects.php");
		$msg = 'deleted successfully!!';
		exit();
	}else{
		echo "Could not delete";
	}

?>