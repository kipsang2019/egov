<?php 
	
	//dbs connection
	$conn = mysqli_connect('localhost', 'root', '', 'e-governance');


	//select query
	$sql = "SELECT * FROM uploadjobs";
	$results = mysqli_query($conn, $sql);

	require ('fpdf181/fpdf.php');


	$pdf = new FPDF('p', 'mm', 'A3');
	$pdf -> AddPage();
	$pdf -> SetFont('Arial','B','12');
	$pdf -> SetTextColor(25, 77, 51);
	$pdf -> SetFillColor(230, 230, 230);
	$pdf -> Image('..\images/county.gif',90,75,50,0);
	$pdf -> Cell(210,10, 'COUNTY GOVERNMENT OF TRANS-NZOIA', 0, 1, 0, 'C');
	$pdf -> Cell(210,10, 'P.O. Box 4211-30200, Kitale', 0, 1, 0, 'C');
	$pdf -> Cell(210,10, 'Avalilable vacancies', 0, 1, 0, 'C');

	//$pdf -> Cell(w, h, txt, border, ln, align, fill, link)
	$pdf -> SetTextColor(0, 0, 0);
	$pdf -> SetFillColor(255, 200, 102);
	$pdf -> Cell(100,10, 'Designation', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Scale', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Post NO', 1, 0, 0, 'B','C');
	$pdf -> Cell(50,10, 'Advert No', 1, 1, 0, 'B','C');

	$pdf -> SetFont('Arial','','8');
	while ($row = mysqli_fetch_array($results)) {
		$pdf -> Cell(100,10, $row['designation'] , 1, 0);
		$pdf -> Cell(30,10, $row['scale'] , 1, 0);
		$pdf -> Cell(30,10, $row['postsno'] , 1, 0);
		$pdf -> Cell(50,10, $row['advertno'] , 1, 1);
	}
	
	$pdf -> output();

 ?>