<?php 

include_once 'header.php';

 ?>


<?php 
	include_once 'header.php';
	$_SESSION['message'] = '';
		
	$mysqli = new mysqli('localhost','root','','signup');

	if ($_SERVER['REQUEST_METHOD'] =='POST') {
		//match pwds
		if ($_POST['pwd'] == $_POST['conpwd']) {
			$username = $mysqli->real_escape_string($_POST['username']);
			$email = $mysqli->real_escape_string($_POST['email']);
			$Password = md5($_POST['pwd']);
			$avatar_path = $mysqli->real_escape_string('images/'.$_FILES['avatar']['name']);

			//make sure that file is the exact img
			if (preg_match("!images!", $_FILES['avatar']['type'])) {
				//copy img to images folder
				if (copy($_FILES['avatar']['tmp_name'], $avatar_path)) {
					
					$_SESSION['username'] = $username;
					$_SESSION['avatar'] = $avatar_path;

					$sql = "INSERT INTO profile (username, email, pwd, avatar) VALUES ('$username','$email','$Password','$avatar_path')";

					if ($mysqli->query($sql) === true) {
						$_SESSION['message'] = 'Registration successful, added $username to the dbs';
						header("Location: ../welcome.php");
					}else{
						$_SESSION['message'] = "User could not be added!";
					}
				}else{
					$_SESSION['message'] = "File upload failed!";
				}
			}else{
				$_SESSION['message'] = "please upload png or jpg images!";
			}
		}else{
			$_SESSION['message'] = "the two passwords don't match!";
		}
	}

 ?> 	
	<div class="eserv">
		<a href="e-services.php">Prev page</a>
		<h1>Apply for single business license</h1>
		<form action="form.php" method="POST" enctype="multipart/form-data"> 
			<div class="alert"><?= $_SESSION['message'] ?></div>
			<input type="text" name="username" placeholder="Username" required="required"><br><br>
			<input type="text" name="email" placeholder="E-mail" required="required"><br><br>
			<input type="password" name="pwd" placeholder="Password" autocomplete="new-password" required="required"><br><br>
			<input type="password" name="conpwd" placeholder="Confirm password" autocomplete="new-password" required="required"><br><br>
			<input type="file" name="avatar" accept="images/*" required="required"><br><br>
			<button type="submit" name="submit">Submit</button><br><br>
		</form>
	</div>
<?php 

include_once 'footer.php';
 ?>
 