<?php 


if (isset($_POST['submit'])) {
	
	include 'db.inc.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	#Error handlers
	#Check if inputs are empty
	
		#check if username exists in the dbs
		$sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultcheck = mysqli_num_rows($result);
		if ($resultcheck < 1) {
			header("Location: ../index.php?login=error");
			exit();
		}else{
			if ($row = mysqli_fetch_assoc($result)) {
				#dehashing the password
				$hashedpwdcheck = password_verify($pwd, $row['user_pwd']);
				if ($hashedpwdcheck == false) {
					header("Location: ../index.php?login=error");
					exit();
				}elseif($hashedpwdcheck == true) {
					#login the user
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];

					//dispaly user
					

					$sql1 = "SELECT * FROM users WHERE user_id='$uid'";
					$result1 = mysqli_query($conn, $sql1);
					while ($rw = mysqli_fetch_assoc($result1)) {
						echo $rw['user_uid'];
					}
					
				}
			}
		}
	}



 ?> 