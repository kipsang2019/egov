<?php
include 'header.php';
include 'projproposal1.php';

 ?>
 <a href="bslicense.php"> <<-Prev page</a>
 <a href="jobs.php">Next page ->></a>
<div id="projpro">
	<h2>Submit your project suggestion</h2>

	<table>
	<form action="projproposal1.php" method="POST">
		<thead>
		<tr style="color: white; background-color: #1f2e2e; text-align: center;">
			<th>DETAILS</th>
			<th>DESCRIPTIONS</th>
		</tr>
	</thead>
	<thead>
		<tr>
			<th>First name</th>
			<td><input type="text" name="first"></td>
		</tr>
	</thead>
	<thead>
		<tr>
			<th>Gender</th>
			<td><input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female
			</td>	
		</tr>
	</thead>
	<thead>
		<tr>
			<th>Phone number</th>
			<td><input type="number" name="Phonenumber"></td>
		</tr>
	</thead>
	<thead>
		<tr>
			<th>Sub-county</th>
			<td>
				<select name="sub_county" value="Subcounty">
					<option>Select Sub-county</option>
					<option>Cherengani</option>
					<option>Endebes</option>
					<option>Kwanza</option>
					<option>Kiminini</option>
					<option>Saboti</option>
				</select>
			</td>
		</tr>
	</thead>
	<thead>
		<tr>
			<th>Area/village</th>
			<td><input type="text" name="area"></td>
		</tr>
	</thead>
	<thead>
		<tr>
			<th>Project name</th>
			<td><input type="text" name="project"></td>
		</tr>
	</thead>
	<thead>
		<tr>
			<th>Describe project suggestion</th>
			<td>
				<textarea 
			      	id="text" 
			      	cols="40" 
			      	rows="4" 
			      	name="image_text">
		      </textarea>
			</td>
		</tr>
	</thead>
	<thead>
		<tr>
			<th>Photo</th>
			<td><input type="file" name="image"></td>
		</tr>
	</thead>
	<thead>
		<tr>
			<th>Submit</th>
			<td>
				<button class="btn btn-primary" type="submit" name="submit">Submit</button>
			</td>
		</tr>
	</thead>
	</form>
</table><br><br>
</div>

	<?php
include 'footer.php';

 ?>