<?php include 'header.php' ?>


		 <?php
		 	if (isset($_SESSION['admin_id'])) {
		 		echo '<h1 style="color:blue;text-align:center;">Admin Dashboard</h1>
		 		<img style="width:10%; margin-left: 0%;" src="../images/Admin-icon.png" alt="">
		 		<div class="adminbtns>
		 			<form action="jobs.php" method="POST">
					<button style="margin-left: 50%; border-radius: 50%; height: 10%;" class="btn btn-primary"><img style="width:10%;" src="../images/Occupations-Bartender-Male-Light-icon.png" alt="">jobs</button>
				</form>
				<form action="projects.php" method="POST">
					<button style="margin-left: 30%; border-radius: 50%; height: 10%;" class="btn btn-info">Citizens projects <img style="width:10%;" src="../images/Users-icon.png" alt=""></button>
				</form>
				
				<form action="countyproj.php" method="POST">
					<button style="margin-left: 65%; border-radius: 50%; height: 10%;" class="btn btn-success"><img style="width:10%;" src="../images/county.png" alt="">county projects</button>
				</form><br>
				<form action="permits.php" method="POST">
					<button style="margin-left: 40%; border-radius: 50%; height: 10%;" class="btn btn-danger"><img style="width:10%;" src="../images/apps (3).png" alt="">permits</button>
				</form>
				<form action="consapprovals.php" method="POST">
					<button style="margin-left: 70%; border-radius: 50%; height: 10%;" class="btn btn-success"><img style="width:5%;" src="../images/home.png" alt="">construction approvals</button>
				</form>
		 		</div>
		 		


		 		<form action="logout.php" method="POST" accept-charset="utf-8">
		 			 <button class="btn btn-danger" type="submit" name="submit">Logout</button>
		 			 
		 		</form>

		 		';
		 	}else{
		 		echo ' 
		 		<h1 style="color:blue; text-align:center;">Admin Control Panel</h1>
		 		<form style="margin-left:10%;" class="login-form" action="adminlogin.php" method="POST">
						<input type="text" name="uid" placeholder="Username" required="required">
						<input type="password" name="pwd" placeholder="Password" required="required">
						<button class="btn btn-primary" name="submit">Login</button><br>
						<img style="width:20%;" src="../images/iconfinder_admin_87402.png" alt="">
					</form>';
		 	}

		  ?>

		  <?php
		   if (isset($_SESSION['admin_id'])) {
		  	echo '

		';
		  }else{
		  	echo '<h1>Login to access admin privilages!!
		  	<img style="width:20%; float:right;" src="../images/apps (2).png" alt="">
		  	<h2 style="float:right;">Global user</h2>';
		  }
		  ?>
		
		
	<?php include 'footer.php'; ?>	
