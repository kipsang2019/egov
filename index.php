<?php 

include_once 'header.php';
include 'inc/db.inc.php';

 ?>

	<section class="main-cont">
		 <div class="main-wrapper">
		 	<img src="images/mkulima.jpg"alt="" id="mkulima">
		 	<?php 

		 	
		 	if (isset($_SESSION['u_id'])) {
		 		echo

		 		'<div id="profile">
	
						<img id="profile1"src="images/C360_2017-06-13-16-05-45-393.jpg"alt="Profile image">
						welcome <span class="user"><?= $_SESSION["user_first"]?></span>
					<form action="uploads/uploads.php"method="POST"enctype="multipart/form/data">
					 	<input type="file" name="file">
					 	<button name="submit">Upload image</button>
					</form>
				</div>';
		 	 }

		 	 ?>
		 	

		 </div>
		 
	</section>

<?php 

include_once 'footer.php';
 ?>
