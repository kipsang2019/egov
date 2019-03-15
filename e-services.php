<?php 

include_once 'header.php';

 ?>



<?php 

if (isset($_SESSION['u_id'])){
		echo '<div class="eserv">
		<h2>E-services</h2>
		<form action="bslicense.php" method="POST">
			<button class="btn btn-primary">Permit of a single business</button>
		</form><br>
		<form action="projproposal.php" method="POST">
			<button class="btn btn-primary">Submit project proposal</button>
		</form><br>
		<form action="jobs.php" method="POST">
			<button class="btn btn-primary">Available county jobs</button>
		</form><br>
		<form action="buildingCons.php" method="POST">
			<button class="btn btn-primary">Building and construction approvals</button>
		</form><br>
		
		<li><a href="#">Application of booking grounds for concerts and shows</a></li><br><br>
		<li><a href="#">Booking county stalls</a></li><br><br>
		<li><a href="#">Payment of revenue</a></li><br><br>	
		<li><a href="#">County tenders</a></li><br><br>
		
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