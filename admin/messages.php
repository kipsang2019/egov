<?php 

	//include 'inc/db.inc.php';
	$conn = mysqli_connect('localhost','root','','e-governance');

	if (isset($_POST['submit'])) {
		
		$name = 'Admin';
		$sendtext = mysqli_real_escape_string($conn, $_POST['sendtext']);

		$sql = "INSERT INTO messages (sendtext, name) VALUES ('$sendtext','$name')";

		 mysqli_query($conn, $sql);
		header("Location: adminchat.php?Seccess!!");
		exit();
	}

 ?>