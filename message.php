<?php 

	//include 'inc/db.inc.php';
	$conn = mysqli_connect('localhost','root','','e-governance');

	if (isset($_POST['submit'])) {
		
		$sendtext = mysqli_real_escape_string($conn, $_POST['sendtext']);
		$citizenname = mysqli_real_escape_string($conn, $_POST['citizenname']);
		if (empty($sendtext) || empty($citizenname)) {
			header("Location: profile.php?some fields are empty!!");
			exit();
		}else{
			$sql = "INSERT INTO messages (sendtext, name) VALUES ('$sendtext','$citizenname')";

			mysqli_query($conn, $sql);
			header("Location: profile.php?Seccess!!");
			exit();
		}

		
	}

 ?>