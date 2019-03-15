
<?php 

include_once 'header.php';

 ?>
	
<a href="projproposal.php">Next page ->></a>
<div id="lice">

	<h2>Permit of a single business</h2>
	<h3>Make sure that you download the license form after submiting</h3>
	<form action="licensepdf.php" method="POST" accept-charset="utf-8">
		<input type="number" name="bs_id" placeholder="Business Id No.">
		<input type="text" name="bs_name" placeholder="Business name.">
		<input type="number" name="boxno" placeholder="P.O. BOX"><br><br>
		<input type="text" name="town" placeholder="Town">
		<input type="text" name="Land_zone" placeholder="Land zone.">
		<input type="number" name="plot_no" placeholder="Plot No."><br><br>
		<input type="text" name="physical_address" placeholder="Business Physical address">
		<input type="text" name="act_code" placeholder="Activity code">
		<textarea name="bs_descr" cols="40" rows="6" placeholder="Business activity description"></textarea><br><br>
		<input type="number" name="bs_tel" placeholder="Business telephone No.">
		<input type="text" name="premise_area" placeholder="Area of premise">
		<input type="number" name="emp_no" placeholder="Number of employees"><br><br>
		<input type="number" name="id_no" placeholder="Personal Id No.">
		<input type="text" name="bs_rep" placeholder="Name of Business representative">
		<input type="number" name="box1" placeholder="P.O. BOX"><br><br>
		<input type="text" name="destin" placeholder="Town">
		<button type="submit" name="submit">Submit License</button><br><br>
	</form>
</div>


<?php 

include_once 'footer.php';	
 ?>
 