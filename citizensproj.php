<?php
	include 'header.php';
	include 'inc/db.inc.php';

	//select dbs
	mysqli_select_db($conn, 'e-governance');
	
	$sql = "SELECT * FROM proj_uploads";
	$record = mysqli_query($conn, $sql);

  ?>
  <div class="main-cont">

  	<table style="background-color: white;margin-left: 10%">
   	<h2 style="text-align: center;">Projects to be undertaken by the county</h2>
   	<form action="viewprojects.php" method="POST">
	 	<button style="margin-left: 10%; border-radius: 50%; height: 10%;" class="btn btn-success" name="submit">print</button>
	 </form>
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
  				
	 		 ?>
	 
	 	</tbody>
	 </table><br><br>
	
<?php include 'footer.php'; ?>