<?php
 	include 'inc/db.inc.php'; 

 	if (isset($_POST['delete'])) {

 		$sql = "SELECT * FROM messages ";
		$record = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($record);
		if ($resultCheck > 0) {
			$sql1 = "DELETE FROM messages WHERE id = '$_POST[id]'";
			header("Location: profile.php");
			exit();
		}
 		
 		
 	}

 ?>