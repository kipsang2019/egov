
<?php 

session_start();
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>

	<header class="flower">
		<marquee direction='top'><h2 style="color: white; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px red;">County government of Trans-nzoia</h2></marquee>
		<nav>
			<div class="main-wrapper">
			<?php 
		 	if (isset($_SESSION['u_id'])) {
		 		echo '<ul>
		 		<li><a href="index.php">Home</a></li>
				<li><a href="e-services.php">E-services</a></li>
				<li><a href="viewprojects.php">view all rojects</a></li>
				<li><a href="pdf/jobspdf.php">view applied jobs</a></li>
				<li><a href="profile.php">User profile</a></li>
			</ul>';
		 	}else{
		 		echo '<ul>
					<li></li> <a href="../index.php">Home</a></li>
					<li></li> <a href="admin/adminhome.php">Admin</a></li>
				</ul>';
		 	}

		 	 ?>
				
				<div class="nav-login">
					<?php 

					if (isset($_SESSION['u_id'])) {
						echo '';
					}else{
						echo '<form class="login-form" action="inc/login.inc.php" method="POST">
						<input type="text" name="uid" placeholder="Username" required="required">
						<input type="password" name="pwd" placeholder="Password" required="required">
						<button class="btn btn-success" name="submit">Login</button>
						<a href="signup.php">Signup</a>
					</form>
					';
					 
					}
					 
					 ?>
					
				</div>
			</div>
		</nav>
	</header>