<?php include 'header.php' ?>

<h1>Projects panel</h1>
 <img style="width:20%; float: right;" src="../images/Person-Male-Light-icon.png" alt="">
	<?php 
		$conn = mysqli_connect('localhost','root','','test');

		//select dbs
		mysqli_select_db($conn, 'test');
		
		$sql = "SELECT * FROM proj_uploads";
		$record = mysqli_query($conn, $sql);
		
	 ?>
		
	<table>
		<caption style="color: blue;"><h2>PROPOSED PROJECTS FROM THE CITIZENS</h2></caption>
		<a style="color: green;font-size: 20px;text-decoration: none;" href="../viewprojects.php" title="">Print full projetcs file</a>
		
		<thead style="width: 100%;">
			<tr style="color: red; background-color: gold;">
				<th style="background-color: #75a3a3;">PROJECT NO</th>
				<th>FIRST NAME</th>
				<th>LATS NAME</th>
				<th>PROJECT NAME</th>
				<th>STATUS</th>
				<th></th>
				<th>UPDATE</th>
				<th>DELETE</th>
			</tr>
		</thead>
		

			<?php 
            while ($row = mysqli_fetch_array($record)) {
            	echo "<tr style='width: 100%;'><form action='updateproj.php' method='POST'>
            	<td style='background-color: #75a3a3;'>".$row['id']."</td>
            	<td>".$row['first']."</td>
            	<td>".$row['Phonenumber']."</td>
            	<td>".$row['project']."</td>
            	<td><input type='text' name='status' value='".$row['status']."'></td>
            	<td><input type='hidden' name='id' value='".$row['id']."'></td>
            	<td><button type='submit' name='submit'><img style ='width:20px;' src='../images/apps (4).png'>Update</button></td>
            	<td><button type='submit' name='delete'><img style ='width:20px;' src='../images/Close-icon.png'>Delete</button></td>
            	</form></tr>";
            }

			 ?>
			
		
	</table>

 <?php include 'footer.php' ?>