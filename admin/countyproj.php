<?php
 include 'header.php';
 include 'dbcon.php';
 ?>



<h1>County projects</h1>
<table>
	<form action="req/countyproj.req.php" method="POST">
		<thead>
		<tr style="color: white; background-color: #1f2e2e; text-align: center;">
			<th>DETAILS</th>
			<th>DESCRIPTIONS</th>
		</tr>
	</thead>
	<thead>
		<tr>
			<th>Project</th>
			<td><input type="text" name="project"></td>
		</tr>
	</thead>
	<thead>
		<tr>
			<th>Type</th>
			<td><input type="text" name="type"></td>
		</tr>
	</thead>
	<thead>
		<tr>
			<th>Developer</th>
			<td><input type="text" name="developer"></td>
		</tr>
	</thead>
	<thead>
		<tr>
			<th>Address</th>
			<td><input type="text" name="address"></td>
		</tr>
	</thead>
	<thead>
		<tr>
			<th>Zone</th>
			<td><input type="text" name="zone"></td>
		</tr>
	</thead>
	<thead>
		<tr>
			<th>Plot location</th>
			<td><input type="text" name="plotlocation"></td>
		</tr>
	</thead>
	<thead>
		<tr>
			<th>Submit</th>
			<td><button class="btn btn-primary" type="submit" name="submit"><img style ='width:25px;' src='../images/add.png'>Add</button></td>
		</tr>
	</thead>
	</form>
</table><br><br>

<!--Fetch projetcs-->

<?php 

		//select dbs
		mysqli_select_db($conn, 'e-governance');
		
		$sql = "SELECT * FROM countyprojetcs";
		$record = mysqli_query($conn, $sql);
		
	 ?>
	
	
	 <table style="width: 70%;">
	 	<thead>
	 		<tr style="color: white; background-color: #1f2e2e; text-align: center;">
	 			
	 			<th>Project</th>
	 			<th>Type</th>
	 			<th>Developer</th>
	 			<th>Address</th>
	 			<th>Zone</th>
	 			<th>Plot location</th>
	 			<th>Status</th>
	 			<th></th>
	 			<th>Update</th>
	 			<th>Delete</th>
	 		</tr>
	 	</thead>
	 	<tbody>
	 		<?php
	 			while ($row = mysqli_fetch_array($record)) {
	 				echo "<tr><form action='req/updatecountyproj.php' method='POST'>
	 				
	 					<td><input type='text' name='project' value='".$row['project']."'></td>
	 					<td><input type='text' name='type' value='".$row['type']."'></td>
	 					<td><input type='text' name='developer' value='".$row['developer']."'></td>
	 					<td><input type='text' name='address' value='".$row['address']."'></td>
	 					<td><input type='text' name='zone' value='".$row['zone']."'></td>
	 					<td><input type='text' name='plotlocation' value='".$row['plotlocation']."'></td>
	 					<td><input type='text' name='status' value='".$row['status']."'></td>
	 					<td><input type='hidden' name='id' value='".$row['id']."'></td>
	 					<td><button class='btn btn-primary' type='submit' name='update'><img style ='width:15px;' src='../images/apps (4).png'>Update</button></td>
	 					<td><button class='btn btn-danger' type='submit' name='delete'><img style ='width:15px;' src='../images/Close-icon.png'>Delete</button></td>
	 				</form>
	 				</tr>";
	 			}
  				
	 		 ?>
	 
	 	</tbody>
	 </table><br>
	 <form style="float: right;"  action="PDF/printcountyproj.php" method="POST">
	 	<button class="btn btn-success" name="submit">print</button>
	 </form>


<?php include 'footer.php' ?>	