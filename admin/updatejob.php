<?php 
	include 'dbcon.php';
	$msg = '';
	if (isset($_POST['submit'])) {
		$sql = "UPDATE jobs SET status='$_POST[status]' WHERE id='$_POST[id]'";

		//update
		if ($record = mysqli_query($conn, $sql)) {
			header("Location: jobs.php");
			$msg = 'Updated successfully!!';
			exit();
		}else{
			echo "Could not update";
		}
	}else{
		//delete user
		$sql1 = "DELETE FROM jobs WHERE id='$_POST[id]'";

		//update
		if ($record1 = mysqli_query($conn, $sql1)) {
			header("Location: jobs.php");
			$msg = 'deleted successfully!!';
			exit();
		}else{
			echo "Could not delete";
		}
	}
	
	

	


?>