<?php 

if (isset($_POST['submit'])) {
	
	include_once 'db.inc.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$idno = mysqli_real_escape_string($conn, $_POST['idno']);
	$subcounty = mysqli_real_escape_string($conn, $_POST['subcounty']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$conemail = mysqli_real_escape_string($conn, $_POST['conemail']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$conpwd = mysqli_real_escape_string($conn, $_POST['conpwd']);

	//error handlers
	//check for empty fields
	if (empty($first) || empty($last) || empty($idno) || empty($email) || empty($conemail) || empty($uid) || empty($pwd) || empty($conpwd)) {
		header("Location: signup.php?Signup=empty");
		exit();
	} else {
		//check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: signup.php?signup=invalid");
			exit();
		}else {
			//check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: signup.php?signup=invalid email");
				exit();
			}else{
				if ($conemail !== $email) {
					header("Location: signup.php?signup=emails dont match!!");
					exit();
				}else{
					if ($conpwd !== $pwd) {
						header("Location: signup.php?signup=passwords dont match!!");
						exit();
					}else{
						//select * from users
						#check if username is taken
						$sql = "SELECT * FROM users WHERE user_id='$uid";
						$result = mysqli_query($conn, $sql);
						$resultCheck = mysqli_num_rows($result);

						if ($resultCheck > 0) {
							header("Location: signup.php?signup=user taken");
							exit();
						} else {
							
							
							#insert user into dbs
							$sql = "INSERT INTO users (first, last, idno, subcounty, email, uid, pwd) 
							VALUES ('$first','$last','$idno','$subcounty','$email','$uid','$pwd');";

							$sql = "SELECT * FROM users WHERE first='$first' AND last='$last'";
							$results = mysqli_query($conn, $sql); 
							
							if (mysqli_num_rows(results) > 0) {
								while ($row = mysqli_fetch_assoc($results)) {
									$userId = $row['id'];
									echo $row['first']."<br> ".$row['last'];
									echo "string"; 
								}
							}
							header("Location: signup.php?signup=success");
							exit();
						}
					}
				}
			} 
		}
	}

}

 ?>