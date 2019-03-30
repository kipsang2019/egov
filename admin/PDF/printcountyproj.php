<?php
	
	//dbs connection
	$conn = mysqli_connect('localhost', 'root', '', 'e-governance');

	//select query
	$sql = "SELECT * FROM countyprojetcs";
	$results = mysqli_query($conn, $sql);

	require ('..\fpdf181/fpdf.php');
	$pdf = new FPDF('p', 'mm', 'A3');
	

	$pdf -> SetFont('Arial','','10');

	$pdf -> AddPage();
	$pdf -> SetFont('Arial','B','12');
	$pdf -> SetTextColor(25, 77, 51);
	$pdf -> SetFillColor(230, 230, 230);
	$pdf -> Image('..\..\images/county.gif',110,60,50,0);
	$pdf -> Cell(260,10, 'COUNTY GOVERNMENT OF TRANS-NZOIA', 0, 1, 0, 'C');
	$pdf -> Cell(260,10, 'P.O. Box 4211-30200, Kitale', 0, 1, 0, 'C');
	$pdf -> Cell(260,10, 'Projects to be undertaken by the county government', 0, 1, 0, 'C');

	$pdf -> SetTextColor(0, 0, 0);
	$pdf -> SetFillColor(255, 200, 102);
	$pdf -> Cell(50,10, 'Project', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Type', 1, 0, 0, 'B','C');
	$pdf -> Cell(40,10, 'Developer', 1, 0, 0, 'B','C');
	$pdf -> Cell(50,10, 'Address', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Zone', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Plot location', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Status', 1, 1, 0, 'B','C');
	$pdf -> SetFont('Arial','','8');
	while ($row = mysqli_fetch_array($results)) {
		$pdf -> Cell(50,10, $row['project'] , 1, 0, 'C');
		$pdf -> Cell(30,10, $row['type'] , 1, 0, 'C');
		$pdf -> Cell(40,10, $row['developer'] , 1, 0, 'C');
		$pdf -> Cell(50,10, $row['address'] , 1, 0, 'C');
		$pdf -> Cell(30,10, $row['zone'] , 1, 0, 'C');
		$pdf -> Cell(30,10, $row['plotlocation'] , 1, 0, 'C');
		$pdf -> Cell(30,10, $row['status'] , 1, 1, 'C');
	}
	$pdf -> output();


?>