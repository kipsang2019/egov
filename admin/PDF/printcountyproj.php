<?php
	
	//dbs connection
	$conn = mysqli_connect('localhost', 'root', '', 'e-governance');

	//select query
	$sql = "SELECT * FROM countyprojetcs";
	$results = mysqli_query($conn, $sql);

	require ('..\fpdf181/fpdf.php');
	$pdf = new FPDF('p', 'mm', 'A4');
	

	$pdf -> SetFont('Arial','','10');

	$pdf -> AddPage();
	$pdf -> SetFont('Arial','B','12');

	$pdf -> Cell(180,20, 'COUNTY GOVERNMENT OF TRANS-NZOIA', 1, 1, 'C');
	$pdf -> Cell(180,20, 'County projects', 1, 1, 'C');
	$pdf -> SetFont('Arial','B','8');
	$pdf -> Cell(160,10, '', 2, 1, 'C');
	$pdf -> Cell(30,10, 'Project', 1, 0, 'C');
	$pdf -> Cell(20,10, 'Type', 1, 0, 'C');
	$pdf -> Cell(30,10, 'Developer', 1, 0, 'C');
	$pdf -> Cell(30,10, 'Address', 1, 0, 'C');
	$pdf -> Cell(20,10, 'Zone', 1, 0, 'C');
	$pdf -> Cell(20,10, 'Plot location', 1, 0, 'C');
	$pdf -> Cell(30,10, 'Status', 1, 1, 'C');
	$pdf -> SetFont('Arial','','8');
	while ($row = mysqli_fetch_array($results)) {
		$pdf -> Cell(30,10, $row['project'] , 1, 0, 'C');
		$pdf -> Cell(20,10, $row['type'] , 1, 0, 'C');
		$pdf -> Cell(30,10, $row['developer'] , 1, 0, 'C');
		$pdf -> Cell(30,10, $row['address'] , 1, 0, 'C');
		$pdf -> Cell(20,10, $row['zone'] , 1, 0, 'C');
		$pdf -> Cell(20,10, $row['plotlocation'] , 1, 0, 'C');
		$pdf -> Cell(30,10, $row['status'] , 1, 1, 'C');
	}
	$pdf -> output();


?>