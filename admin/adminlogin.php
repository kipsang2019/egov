<?php 

session_start();

if (isset($_POST['submit'])) {
	
	
	$conn = mysqli_connect('localhost','root','','e-governance');

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	#Error handlers
	#Check if inputs are empty
	if (empty($uid) || empty($pwd)) {
		header("Location: adminhome.php?login=empty");
		exit();
	}else{
		#check if username exists in the dbs
		$sql = "SELECT * FROM admin WHERE username='$uid' AND password='$pwd'";
		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		if ($resultcheck < 1) {
			header("Location: adminhome.php?login=error");
			exit();
		}else{
			if ($row = mysqli_fetch_assoc($result)) {
				
					#login the user
					$_SESSION['admin_id'] = $row['id'];
					$_SESSION['u_name'] = $row['username'];

					header("Location: adminhome.php?login=success");
					exit();
				}
			}
		}
	
}else{
	header("Location: adminhome.php?login=error");
	exit();
}


 ?> 