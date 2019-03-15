<?php
include 'header.php';
include 'projproposal1.php';

 ?>
 <a href="bslicense.php"> <<-Prev page</a>
 <a href="jobs.php">Next page ->></a>
<div id="projpro">
	<h2>Submit your project suggestion</h2>
<div style="color: red; font-size: 20px;"><?php echo $_SESSION['message'] ?></div>

	<form action="projproposal1.php" method="POST" enctype="multipart/form-data">
		<div class="row">
			<div class="col-6-xsmall">
				<input type="text" name="first" placeholder="First name" />
			</div><br><br>
			<input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female
			<div class="col-6-xsmall">
				<input type="number" name="Phonenumber" placeholder="Phone number" />
			</div><br><br>
			<div class="col-6-xsmall">
				<select name="sub_county" value="Subcounty">
					<option>Select Sub-county</option>
					<option>Cherengani</option>
					<option>Endebes</option>
					<option>Kwanza</option>
					<option>Kiminini</option>
					<option>Saboti</option>
				</select>
				
			</div><br><br>
			<div class="col-6-xsmall">
				<input type="text" name="area" placeholder="Area/village" />
			</div><br><br>
			<div class="col-6-xsmall">
				<input type="text" name="project" placeholder="Project name" />
			</div><br><br>
			<div class="col-6-xsmall">
				<input type="file" name="image" />
			</div>
			<div>
		      <textarea 
		      	id="text" 
		      	cols="40" 
		      	rows="4" 
		      	name="image_text" 
		      	placeholder="Describe the current situation"></textarea>
		  	</div>
		</div><br>
		<button type="submit" name="submit" class="btn btn-success">Submit</button>
		
	</form>
</div>


	<?php
include 'footer.php';

 ?>