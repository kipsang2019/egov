
<?php 

session_start();
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
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
				<li><a href="form.php">Projects</a></li>
				<li><a href="#">sub-counties</a></li>
			</ul>';
		 	}else{
		 		echo '<ul>
					<li></li> <a href="index.php">Home</a></li>
				</ul>';
		 	}

		 	 ?>
				
				<div class="nav-login">
					<?php 

					if (isset($_SESSION['u_id'])) {
						echo '<form action="inc/logout.inc.php" method="POST">
					 	<button class="btn btn-success" name="submit">Logout</button>
					 </form>';
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