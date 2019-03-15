<?php 

	//include '..\dbcon.php';
	$conn = mysqli_connect('localhost','root','','e-governance');

		//select dbs
		mysqli_select_db($conn, 'e-governance');


	if (isset($_POST['update'])) {
		$sql = "UPDATE approvals SET status='$_POST[status]' WHERE id='$_POST[id]'";

		//update
		if ($record = mysqli_query($conn, $sql)) {
			header("Location: ..\consapprovals.php");
			$msg = 'Updated successfully!!';
			exit();
		}else{
			echo "Could not update";
		}
	}else{
		$sql1 = "DELETE FROM approvals WHERE id='$_POST[id]'";

		//update
		if ($record = mysqli_query($conn, $sql1)) {
			header("Location: ..\countyproj.php");
			$msg = 'deleted successfully!!';
			exit();
		}else{
			echo "Could not delete";
		}
	}




 ?>