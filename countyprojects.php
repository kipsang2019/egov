<?php
	include 'header.php';
	include 'inc/db.inc.php';

	//select dbs
	mysqli_select_db($conn, 'e-governance');
	
	$sql = "SELECT * FROM countyprojetcs";
	$record = mysqli_query($conn, $sql);

  ?>
  <div class="main-cont">

  	<table style="margin-left: 10%;background-color: white;">
   	<h2 style="text-align: center;">Projects to be undertaken by the county</h2>
   	<form action="admin/PDF/printcountyproj.php" method="POST">
	 	<button style="margin-left: 10%; border-radius: 50%; height: 10%;" class="btn btn-success" name="submit">print</button>
	 </form>
	 	<thead>
	 		<tr style="color: white; background-color: #1f2e2e; text-align: center;">
	 			<th>Project</th>
	 			<th>Type</th>
	 			<th>Contractor</th>
	 			<th>Address</th>
	 			<th>Zone</th>
	 			<th>Plot location</th>
	 			<th>Cost(KSH)</th>
	 			<th>Status</th>
	 		</tr>
	 	</thead>
	 	<tbody>
	 		<?php
	 			while ($row = mysqli_fetch_array($record)) {
	 				echo "<tr><form action='' method='POST'>
	 					
	 					<td>".$row['project']."</td>
	 					<td>".$row['type']."</td>
	 					<td>".$row['developer']."</td>
	 					<td>".$row['address']."</td>
	 					<td>".$row['zone']."</td>
	 					<td>".$row['plotlocation']."</td>
	 					<td>".$row['cost']."</td>
	 					<td>".$row['status']."</td>
	 				</form>
	 				</tr>";
	 			}
  				
	 		 ?>
	 
	 	</tbody>
	 </table><br><br>
	
	<table  style="margin-left: 10%;background-color: white;">
		<h2>The most expensive projects</h2>
		<thead>
			<tr style="color: white; background-color: #1f2e2e; text-align: center;">
	 			<th>Project</th>
	 			<th>Type</th>
	 			<th>Contractor</th>
	 			<th>Address</th>
	 			<th>Zone</th>
	 			<th>Plot location</th>
	 			<th>Cost(KSH)</th>
	 			<th>Status</th>
	 		</tr>
		</thead>
		<tbody>
			<?php 
			 	$sql1 = "SELECT * FROM countyprojetcs";
				$record1 = mysqli_query($conn, $sql1);
				
						$total = 0;
						for ($i=0; $i < 5; $i++) { 
						 	$total = $total + $i;
						 }
						echo $total."<br>";

					while ($r = mysqli_fetch_array($record1)) {
						
						if ($r['cost'] > 5000000) {
							
							echo "<tr><form action='' method='POST'>
			 					
			 					<td>".$r['project']."</td>
			 					<td>".$r['type']."</td>
			 					<td>".$r['developer']."</td>
			 					<td>".$r['address']."</td>
			 					<td>".$r['zone']."</td>
			 					<td>".$r['plotlocation']."</td>
			 					<td>".$r['cost']."</td>
			 					<td>".$r['status']."</td>
			 				</form>
			 				</tr>";

						}
						
					}
			
	  ?>
		</tbody>
	</table><br><br>

	 
  </div>

   

<?php include 'footer.php'; ?>