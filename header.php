
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
	<link rel="stylesheet" type="text/css" href="admin/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>


	<header class="flower">
		<h2 style="color: white; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px red; text-align: center;">E-GOVERNANCE SYSTEM</h2>
		<h2 style="color: white; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px red; text-align: center;">COUNTY GOVERNMENT OF TRANS-NZOIA</h2>
		<nav class="main-nav">
			<div class="main-wrapper">
			<?php 
		 	if (isset($_SESSION['u_id'])) {
		 		echo '<ul>
		 		<li><a href="index.php"><img style="width:3%;" src="images/home.png" alt="">Home</a></li>
				<li><a href="e-services.php">E-services</a></li>
				<li><a href="countyprojects.php">county projects</a></li>
				<li><a href="citizensproj.php">citizens projects</a></li>
				<li><a href="pdf/jobspdf.php">view applied jobs</a></li>
				<li><a href="profile.php">User profile</a></li>
			</ul>';
		 	}else{
		 		echo '<ul>
					<li><a style="color:gold; font-size:20px;" href="index.php"><img style="width:4%;" src="images/home.png" alt=""> Home</a></li>
					<li><a style="color:gold; font-size:20px;" href="admin/adminhome.php"><img style="width:4%;" src="images/Admin-icon.png" alt="">Admin</a></li>
				</ul>';
		 	}

		 	 ?>

				
				<div class="nav-login">
					<?php 

					if (isset($_SESSION['u_id'])) {
						echo '
						<img style="width:6%; margin-left:5%;" src="images/county.png" alt=""><h1 style="color:#ffff00; float:right;">County E-Gov System</h1>
						';
					}else{
						echo '<form class="login-form" action="inc/login.inc.php" method="POST">
						<input type="text" name="uid" placeholder="Username" required="required">
						<input type="password" name="pwd" placeholder="Password" required="required">
						<button class="btn btn-primary" name="submit">Login</button>
						<a href="signup.php">Signup</a>
					</form>
					';
					 
					}
					 
					 ?>
					
				</div>
			</div>
		</nav>
	</header>