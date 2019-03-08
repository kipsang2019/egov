<?php 

include_once 'header.php';
 ?>

	<section class="main-cont">
		 <div class="signup">
		 	<h2>Signup</h2>
		 	<form class="form" action="inc/signup.inc.php" method="POST">
		 		<input type="text" name="first" placeholder="First name" required="required"><br><br>
		 		<input type="text" name="last" placeholder="Last name" required="required"><br><br>
		 		<input type="text" name="email" placeholder="E-mail" required="required"><br><br>
		 		<input type="text" name="uid" placeholder="Username" required="required"><br><br>
		 		<input type="password" name="pwd" placeholder="Password" required="required"><br><br>
		 		<button class="btn btn-primary" name="submit">Signup</button>
		 	</form>
		 </div>
	</section>

<?php 

include_once 'footer.php';
 ?>
