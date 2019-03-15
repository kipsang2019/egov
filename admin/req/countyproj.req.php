<?php
	include '..\dbcon.php';

	if (isset($_POST['submit'])) {

		$project = mysqli_real_escape_string($conn, $_POST['project']);
		$type = mysqli_real_escape_string($conn, $_POST['type']);
		$developer = mysqli_real_escape_string($conn, $_POST['developer']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);
		$zone = mysqli_real_escape_string($conn, $_POST['zone']);
		$plotlocation = mysqli_real_escape_string($conn, $_POST['plotlocation']);

		if (empty($project) || empty($type) || empty($developer) || empty($address) || empty($zone) || empty($plotlocation)) {
			header("Location: ../countyproj.php?upload=Failed.fill all the fielsd!!");
			exit();
		}else{
			//insert data to database
			$sql = "INSERT INTO countyprojetcs (project, type, developer, address, zone, plotlocation)
			VALUES ('$project','$type','$developer','$address','$zone','$plotlocation')";

			mysqli_query($conn, $sql);
			header("Location: ../countyproj.php?upload=success!!");
			exit();
		}

		

	}

 ?>