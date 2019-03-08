<?php include 'header.php' ?>


		 <?php
		 	if (isset($_SESSION['u_id'])) {
		 		echo '<h1 style="color:blue;text-align:center;">Admin Dashboard</h1>
		 		<form action="logout.php" method="POST" accept-charset="utf-8">
		 			 <button class="btn btn-danger" type="submit" name="submit">Logout</button>
		 			 <img style="width:20%;" src="../images/Admin-icon.png" alt="">
		 		</form>';
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
		   if (isset($_SESSION['u_id'])) {
		  	echo '

		';
		  }else{
		  	echo '<h1>Login to access admin privilages!!
		  	<img style="width:20%; float:right;" src="../images/apps (2).png" alt="">
		  	<h2 style="float:right;">Global user</h2>';
		  }
		  ?>
		
		
	<?php include 'footer.php'; ?>	
