<?php 
	$conn = mysqli_connect('localhost','root','','test');

		//select dbs
		mysqli_select_db($conn, 'test');

	if (isset($_POST['submit'])) {
		$sql = "UPDATE proj_uploads SET status='$_POST[status]' WHERE id='$_POST[id]'";

		//update
		if ($record = mysqli_query($conn, $sql)) {
			header("Location: projects.php");
			$msg = 'Updated successfully!!';
			exit();
		}else{
			echo "Could not update";
		}
	}else{
		include 'deleteproj.php';
	}

	
	
	
	

?>
