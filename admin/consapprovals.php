<?php include 'header.php' ?>

<h2>Building and construction approvals</h2>

<?php 

	include 'dbcon.php';

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
	 			<th></th>
	 			<th>Update</th>
	 			<th>Delete</th>
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


<?php include 'footer.php' ?>	

