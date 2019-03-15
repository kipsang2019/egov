<?php 

include 'db.inc.php';

if (isset($_POST['submit'])) {
	$project = mysqli_real_escape_string($conn, $_POST['project']);
	$type = mysqli_real_escape_string($conn, $_POST['type']);
	$developer = mysqli_real_escape_string($conn, $_POST['developer']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
	$plotno = mysqli_real_escape_string($conn, $_POST['plotno']);
	$zone = mysqli_real_escape_string($conn, $_POST['zone']);
	$section = mysqli_real_escape_string($conn, $_POST['section']);
	$plotlocation = mysqli_real_escape_string($conn, $_POST['plotlocation']);

	if (empty($project) || empty($type) || empty($developer) || empty($address) || empty($phonenumber) || empty($plotno) || empty($zone) || empty($section) || empty($plotlocation)) {
		header("Location: ..\buildingCons.php?Please fill all the fields!!");
		exit();
	}else{
		$sql = "INSERT INTO approvals(project, type, developer, address, phonenumber, plotno, zone, section, plotlocation) VALUES('$project','$type','$developer','$address','$phonenumber','$plotno','$zone','$section','$plotlocation')";

		mysqli_query($conn, $sql);
		header("Location: ..\buildingCons.php?Submit=success!!");
		exit();
	}
}


 ?>