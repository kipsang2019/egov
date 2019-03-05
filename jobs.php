<?php 

include_once 'header.php';


 ?>
 	<a href="projproposal.php"> <<-Prev page</a>
 	<div id="bsform">
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