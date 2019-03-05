<?php 
	
	//dbs connection
	$conn = mysqli_connect('localhost', 'root', '', 'test');

	if (!$conn) {
		echo "Could not connect";
	}

	if (!mysqli_select_db($conn, 'test')) {
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

	$sql = "SELECT * FROM users";
	$results = mysqli_query($conn, $sql);
	
	$pdf -> AddPage();
	$pdf -> SetFont('Arial','B','8');
	$pdf -> Cell(170,10, 'Registered users', 1, 1, 'C');
	$pdf -> Cell(20,10, 'No', 1, 0, 'C');
	$pdf -> Cell(30,10, 'First name', 1, 0, 'C');
	$pdf -> Cell(30,10, 'Last name', 1, 0, 'C');
	$pdf -> Cell(60,10, 'E-mail', 1, 0, 'C');
	$pdf -> Cell(30,10, 'Username', 1, 1, 'C');

	$pdf -> SetFont('Arial','','8');
	while ($row = mysqli_fetch_array($results)) {
		$pdf -> Cell(20,10, $row['user_id'] , 1, 0, 'C');
		$pdf -> Cell(30,10, $row['user_first'] , 1, 0, 'C');
		$pdf -> Cell(30,10, $row['user_last'] , 1, 0, 'C');
		$pdf -> Cell(60,10, $row['user_email'] , 1, 0, 'C');
		$pdf -> Cell(30,10, $row['user_uid'] , 1, 1, 'C');
	}
	$pdf -> output();

 ?>