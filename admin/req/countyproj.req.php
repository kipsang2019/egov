<?php
	include '..\dbcon.php';

	if (isset($_POST['submit'])) {

		$project = mysqli_real_escape_string($conn, $_POST['project']);
		$type = mysqli_real_escape_string($conn, $_POST['type']);
		$developer = mysqli_real_escape_string($conn, $_POST['developer']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);
		$zone = mysqli_real_escape_string($conn, $_POST['zone']);
		$plotlocation = mysqli_real_escape_string($conn, $_POST['plotlocation']);
		$cost = mysqli_real_escape_string($conn, $_POST['cost']);

		if (empty($project) || empty($type) || empty($developer) || empty($address) || empty($zone) || empty($plotlocation) || empty($cost)) {
			header("Location: ../countyproj.php?upload=Failed.fill all the fielsd!!");
			exit();
		}else{
			//insert data to database
			$sql = "INSERT INTO countyprojetcs (project, type, developer, address, zone, plotlocation, cost)
			VALUES ('$project','$type','$developer','$address','$zone','$plotlocation','$cost')";

			mysqli_query($conn, $sql);
			header("Location: ../countyproj.php?upload=success!!");
			exit();
		}

		

	}

 ?>