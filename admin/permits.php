<?php

	//dbs connection
	$conn = mysqli_connect('localhost', 'root', '', 'e-governance');

	//select query
	$sql = "SELECT * FROM license";
	$results = mysqli_query($conn, $sql);

	require ('fpdf181/fpdf.php');
	$pdf = new FPDF('p', 'mm', 'A4');
	

	$pdf -> SetFont('Arial','','10');
	while ($row = mysqli_fetch_array($results)) {
		$pdf -> AddPage();
		$pdf -> SetFont('Arial','B','12');
		$pdf -> Cell(180,10, 'COUNTY GOVERNMENT OF TRANS-NZOIA', 1, 1, 'C');
		$pdf -> Cell(180,10, 'Citizens Permit records', 1, 1, 'C');

		$pdf -> SetFont('Arial','','8');
		$pdf -> Cell(170,10, '', 2, 1, 'C');
		$pdf -> Cell(40,10, 'Business No.', 1, 0, 'C');
		$pdf -> Cell(80,10, $row['id'] , 1, 1, 'C');
		$pdf -> Cell(40,10, 'B/S Id No', 1, 0, 'C');
		$pdf -> Cell(80,10, $row['bs_id'] , 1, 1, 'C');
		$pdf -> Cell(40,10, 'B/S name', 1, 0, 'C');
		$pdf -> Cell(80,10, $row['bs_name'] , 1, 1, 'C');
		$pdf -> Cell(40,10, 'P.O. BOX', 1, 0, 'C');
		$pdf -> Cell(80,10, $row['boxno'] , 1, 1, 'C');
		$pdf -> Cell(40,10, 'Town', 1, 0, 'C');
		$pdf -> Cell(80,10, $row['town'] , 1, 1, 'C');

		$pdf -> Cell(170,10, '', 2, 1, 'C');
		$pdf -> Cell(40,10, 'Land zone', 1, 0, 'C');
		$pdf -> Cell(80,10, $row['Land_zone'] , 1, 1, 'C');
		$pdf -> Cell(40,10, 'Plot No.', 1, 0, 'C');
		$pdf -> Cell(80,10, $row['plot_no'] , 1, 1, 'C');
		$pdf -> Cell(40,10, 'B/S Adress', 1, 0, 'C');
		$pdf -> Cell(80,10, $row['physical_address'] , 1, 1, 'C');

		$pdf -> Cell(170,10, '', 2, 1, 'C');
		$pdf -> Cell(40,10, 'Activity code', 1, 0, 'C');
		$pdf -> Cell(130,10, $row['act_code'] , 1, 1, 'C');
		$pdf -> Cell(40,10, 'B/S activity descr', 1, 0, 'C');
		$pdf -> Cell(130,10, $row['bs_descr'] , 1, 0, 'C');

		$pdf -> Cell(170,10, '', 2, 1, 'C');
		$pdf -> Cell(40,10, 'B/S telephone', 1, 0, 'C');
		$pdf -> Cell(130,10, $row['bs_tel'] , 1, 1,'C');

		$pdf -> Cell(170,10, '', 2, 1, 'C');
		$pdf -> Cell(40,10, 'Premise area', 1, 0, 'C');
		$pdf -> Cell(80,10, $row['premise_area'] , 1, 1, 'C');
		$pdf -> Cell(40,10, 'No. of employees', 1, 0, 'C');
		$pdf -> Cell(80,10, $row['emp_no'] , 1, 1, 'C');

		$pdf -> Cell(170,10, '', 2, 1, 'C');
		$pdf -> Cell(40,10, 'personal ID', 1, 0, 'C');
		$pdf -> Cell(80,10, $row['id_no'] , 1, 1, 'C');
		$pdf -> Cell(40,10, 'Name of B/S rep', 1, 0, 'C');
		$pdf -> Cell(80,10, $row['bs_rep'] , 1, 1, 'C');
		$pdf -> Cell(40,10, 'P.O. BOX', 1, 0, 'C');
		$pdf -> Cell(80,10, $row['box1'] , 1, 1, 'C');
		$pdf -> Cell(40,10, 'Town', 1, 0, 'C');
		$pdf -> Cell(80,10, $row['destin'] , 1, 1, 'C');
		
	}
	$pdf -> output();

 ?>