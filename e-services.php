<?php 

include_once 'header.php';

 ?>

<?php 

if (isset($_SESSION['u_id'])){
		echo '<div class="eserv">
		<h2>E-services</h2>
		<li><a href="bslicense.php">License of single business</a></li><br><br>
		<li><a href="projproposal.php">Submit project proposal</a></li><br><br>
		<li><a href="jobs.php">Available county jobs</a></li><br><br>
		<li><a href="#">Application of booking grounds for concerts and shows</a></li><br><br>
		<li><a href="#">Booking county stalls</a></li><br><br>
		<li><a href="#">Payment of revenue</a></li><br><br>	
		<li><a href="#">County tenders</a></li><br><br>
		<li><a href="#">Building and road construction approvals</a></li><br><br>
		
	</div>
		';
	} else{
		echo '<ul>
					<li></li> <a href="index.php">Home</a></li>
				</ul>';
	}
	

?>
	



 <?php 

include_once 'footer.php';

 ?>