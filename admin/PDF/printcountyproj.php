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
	$pdf -> SetFont('Times','B','14');
	//$pdf -> SetLeftMargin(10);
	$pdf -> SetTextColor(25, 77, 51);
	$pdf -> SetFillColor(230, 230, 230);
	$pdf -> Image('..\..\images/county.gif',120,10,50,0);
	$pdf -> Ln(43);
	$pdf -> Cell(280,10, 'COUNTY GOVERNMENT OF TRANS-NZOIA', 0, 1, 'C');
	$pdf -> Cell(280,10, 'P.O. Box 4211-30200, Kitale', 0, 1, 'C');
	$pdf -> Ln(20);
	$pdf -> Cell(280,20, 'Projects to be undertaken by the county government (All projects)', 1, 1, 'C');
	//$pdf -> Image('..\..\images/county.png',100,170,130,40);
	$pdf -> SetTextColor(0, 0, 0);
	$pdf -> SetFillColor(255, 200, 102);
	$pdf -> Cell(50,10, 'Project', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Type', 1, 0, 0, 'B','C');
	$pdf -> Cell(40,10, 'Developer', 1, 0, 0, 'B','C');
	$pdf -> Cell(50,10, 'Address', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Zone', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Plot location', 1, 0, 0, 'B','C');
	$pdf -> Cell(20,10, 'Cost', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Status', 1, 1, 0, 'B','C');
	$pdf -> SetFont('Arial','','8');
	while ($row = mysqli_fetch_array($results)) {
		$pdf -> Cell(50,10, $row['project'] , 1, 0, 'C');
		$pdf -> Cell(30,10, $row['type'] , 1, 0, 'C');
		$pdf -> Cell(40,10, $row['developer'] , 1, 0, 'C');
		$pdf -> Cell(50,10, $row['address'] , 1, 0, 'C');
		$pdf -> Cell(30,10, $row['zone'] , 1, 0, 'C');
		$pdf -> Cell(30,10, $row['plotlocation'] , 1, 0, 'C');
		$pdf -> Cell(20,10, $row['cost'] , 1, 0, 'C');
		$pdf -> Cell(30,10, $row['status'] , 1, 1, 'C');
	}

	$pdf -> SetFont('Times','B','10');
	$pdf -> Cell(230,10, 'Total Cost', 1, 0, 'C');
	$pdf -> Cell(50,10, '', 1, 1, 'L');

	/* most expensive projects */

	$sql1 = "SELECT * FROM countyprojetcs";
	$result = mysqli_query($conn, $sql1);

	$pdf -> Ln(20);
	$pdf -> SetFont('Times','B','14');
	$pdf -> SetTextColor(25, 77, 51);
	$pdf -> SetFillColor(230, 230, 230);
	$pdf -> Cell(280,20, 'PROJECTS SUMMARY', 0, 1, 'C');
	$pdf -> Cell(280,20, 'Expensive Projects', 1, 1, 'C');
	$pdf -> SetTextColor(0, 0, 0);
	$pdf -> SetFillColor(255, 200, 102);
	$pdf -> Cell(50,10, 'Project', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Type', 1, 0, 0, 'B','C');
	$pdf -> Cell(40,10, 'Developer', 1, 0, 0, 'B','C');
	$pdf -> Cell(50,10, 'Address', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Zone', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Plot location', 1, 0, 0, 'B','C');
	$pdf -> Cell(20,10, 'Cost', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Status', 1, 1, 0, 'B','C');
	$pdf -> SetFont('Arial','','8');
	while ($row = mysqli_fetch_array($result)) {
		$expensive  = $row['cost'];
		if ($expensive > 5000000) {
			$pdf -> Cell(50,10, $row['project'] , 1, 0, 'C');
			$pdf -> Cell(30,10, $row['type'] , 1, 0, 'C');
			$pdf -> Cell(40,10, $row['developer'] , 1, 0, 'C');
			$pdf -> Cell(50,10, $row['address'] , 1, 0, 'C');
			$pdf -> Cell(30,10, $row['zone'] , 1, 0, 'C');
			$pdf -> Cell(30,10, $row['plotlocation'] , 1, 0, 'C');
			$pdf -> Cell(20,10, $row['cost'] , 1, 0, 'C');
			$pdf -> Cell(30,10, $row['status'] , 1, 1, 'C');
		}
		
	}

	$pdf -> SetFont('Times','B','10');
	$pdf -> Cell(230,10, 'Total Cost', 1, 0, 'C');
	$pdf -> Cell(50,10, '', 1, 1, 'L');

	/* finished projects */
	$sql2 = "SELECT * FROM countyprojetcs";
	$result1 = mysqli_query($conn, $sql2);

	$pdf -> Ln(20);
	$pdf -> SetFont('Times','B','14');
	$pdf -> SetTextColor(25, 77, 51);
	$pdf -> Cell(280,20, 'Completed Projects', 1, 1, 'C');
	$pdf -> SetTextColor(0, 0, 0);
	$pdf -> SetFillColor(255, 200, 102);
	$pdf -> Cell(50,10, 'Project', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Type', 1, 0, 0, 'B','C');
	$pdf -> Cell(40,10, 'Developer', 1, 0, 0, 'B','C');
	$pdf -> Cell(50,10, 'Address', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Zone', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Plot location', 1, 0, 0, 'B','C');
	$pdf -> Cell(20,10, 'Cost', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Status', 1, 1, 0, 'B','C');

	$pdf -> SetFont('Arial','','8');
	while ($row = mysqli_fetch_array($result1)) {
		$finished  = $row['status'];
		if ($finished == 'Finished') {
			$pdf -> Cell(50,10, $row['project'] , 1, 0, 'C');
			$pdf -> Cell(30,10, $row['type'] , 1, 0, 'C');
			$pdf -> Cell(40,10, $row['developer'] , 1, 0, 'C');
			$pdf -> Cell(50,10, $row['address'] , 1, 0, 'C');
			$pdf -> Cell(30,10, $row['zone'] , 1, 0, 'C');
			$pdf -> Cell(30,10, $row['plotlocation'] , 1, 0, 'C');
			$pdf -> Cell(20,10, $row['cost'] , 1, 0, 'C');
			$pdf -> Cell(30,10, $row['status'] , 1, 1, 'C');
		}

		$row = mysqli_fetch_array($result);
		$sum = $row['cost'];
		for ($i=0; $i < 5; $i++) { 
			$sum = $sum + $i.$row['cost'];
		}
		
	}
	$pdf -> SetFont('Times','B','10');
	$pdf -> Cell(230,10, 'Total Cost', 1, 0, 'C');
	$pdf -> Cell(50,10, $sum, 1, 1, 'L');


	/*uncompleted projects*/

	$sql3 = "SELECT * FROM countyprojetcs";
	$result2 = mysqli_query($conn, $sql3);

	$pdf -> Ln(20);
	$pdf -> SetFont('Times','B','14');
	$pdf -> SetTextColor(25, 77, 51);
	$pdf -> Cell(280,20, 'Pending Projects', 1, 1, 'C');
	$pdf -> SetTextColor(0, 0, 0);
	$pdf -> SetFillColor(255, 200, 102);
	$pdf -> Cell(50,10, 'Project', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Type', 1, 0, 0, 'B','C');
	$pdf -> Cell(40,10, 'Developer', 1, 0, 0, 'B','C');
	$pdf -> Cell(50,10, 'Address', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Zone', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Plot location', 1, 0, 0, 'B','C');
	$pdf -> Cell(20,10, 'Cost', 1, 0, 0, 'B','C');
	$pdf -> Cell(30,10, 'Status', 1, 1, 0, 'B','C');

	$pdf -> SetFont('Arial','','8');
	while ($row = mysqli_fetch_array($result2)) {
		$unfinished  = $row['status'];
		if ($unfinished == 'On the process') {
			$pdf -> Cell(50,10, $row['project'] , 1, 0, 'C');
			$pdf -> Cell(30,10, $row['type'] , 1, 0, 'C');
			$pdf -> Cell(40,10, $row['developer'] , 1, 0, 'C');
			$pdf -> Cell(50,10, $row['address'] , 1, 0, 'C');
			$pdf -> Cell(30,10, $row['zone'] , 1, 0, 'C');
			$pdf -> Cell(30,10, $row['plotlocation'] , 1, 0, 'C');
			$pdf -> Cell(20,10, $row['cost'] , 1, 0, 'C');
			$pdf -> Cell(30,10, $row['status'] , 1, 1, 'C');
		}

		$row = mysqli_fetch_array($result);
		$sum = $row['cost'];
		for ($i=0; $i < 5; $i++) { 
			$sum = $sum + $i.$row['cost'];
		}
		
	}
	$pdf -> SetFont('Times','B','10');
	$pdf -> Cell(230,10, 'Total Cost', 1, 0, 'C');
	$pdf -> Cell(50,10, $sum, 1, 1, 'L');

	$pdf -> output();


?>