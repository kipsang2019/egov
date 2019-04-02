<?php 

	//include '..\dbcon.php';
	$conn = mysqli_connect('localhost','root','','e-governance');

		//select dbs
		mysqli_select_db($conn, 'e-governance');


	if (isset($_POST['update'])) {
		$sql = "UPDATE countyprojetcs SET project='$_POST[project]',type='$_POST[type]',developer='$_POST[developer]',address='$_POST[address]',zone='$_POST[zone]',plotlocation='$_POST[plotlocation]',cost='$_POST[cost]',status='$_POST[status]' WHERE id='$_POST[id]'";

		//update
		if ($record = mysqli_query($conn, $sql)) {
			header("Location: ..\countyproj.php");
			$msg = 'Updated successfully!!';
			exit();
		}else{
			echo "Could not update";
		}
	}else{
		$sql1 = "DELETE FROM countyprojetcs WHERE id='$_POST[id]'";

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