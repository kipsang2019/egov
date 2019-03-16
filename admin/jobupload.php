<?php 


	if (isset($_POST['submit'])) {
		$msg = "Hello kim!!";
		include 'dbcon.php';
		
		$designation = mysqli_real_escape_string($conn, $_POST['designation']);
		$scale = mysqli_real_escape_string($conn, $_POST['scale']);
		$postsno = mysqli_real_escape_string($conn, $_POST['postsno']);
		$advertno = mysqli_real_escape_string($conn, $_POST['advertno']);

		//check for empty inputs
		if (empty($designation) || empty($scale) || empty($postsno) || empty($advertno)) {
			header("Location: jobs.php?Some inputs are empty");
			$msg = 'Upload failed!!';
			exit();
		}else{
			$sql = "INSERT INTO uploadjobs (designation, scale, postsno, advertno) 
				VALUES ('$designation','$scale','$postsno','$advertno')";

			mysqli_query($conn, $sql);
			header("Location: jobs.php?submit=success");
			$msg = 'Upload was successful!!';
			exit();
		}

		
	}


 ?>

