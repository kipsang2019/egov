<?php include 'header.php' ?>	
	
	<?php 
		include 'dbcon.php';
		
		$sql = "SELECT * FROM jobs";
		$record = mysqli_query($conn, $sql);
		
	 ?>
	 <h1>Jobs application panel panel</h1>
		<img style="width:20%; float: right;" src="../images/Occupations-Bartender-Male-Light-icon.png" alt="">
	<table style="width: 100%;">
		<caption><h2>APPLIED COUNTY JOBS</h2></caption>
		
		
		<thead>
			<a style="color: green;font-size: 20px;text-decoration: none;" href="../pdf/jobspdf.php" title="">Print applied jobs full list</a>
			<tr style="color: red; width: 100%; background-color: gold;">
				<th style="background-color: green;">NO</th>
				<th>Sub-county</th>
				<th>Ward</th>
				<th>Phone number</th>
				<th>Degree</th>
				<th>School</th>
				<th>Course</th>
				<th>Applied job</th>
				<th></th>
				<th>Update</th>
			</tr>
		</thead>
		

			<?php 
            while ($row = mysqli_fetch_array($record)) {
            	echo "<tr><form action='updatejob.php' method='POST'>
            	<td style='background-color: green;'>".$row['id']."</td>
            	<td><input type='text' name='subcounty' value='".$row['subcounty']."'></td>
            	<td><input type='text' name='ward' value='".$row['ward']."'></td>
            	<td><input type='number' name='pnumber' value='".$row['pnumber']."'></td>
            	<td><input type='text' name='degree' value='".$row['degree']."'></td>
            	<td><input type='text' name='school' value='".$row['school']."'></td>
            	<td><input type='text' name='course' value='".$row['course']."'></td>
            	<td><input type='text' name='jobselect' value='".$row['jobselect']."'></td>
            	<td><input type='hidden' name='id' value='".$row['id']."'></td>
            	<td><button type='submit' name='submit'><img style ='width:15px;' src='../images/apps (1).png'>Update</button></td>
            	</form></tr>";
            }

			 ?>
			
		
	</table>

<?php include 'footer.php'; ?>