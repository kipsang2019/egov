<?php 

include_once 'header.php';
include 'inc/db.inc.php';

 ?>

	<section class="main-cont">
		 <div class="main-wrapper">
		 	<h2 style="text-align: center;">Welcome to Trans-Nzoia county</h2>
		 	 <img style="margin-left: 40%;" src="images/county.png" alt="">
		 </div>
		 
		 <!-- Display of available jobs -->
		<?php

			$select = "SELECT * FROM uploadjobs";
			$result = mysqli_query($conn, $select);

		 ?>

		 <h2 style="text-align: center;">THE COUNTY ASSEMBLY OF TRANS-NZOIA</h2>
		 <h2 style="text-align: center;">ADVERTISEMENT</h2>

		 <p>The County Assembly of Trans-Nzoia Service Board invites applications from suitably qualified candidates to fill the following <br> vacant positions:-</p>
		 <table style="background-color: white; margin-left:20%;">
		 	<thead>
		 		<tr style="color: white; background-color: #1f2e2e; text-align: center;">
		 			<th>No</th>
					<th>Designation</th>
					<th>Scale</th>
					<th>No of posts</th>
					<th>Advert No</th>
				</tr>
		 	</thead>
		 	<tbody>
		 		<?php

		 			while ($row = mysqli_fetch_array($result)) {
		 				echo "<tr><form>
		 					<td>".$row['id']."</td>
		 					<td>".$row['designation']."</td>
		 					<td>".$row['scale']."</td>
		 					<td>".$row['postsno']."</td>
		 					<td>".$row['advertno']."</td>
		 				</tr></form>";
		 			}

		 		 ?>
		 	</tbody>
		 </table>
		 <h3>You have to login into the system to access e-services and application of jobs</h3>
	</section>

<?php 

include_once 'footer.php';
 ?>
