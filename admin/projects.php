<?php include 'header.php' ?>
<script src="..\del.js" type="text/javascript" charset="utf-8" async defer></script>
<h1 style="text-align: center;">Projects panel</h1>
 <img style="width:20%; float: right;" src="../images/Person-Male-Light-icon.png" alt="">
	<?php 
		$conn = mysqli_connect('localhost','root','','e-governance');

		//select dbs
		mysqli_select_db($conn, 'e-governance');
		
		$sql = "SELECT * FROM proj_uploads";
		$record = mysqli_query($conn, $sql);
		
	 ?>
		
	<h2>PROPOSED PROJECTS FROM THE CITIZENS</h2>
	<form style="margin-left:10%;" action="../viewprojects.php" method="POST">
			<button class="btn btn-info">Print</button>
	</form>
	<table style="margin-left: 10%;">
		
		<thead  style="width: 80%;">
			<tr style="color: red; background-color: gold;">
				<th>FIRST NAME</th>
				<th>PHONE NUMBER</th>
				<th>SUB-COUNTY</th>
				<th>AREA/VILLAGE</th>
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
            	<td>".$row['first']."</td>
            	<td>".$row['Phonenumber']."</td>
            	<td>".$row['sub_county']."</td>
            	<td>".$row['area']."</td>
            	<td>".$row['project']."</td>
            	<td><input type='text' name='status' value='".$row['status']."'></td>
            	<td><input type='hidden' name='id' value='".$row['id']."'></td>
            	<td><button class='btn btn-primary' type='submit' name='submit'><img style ='width:20px;' src='../images/apps (4).png'>Update</button></td>
            	<td><button id='delete' onclick='click()' class='btn btn-danger' type='submit' name='delete'><img style ='width:20px;' src='../images/Close-icon.png'>Delete</button></td>
            	</form></tr>";
            }

			 ?>
			
		
	</table>
	<form style="margin-left:60%;" action="../viewprojects.php" method="POST">
			<button class="btn btn-info">Print</button>
	</form>

 <?php include 'footer.php' ?>