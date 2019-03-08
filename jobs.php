<?php 

include_once 'header.php';
include 'admin/dbcon.php';

 ?>
 	<a href="projproposal.php"> <<-Prev page</a>
 	<div id="bsform">
	
	<!-- Display of available jobs -->
		<?php

			$select = "SELECT * FROM uploadjobs";
			$result = mysqli_query($conn, $select);

		 ?>

		 <h2 style="text-align: center;">THE COUNTY ASSEMBLY OF TRANS-NZOIA</h2>
		 <h2 style="text-align: center;">ADVERTISEMENT</h2>

		 <p>The County Assembly of Trans-Nzoia Service Board invites applications from suitably qualified candidates to fill the following <br> vacant positions:-</p>
		 <table>
		 	<thead>
		 		<tr style="color: white; background-color: #334d4d; text-align: center;">
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
		 </table> <a href="#">Download job specifications and requirements</a> <br>


 		<h2>Job application</h2>
 		
		<form action="inc/jobs1.php" method="POST">
			<select name="subcounty" value="Subcounty">
					<option>Select Sub-county</option>
					<option>Cherengani</option>
					<option>Endebes</option>
					<option>Kwanza</option>
					<option>Kiminini</option>
					<option>Saboti</option>
				</select>
			<input type="text" name="ward" placeholder="Ward">
			<input type="number" name="pnumber" placeholder="Phone number">

			<h3>Qualifications</h3>
			<h4>Do you have a degree?</h4>
			<input type="radio" name="degree" value="Yes">Yes
			<input type="radio" name="degree" value="No">No 
			<input type="radio" name="degree" value="Other">Other <br><br>
			<input type="text" name="school" placeholder="Your former college/university?">
			<input type="text" name="course" placeholder="Degree/diploma title"><br><br>
			<select name="jobselect">
					<option>Vacancies</option>
					<option>Accountant 1</option>
					<option>Accountant 2</option>
					<option>Senior Supplay Chain Officer</option>
					<option>Human Resource Officer 1</option>
					<option>Records Management officer</option>
					<option>Senior ICT officer</option>
					<option>Public Comm officer 1</option>
					<option>Records Management officer</option>
			</select><br><br>
			<h4>Upload application letter attached with CV</h4>
			<input type="file" name="doc" ><br><br>
			<button name="submit" class="btn btn-success" type="submit">Submit</button><br><br>
		</form>
 	</div>
	


	<!--<h2>Available jobs</h2>
	<h3>County drives</h3>
	<h3>cooks</h3>
	<h3>ECDE teachers</h3>
	<h3>security guards</h3>
	<h3>nurses</h3> -->

 <?php 

include_once 'footer.php';

 ?>