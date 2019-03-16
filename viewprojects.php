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

	
	$pdf = new FPDF('p', 'mm', 'A4');
	$pdf -> AddPage();
	$pdf -> SetFont('Arial','B','8');
	$pdf -> Cell(190,10, 'COUNTY GOVERNMENT OF TRANS-NZOIA', 1, 1, 'C');
	$pdf -> Cell(190,10, 'Projects from the citizens', 1, 1, 'C');
	$pdf -> Cell(10,10, 'No', 1, 0);
	$pdf -> Cell(30,10, 'Name', 1, 0);
	$pdf -> Cell(30,10, 'Phone number', 1, 0);
	$pdf -> Cell(30,10, 'Sub-county', 1, 0);
	$pdf -> Cell(30,10, 'Area', 1, 0);
	$pdf -> Cell(30,10, 'Project name', 1, 0);
	$pdf -> Cell(30,10, 'Status', 1, 1);

	$pdf -> SetFont('Arial','','8');
	while ($row = mysqli_fetch_array($results)) {
		$pdf -> Cell(10,10, $row['id'] , 1, 0);
		$pdf -> Cell(30,10, $row['first'] , 1, 0);
		$pdf -> Cell(30,10, $row['Phonenumber'] , 1, 0);
		$pdf -> Cell(30,10, $row['sub_county'] , 1, 0);
		$pdf -> Cell(30,10, $row['area'] , 1, 0);
		$pdf -> Cell(30,10, $row['project'] , 1, 0);
		$pdf -> Cell(30,10, $row['status'] , 1, 1);
	}

	$pdf -> output();

 ?>