<?php 
	include 'dbcon.php';
	$msg = '';

	$sql = "UPDATE jobs SET subcounty='$_POST[subcounty]', ward='$_POST[ward]', pnumber='$_POST[pnumber]', degree='$_POST[degree]', school='$_POST[school]', course='$_POST[course]', jobselect='$_POST[jobselect]' WHERE id='$_POST[id]'";

	//update
	if ($record = mysqli_query($conn, $sql)) {
		header("Location: jobs.php");
		$msg = 'Updated successfully!!';
		exit();
	}else{
		echo "Could not update";
	}
	


?>