<?php include 'header.php'; ?>



<h1>Apply for Contruction approvals</h1>
<table>
	<form action="inc/buildingapproval.php" method="POST">
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
			<th>Phone number</th>
			<td><input type="number" name="phonenumber"></td>
		</tr>
	</thead>
	<thead>
		<tr>
			<th>Plot no</th>
			<td><input type="number" name="plotno"></td>
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
			<th>Section</th>
			<td><input type="number" name="section"></td>
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
			<th>Qualifications and supporting documents</th>
			<td><input type="file" name="file"></td>
		</tr>
	</thead>
	<thead>
		<tr>
			<th>Submit</th>
			<td><button class="btn btn-info" type="submit" name="submit"><img style ='width:25px;' src='../images/add.png'>Submit</button></td>
		</tr>
	</thead>
	</form>
</table><br><br>
<h1>List of submitted construction permits</h1>

<?php 

	include 'admin/dbcon.php';

	$sql = "SELECT * FROM approvals";
	$results = mysqli_query($conn, $sql);

 ?>

<table style="width: 90%;">
	 	<thead>
	 		<tr style="color: white; background-color: #1f2e2e; text-align: center;">
	 			
	 			<th>Project</th>
	 			<th>Type</th>
	 			<th>Developer</th>
	 			<th>Address</th>
	 			<th>Phone number</th>
	 			<th>Plot no</th>
	 			<th>Zone</th>
	 			<th>Section</th>
	 			<th>Plot location</th>
	 			<th>Status</th>
	 		</tr>
	 	</thead>
	 	<tbody>
	 		<?php
	 			while ($row = mysqli_fetch_array($results)) {
	 				echo "<tr><form action='req/updateapprovals.php' method='POST'>
	 				
	 					<td>".$row['project']."</td>
	 					<td>".$row['type']."</td>
	 					<td>".$row['developer']."</td>
	 					<td>".$row['address']."</td>
	 					<td>".$row['phonenumber']."</td>
	 					<td>".$row['plotno']."</td>
	 					<td>".$row['zone']."</td>
	 					<td>".$row['section']."</td>
	 					<td>".$row['plotlocation']."</td>
	 					<td>".$row['status']."</td>
	 				</form>
	 				</tr>";
	 			}
  				
	 		 ?>
	 
	 	</tbody>
	 </table><br>

<?php include 'footer.php'; ?>