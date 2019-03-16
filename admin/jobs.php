<?php 
include 'header.php';
include 'dbcon.php';
?>	
	 
		<img style="width:20%; float: right;" src="../images/Occupations-Bartender-Male-Light-icon.png" alt="">
		<h2 style="margin-left: 20%;">INSERT VACANCIES</h2>

		<table style="border: 5px groove  white;background-color: #99ffcc;">
			
			<thead>
				<tr style="color: white; background-color: #1f2e2e; text-align: center;">
					<th>Designation</th>
					<th>Scale</th>
					<th>No of posts</th>
					<th>Advert No</th>
					<th>Submit</th>
				</tr>
			</thead>
			<tbody>
				<tr><form action="jobupload.php" method="POST">
					<div class="alert alert-error">
						<?php echo $msg ?></div>
					<td><input type="text" name="designation"></td>
					<td><input type="number" name="scale"></td>
					<td><input type="number" name="postsno"></td>
					<td><input type="text" name="advertno"></td>
					<td><button class="btn btn-primary" name="submit"><img style ='width:25px;' src='../images/add.png'>Add</button></td>
					</form>
				</tr>
			</tbody>
		</table><br>

		<?php

			$select = "SELECT * FROM uploadjobs";
			$result = mysqli_query($conn, $select);

		 ?>

		<h2 style="margin-left: 20%;">VACANCIES</h2>
		 <table style="border: 5px groove  white;background-color: #99ffcc;">
		 	<thead>
		 		<tr style="color: white; background-color: #1f2e2e; text-align: center;">
		 			<th>No</th>
					<th>Designation</th>
					<th>Scale</th>
					<th>No of posts</th>
					<th>Advert No</th>
					<th></th>
					<th>update</th>
					<th>Delete</th>
				</tr>
		 	</thead>
		 	<tbody>
		 		<?php

		 			while ($row = mysqli_fetch_array($result)) {
		 				echo "<tr><form action='updatevacant.php' method='POST'>
		 					<td>".$row['id']."</td>
		 					<td><input type='text' name='designation' value='".$row['designation']."'></td>
		 					<td><input type='number' name='scale' value='".$row['scale']."'></td>
		 					<td><input type='number' name='postsno' value='".$row['postsno']."'></td>
		 					<td><input type='text' name='advertno' value='".$row['advertno']."'></td>
		 					<td><input type='hidden' name='id' value='".$row['id']."'></td>
		 					<td><button class='btn btn-primary' type='submit' name='submit'><img style ='width:15px;' src='../images/apps (4).png'>update</button></td>
		 					<td><button onclick='del()' class='btn btn-danger' type='submit' name='delete'><img style ='width:15px;' src='../images/Close-icon.png'>delete</button></td>
		 				</tr></form>";
		 			}

		 		 ?>
		 	</tbody>
		 </table>

	<?php 
		
		$sql = "SELECT * FROM jobs";
		$record = mysqli_query($conn, $sql);
		
	 ?>
	 <h1>Jobs application panel</h1>
		
	<table style="width: 70%;background-color: #99ffcc;">
	<h2>APPLIED COUNTY JOBS</h2>
		
		
		<thead>
			<form action="../pdf/jobspdf.php" method="POST">
				<button class="btn btn-primary">Print</button>
			</form>
			<tr style="color: white; width: 80%; background-color: #1f2e2e;">
				<th style="background-color: green;">NO</th>
				<th>Name</th>
				<th>Ward</th>
				<th>Phone number</th>
				<th>Degree</th>
				<th>School</th>
				<th>Course</th>
				<th>Applied job</th>
				<th>Status</th>
				<th></th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
		</thead>
		

			<?php 
            while ($row = mysqli_fetch_array($record)) {
            	echo "<tr><form action='updatejob.php' method='POST'>
            	<td style='background-color: green;'>".$row['id']."</td>
            	<td>".$row['subcounty']."</td>
            	<td>".$row['ward']."</td>
            	<td>".$row['pnumber']."</td>
            	<td>".$row['degree']."</td>
            	<td>".$row['school']."</td>
            	<td>".$row['course']."</td>
            	<td>".$row['jobselect']."</td>
            	<td><input type='text' name='status' value='".$row['status']."'></td>
            	<td><input type='hidden' name='id' value='".$row['id']."'></td>
            	<td><button class='btn btn-primary' type='submit' name='submit'><img style ='width:15px;' src='../images/apps (4).png'>update</button></td>
            	<td><button class='btn btn-danger' type='submit' name='delete'><img style ='width:15px;' src='../images/Close-icon.png'>delete</button></td>
            	</form></tr>";
            }

			 ?>
			
		
	</table>

<?php include 'footer.php'; ?>