<?php 

include_once 'header.php';

 ?>



<?php 

if (isset($_SESSION['u_id'])){
		echo '<div class="eserv">
		<h2 style="text-align: center;">E-services</h2>
		<form action="bslicense.php" method="POST">
			<button style="margin-left: 10%; border-radius: 50%; height: 10%;" class="btn btn-success">Permit of a single business</button>
		</form><br>
		<form action="projproposal.php" method="POST">
			<button style="margin-left: 10%; border-radius: 50%; height: 10%;" class="btn btn-primary">Submit project proposal</button>
		</form><br>
		<form action="jobs.php" method="POST">
			<button style="margin-left: 10%; border-radius: 50%; height: 10%;" class="btn btn-info">Available county jobs</button>
		</form><br>
		<form action="buildingCons.php" method="POST">
			<button style="margin-left: 10%; border-radius: 50%; height: 10%;" class="btn btn-danger">Building and construction approvals</button>
		</form><br>
		
		
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