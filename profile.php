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

		<br>
		<form action="inc/logout.inc.php" method="POST">
			<button class="btn btn-danger" name="submit">Logout</button><br><br>
		</form>
	</div>
	<div id="right-side">
		<h1>Notifications</h1>
		<?php 
		$conn = mysqli_connect('localhost','root','','test');

		//select dbs
		mysqli_select_db($conn, 'test');
		
		$sql = "SELECT * FROM proj_uploads";
		$record = mysqli_query($conn, $sql);

		$row = mysqli_fetch_array($record);
		echo "<h4>";
		echo $row['first']." your project suggestion is ". $row['status'];
		echo "</h4>";
		
		$sql1 = "SELECT * FROM license";
		$record1 = mysqli_query($conn, $sql1);

		$r = mysqli_fetch_array($record1);
		echo "<h4>";
		echo "your license of ". $r['bs_name']. " is being processed";
		echo "</h4>";
		
	 ?>
		
	</div>
	</div>
	
	
</div>


<?php include 'footer.php'; ?>