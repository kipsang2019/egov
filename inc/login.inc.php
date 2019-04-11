<?php 

session_start();

if (isset($_POST['submit'])) {

	$_SESSION['message'] = '';
	
	include 'db.inc.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	#Error handlers
	#Check if inputs are empty
	if (empty($uid) || empty($pwd)) {
		header("Location: ../index.php?login=empty");
		$_SESSION['message'] = 'some fields are empty';
		exit();
	}else{
		#check if username exists in the dbs
		$sql = "SELECT * FROM users WHERE uid='$uid' OR email='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		if ($resultcheck < 1) {
			header("Location: ../index.php?login=error");
			exit();
		}else{
			if ($row = mysqli_fetch_assoc($result)) {
				#dehashing the password
				
				if ($pwd !== $row['pwd']) {
					header("Location: ../index.php?login=error00");
					exit();
				}elseif($pwd == $row['pwd']) {
					#login the user
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['first'];
					$_SESSION['u_last'] = $row['last'];
					$_SESSION['u_idno'] = $row['idno'];
					$_SESSION['u_subcounty'] = $row['subcounty'];
					$_SESSION['u_email'] = $row['email'];
					$_SESSION['u_uid'] = $row['user_uid'];

					//display user details

					header("Location: ../profile.php?login=success");
					echo "Welcome ".$row['user_first'];
					exit();
				}
			}
		}
	}
}else{
	header("Location: ../index.php?login=error");
	exit();
}


 ?> 