<?php 
	$conn = mysqli_connect('localhost','root','','test');

		//select dbs
		mysqli_select_db($conn, 'test');

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