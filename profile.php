<?php 
	include 'header.php';
	include 'inc/db.inc.php';
 ?>
<div id="main-profpage">
	<div id="sub-main">
		<div id="left-side">
		
		<div id="profileimg">
			<img style="width: 30%;" src="images/Person-Male-Light-icon.png" alt="profile image">

		</div>
		<?php 
		
			include 'admin/selectlogin.php';

		
	 ?>

		<input type="file" name="img" value="Profile image">
		<form action="inc/logout.inc.php" method="POST">
			<button class="btn btn-success" name="submit">Logout</button><br><br>
		</form>
	</div>
	<div id="right-side">
		<h1>Notifications</h1>
		<?php 
		$conn = mysqli_connect('localhost','root','','e-governance');

		//select dbs
		mysqli_select_db($conn, 'e-governance');
		
		$sql = "SELECT * FROM proj_uploads";
		$record = mysqli_query($conn, $sql);

		$row = mysqli_fetch_array($record);
		echo "<h4>";
		echo "You project suggestion is ". $row['status'];
		echo "</h4>";
		
		
	 ?>
		
	</div>
	</div>
	
	
</div>


<?php include 'footer.php'; ?>