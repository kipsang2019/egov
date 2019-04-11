<?php 

include_once 'header.php';
include 'inc/db.inc.php';

 ?>

	<section class="main-cont">
		 <div class="main-wrapper">
		 	<h2 style="text-align: center;">Welcome to Trans-Nzoia county</h2>
		 	 <img style="margin-left: 40%; width: 20%;" src="images/COUNTY-LOGO-final.png" alt="">
		 </div>
		 
		 <!-- Display of available jobs -->
		<?php

			$select = "SELECT * FROM uploadjobs";
			$result = mysqli_query($conn, $select);

		 ?>

		 <h2 style="text-align: center;color:#ffff00; background: silver;">THE COUNTY ASSEMBLY OF TRANS-NZOIA</h2>
		 <h2 style="text-align: center;color:#ffff00; background: silver;">ADVERTISEMENT</h2>

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
		 <?php
		 	if (!isset($_SESSION['u_id'])) {
		 		echo "<h3 style='color:red;'>You have to login into the system to access e-services and application of jobs</h3>";
		 	}else{
		 		echo "<h3 style='color:red;'>Thank you for login. You can apply for these jobs under e-services</h3>";
		 	}

		   ?>
		 
	</section>

<?php 

include_once 'footer.php';
 ?>
