<?php
	$dbcon = mysqli_connect('localhost','root','','e-governance');
	
	if (isset($_POST['submit'])){

		//get file
		$doc = $_FILES['doc']['name'];
		

		$subcounty = mysqli_real_escape_string($dbcon, $_POST['subcounty']);
		$ward = mysqli_real_escape_string($dbcon, $_POST['ward']);
		$pnumber = mysqli_real_escape_string($dbcon, $_POST['pnumber']);
		$degree = mysqli_real_escape_string($dbcon, $_POST['degree']);
		$school = mysqli_real_escape_string($dbcon, $_POST['school']);
		$course = mysqli_real_escape_string($dbcon, $_POST['course']);
		$jobselect = mysqli_real_escape_string($dbcon, $_POST['jobselect']);

		$target = "./images/".basename($doc);
		$sql = "INSERT INTO jobs (subcounty, ward, pnumber, degree, school, course, jobselect, doc) VALUES ('$subcounty','$ward','$pnumber','$degree','$school','$course',
		'$jobselect','$doc')";
		mysqli_query($dbcon, $sql);
		header("Location: ../jobs.php?Upload success!!");
		exit();
		
		
	}



 ?>