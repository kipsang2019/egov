<?php 
	include 'header.php';
	include 'inc/db.inc.php';
	include 'sessname.php';
 ?>
<div id="main-profpage">
	<div id="sub-main">
		<div id="left-side">
		
		<div id="profileimg">
			<img style="width: 25%;margin-left: 40%;" src="images/Person-Male-Light-icon.png" alt="profile image">
			
			<br><br>
			<form  action="inc/logout.inc.php" method="POST">
				<button style="margin-left: 20%;" class="btn btn-danger" name="submit">Logout</button><br><br>
			</form>

		</div>
		<h3 style="color: white;text-align: center;">Chat with your county</h3>
		<?php 
		
			include 'admin/selectlogin.php';

		
	 ?>

		
		<!-- chat output -->
		<?php

			//select dbs
			mysqli_select_db($conn, 'e-governance');
			
			$sql = "SELECT * FROM messages ";
			$record = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($record);

			if ($resultCheck > 0) {
				while ($row = mysqli_fetch_assoc($record)) {
					if ($_SESSION['name'] = $row['name']) {
						if ($row['name'] == 'Admin') {
							echo "<br>";
							echo "<div id='adminchats'>";
								echo "<b>".$row['name']."</b><br>". $row['sendtext']."<br><br>". $row['date']."<br><br>";
								
							echo "</div><br>";
							
						}else{

							echo "<br>";
							echo "<div id='chats'>";
								echo "<b>".$row['name']."</b><br>". $row['sendtext']."<br><br>". $row['date']."<br><br>";
								
							echo "</div><br>";

							
					}

						}
								
				}
	
		}

		  ?>

		<!-- chat apk -->
		
		<form action="message.php" method="POST">
			
			<textarea style="border-radius: 20px;" name="sendtext" placeholder="chat with county......" cols="40" rows="4"></textarea><br>
			<input type="text" name="citizenname" placeholder="Name"><br>
			<button class="btn btn-primary" type="submit" name="submit">Send</button>
		</form>
	</div>


	<div id="right-side">
		

	 <!-- display of Completed county projects -->
	<?php
	//select dbs
	mysqli_select_db($conn, 'e-governance');
	
	$sql = "SELECT * FROM countyprojetcs";
	$record = mysqli_query($conn, $sql);

  ?>
  <div class="main-cont">
	<h2 style="color: red;">NOTIFICATIONS</h2>
  	<table style="background-color: white;">
   	<h2 style="text-align: center; color: red;">Completed county projects</h2>
	 	<thead>
	 		<tr style="color: white; background-color: #1f2e2e; text-align: center;">
	 			<th>Project</th>
	 			<th>Contractor</th>
	 			<th>Zone</th>
	 			<th>Cost(KSH)</th>
	 			<th>Status</th>
	 			<th>Date Updated</th>
	 		</tr>
	 	</thead>
	 	<tbody>
	 		<?php
	 			while ($row = mysqli_fetch_array($record)) {
	 				$finished  = $row['status'];
	 				if ($finished == 'Finished') {
	 					echo "<tr><form action='' method='POST'>
	 					<td>".$row['project']."</td>
	 					<td>".$row['developer']."</td>
	 					<td>".$row['zone']."</td>
	 					<td>".$row['cost']."</td>
	 					<td>".$row['status']."</td>
	 					<td>".$row['date']."</td>
		 				</form>
		 				</tr>";
	 				}
	 				
	 			}
  				
	 		 ?>
	 
	 	</tbody>
	 </table><br><br>

	 <!-- uncopleted projects -->
	<?php
	 //select dbs
	mysqli_select_db($conn, 'e-governance');
	
	$sql = "SELECT * FROM countyprojetcs";
	$record = mysqli_query($conn, $sql);

  ?>
	 <table style="background-color: white;">
   	<h2 style="text-align: center; color: red;">Uncompleted county projects</h2>
	 	<thead>
	 		<tr style="color: white; background-color: #1f2e2e; text-align: center;">
	 			<th>Project</th>
	 			<th>Contractor</th>
	 			<th>Zone</th>
	 			<th>Cost(KSH)</th>
	 			<th>Status</th>
	 			<th>Date Updated</th>
	 		</tr>
	 	</thead>
	 	<tbody>
	 		<?php
	 			while ($row = mysqli_fetch_array($record)) {
	 				$unfinished  = $row['status'];
	 				if ($unfinished == 'On the process') {
	 					echo "<tr><form action='' method='POST'>
	 					<td>".$row['project']."</td>
	 					<td>".$row['developer']."</td>
	 					<td>".$row['zone']."</td>
	 					<td>".$row['cost']."</td>
	 					<td>".$row['status']."</td>
	 					<td>".$row['date']."</td>
		 				</form>
		 				</tr>";
	 				}
	 				
	 			}
  				
	 		 ?>
	 
	 	</tbody>
	 </table><br><br>

	  <!-- Completed citizens projects -->
	<?php
	 //select dbs
	mysqli_select_db($conn, 'e-governance');
	
	$sql = "SELECT * FROM proj_uploads";
	$record = mysqli_query($conn, $sql);

  ?>
	 <table style="background-color: white;">
   	<h2 style="text-align: center; color: red;">Completed citizens projects</h2>
	 	<thead>
	 		<tr style="color: white; background-color: #1f2e2e; text-align: center;">
	 			<th>Name</th>
	 			<th>Phone number</th>
	 			<th>Sub-county</th>
	 			<th>Area</th>
	 			<th>Project name</th>
	 			<th>Status</th>
	 			<th>Date updated</th>
	 		</tr>
	 	</thead>
	 	<tbody>
	 		<?php
	 			while ($row = mysqli_fetch_array($record)) {
	 				$finished  = $row['status'];
	 				if ($finished == 'Finished') {
	 					echo "<tr><form action='' method='POST'>
	 					<td>".$row['first']."</td>
	 					<td>".$row['Phonenumber']."</td>
	 					<td>".$row['sub_county']."</td>
	 					<td>".$row['area']."</td>
	 					<td>".$row['project']."</td>
	 					<td>".$row['status']."</td>
	 					<td>".$row['date']."</td>
		 				</form>
		 				</tr>";
	 				}
	 				
	 			}
  				
	 		 ?>
	 
	 	</tbody>
	 </table><br><br>

	 <!--uncompleted citizens projects-->
	<?php
	 //select dbs
	mysqli_select_db($conn, 'e-governance');
	
	$sql = "SELECT * FROM proj_uploads";
	$record = mysqli_query($conn, $sql);

  ?>
	 <table style="background-color: white;">
   	<h2 style="text-align: center; color: red;">Uncompleted citizens projects</h2>
	 	<thead>
	 		<tr style="color: white; background-color: #1f2e2e; text-align: center;">
	 			<th>Name</th>
	 			<th>Phone number</th>
	 			<th>Sub-county</th>
	 			<th>Area</th>
	 			<th>Project name</th>
	 			<th>Status</th>
	 			<th>Date updated</th>
	 		</tr>
	 	</thead>
	 	<tbody>
	 		<?php
	 			while ($row = mysqli_fetch_array($record)) {
	 				$ufinished  = $row['status'];
	 				if ($ufinished == 'On the process') {
	 					echo "<tr><form action='' method='POST'>
	 					<td>".$row['first']."</td>
	 					<td>".$row['Phonenumber']."</td>
	 					<td>".$row['sub_county']."</td>
	 					<td>".$row['area']."</td>
	 					<td>".$row['project']."</td>
	 					<td>".$row['status']."</td>
	 					<td>".$row['date']."</td>
		 				</form>
		 				</tr>";
	 				}
	 				
	 			}
  				
	 		 ?>
	 
	 	</tbody>
	 </table><br><br>
		
	</div>
	</div>

	
	

</div>

