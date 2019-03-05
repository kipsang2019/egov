<?php 
	
	//dbs connection
	$conn = mysqli_connect('localhost', 'root', '', 'e-governance');


	//select query
	$sql = "SELECT * FROM jobs";
	$results = mysqli_query($conn, $sql);

	require ('fpdf181/fpdf.php');

	$pdf = new FPDF('p', 'mm', 'A4');
	$pdf -> AddPage();
	$pdf -> SetFont('Arial','B','8');
	$pdf -> Cell(190,10, 'COUNTY GOVERNMENT OF TRANS-NZOIA', 1, 1, 'C');
	$pdf -> SetFillColor(255,0);
	$pdf -> Cell(190,10, 'Applicants', 1, 1, 'C');
	$pdf -> Cell(10,10, 'No', 1, 0,'C');
	$pdf -> Cell(25,10, 'Sub-county', 1, 0,'C');
	$pdf -> Cell(25,10, 'Ward', 1, 0,'C');
	$pdf -> Cell(25,10, 'Phone number', 1, 0,'C');
	$pdf -> Cell(25,10, 'Degree?', 1, 0,'C');
	$pdf -> Cell(35,10, 'Course', 1, 0,'C');
	$pdf -> Cell(45,10, 'Applied job', 1, 1,'C');

	$pdf -> SetFont('Arial','','8');
	while ($row = mysqli_fetch_array($results)) {
		$pdf -> Cell(10,10, $row['id'] , 1, 0);
		$pdf -> Cell(25,10, $row['subcounty'] , 1, 0);
		$pdf -> Cell(25,10, $row['ward'] , 1, 0);
		$pdf -> Cell(25,10, $row['pnumber'] , 1, 0);
		$pdf -> Cell(25,10, $row['degree'] , 1, 0);
		$pdf -> Cell(35,10, $row['course'] , 1, 0);
		$pdf -> Cell(45,10, $row['jobselect'] , 1, 1);
	}
	
	$pdf -> output();

 ?>