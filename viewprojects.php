<?php 
	
	//dbs connection
	$conn = mysqli_connect('localhost', 'root', '', 'e-governance');

	if (!$conn) {
		echo "Could not connect";
	}

	if (!mysqli_select_db($conn, 'e-governance')) {
		echo "Database not selected";
	}

	//select query
	$sql = "SELECT * FROM proj_uploads";
	$results = mysqli_query($conn, $sql);

	require ('fpdf181/fpdf.php');

	
	$pdf = new FPDF('p', 'mm', 'A3');
	$pdf -> AddPage();
	$pdf -> SetFont('Times','B','14');
	$pdf -> SetTextColor(0, 102, 34);
	$pdf -> SetFillColor(230, 230, 230);
	$pdf -> Image('images/county.gif',110,5,40,0);
	$pdf -> Image('images/county.png',80,100,100,0);
	$pdf -> Cell(230,30, '', 0, 1, 'C');
	$pdf -> Cell(230,10, 'COUNTY GOVERNMENT OF TRANS-NZOIA', 0, 1, 'C');
	$pdf -> Cell(230,10, 'P.O. Box 4211-30200, Kitale', 0, 1, 'C');
	$pdf -> Cell(230,10, 'Projects submited by the citizens to be considered by the county', 0, 1, 'C');
	//$pdf -> Cell(w, h, txt, border, ln, align, fill, link)
	$pdf -> SetFont('Times','B','14');
	$pdf -> SetTextColor(0, 0, 0);
	$pdf -> SetFillColor(255, 200, 102);
	$pdf -> Cell(30,10, 'Name', 1, 0, 0, 'B');
	$pdf -> Cell(40,10, 'Phone number', 1, 0, 0, 'B');
	$pdf -> Cell(40,10, 'Sub-county', 1, 0, 0, 'B');
	$pdf -> Cell(40,10, 'Area', 1, 0, 0, 'B');
	$pdf -> Cell(60,10, 'Project name', 1, 0, 0, 'B');
	$pdf -> Cell(40,10, 'Status', 1, 1, 0, 'B');

	$pdf -> SetFont('Times','','10');
	while ($row = mysqli_fetch_array($results)) {
		$pdf -> Cell(30,10, $row['first'] , 1, 0);
		$pdf -> Cell(40,10, $row['Phonenumber'] , 1, 0);
		$pdf -> Cell(40,10, $row['sub_county'] , 1, 0);
		$pdf -> Cell(40,10, $row['area'] , 1, 0);
		$pdf -> Cell(60,10, $row['project'] , 1, 0);
		$pdf -> Cell(40,10, $row['status'] , 1, 1);
	}

	$pdf -> output();

 ?>