<?php 
	
	//dbs connection
	$conn = mysqli_connect('localhost', 'root', '', 'e-governance');


	//select query
	$sql = "SELECT * FROM jobs";
	$results = mysqli_query($conn, $sql);

	require ('fpdf181/fpdf.php');

	$pdf = new FPDF('p', 'mm', 'A3');
	$pdf -> AddPage();
	$pdf -> SetFont('Arial','B','12');
	$pdf -> SetTextColor(25, 77, 51);
	$pdf -> SetFillColor(230, 230, 230);
	$pdf -> Image('..\images/county.gif',90,75,50,0);
	$pdf -> Cell(250,10, 'COUNTY GOVERNMENT OF TRANS-NZOIA', 0, 1, 0, 'C');
	$pdf -> Cell(250,10, 'P.O. Box 4211-30200, Kitale', 0, 1, 0, 'C');
	$pdf -> Cell(250,10, 'Avalilable vacancies', 0, 1, 0, 'C');

	//$pdf -> Cell(w, h, txt, border, ln, align, fill, link)
	$pdf -> SetTextColor(0, 0, 0);
	$pdf -> SetFillColor(100,180,180);
	$pdf -> Cell(10,10, 'No', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Sub-county', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Ward', 1, 0, 0, 'B','C');
	$pdf -> Cell(40,10, 'Phone number', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Degree?', 1, 0, 0, 'B','C');
	$pdf -> Cell(40,10, 'Course', 1, 0, 0, 'B','C');
	$pdf -> Cell(70,10, 'Applied job', 1, 1, 0, 'B','C');

	$pdf -> SetFont('Arial','','8');
	while ($row = mysqli_fetch_array($results)) {
		$pdf -> Cell(10,10, $row['id'] , 1, 0);
		$pdf -> Cell(30,10, $row['subcounty'] , 1, 0);
		$pdf -> Cell(30,10, $row['ward'] , 1, 0);
		$pdf -> Cell(40,10, $row['pnumber'] , 1, 0);
		$pdf -> Cell(30,10, $row['degree'] , 1, 0);
		$pdf -> Cell(40,10, $row['course'] , 1, 0);
		$pdf -> Cell(70,10, $row['jobselect'] , 1, 1);
	}
	
	$pdf -> output();

 ?>