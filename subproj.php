<?php

	$db = mysqli_connect("localhost", "root", "", "e-governance");

	if (isset($_POST['print'])) {

		$first = mysqli_real_escape_string($db, $_POST['first']);
		$gender = mysqli_real_escape_string($db, $_POST['gender']);
	    $Phonenumber = mysqli_real_escape_string($db, $_POST['Phonenumber']);
	    $sub_county = mysqli_real_escape_string($db, $_POST['sub_county']);
	    $area = mysqli_real_escape_string($db, $_POST['area']);
	    $project = mysqli_real_escape_string($db, $_POST['project']);
	    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

	    ob_start();
		require ('fpdf181/fpdf.php');
	    $pdf = new FPDF('p', 'mm', 'A3');
	    $pdf -> AddPage();
	    $pdf -> SetFont('Times','B','14');
	    $pdf -> Image('images/county.gif',140,10,30,0);
	    $pdf -> SetTextColor(153, 0, 0);
	    $pdf -> Cell(160,10, 'COUNTY GOVERNMENT OF TRANS-NZOIA', 0, 1);
	    $pdf -> Cell(160,10, 'P.O. Box 4211-30200, Kitale', 0, 1);
	    $pdf -> Cell(160,10, 'Project proposal from the citizen', 0, 1);
	    $pdf -> SetTextColor(0, 0, 0);
	    $pdf -> SetFont('Times','B','10');
	    $pdf -> SetFillColor(180, 180, 180);
		$pdf -> Cell(40,10, 'Citizens details', 1, 0, 0, 'B');
	    $pdf -> Cell(120,10, 'Descriptions', 1, 1, 0, 'B');

	    $pdf -> SetFillColor(230, 230, 230);
	    $pdf -> SetFont('Times','','12');
	    $pdf -> Cell(40,10, 'Name', 1, 0, 0,'B');
	    $pdf -> Cell(120,10, $first, 1, 1);

	    $pdf -> Cell(40,10, 'Gender', 1, 0, 0,'B');
	    $pdf -> Cell(120,10, $gender, 1, 1);

	    $pdf -> Cell(40,10, 'Phone number', 1, 0, 0,'B');
	    $pdf -> Cell(120,10, $Phonenumber, 1, 1);

	    $pdf -> Cell(40,10, 'Sub-county', 1, 0, 0,'B');
	    $pdf -> Cell(120,10, $sub_county, 1, 1);

	    $pdf -> Cell(40,10, 'Area', 1, 0, 0,'B');
	    $pdf -> Cell(120,10, $area, 1, 1);

	    $pdf -> Cell(40,10, 'Project title', 1, 0, 0,'B');
	    $pdf -> Cell(120,10, $project, 1, 1);

	    $pdf -> Cell(40,20, 'Description', 1, 0, 0,'B');
	    $pdf -> Cell(120,20, $image_text, 1, 1);

	    $pdf -> Cell(40,20, 'I Would like the county government to consider my submission based on the above details.', 2, 1);
	    $pdf -> output();
	    ob_end_flush();
	}
	


 ?>
