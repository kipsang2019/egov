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


		require ('fpdf181/fpdf.php');
	    $pdf = new FPDF('p', 'mm', 'A4');
	    $pdf -> AddPage();
	    $pdf -> SetFont('Arial','B','14');
	    $pdf -> Cell(160,20, 'COUNTY GOVERNMENT OF TRANS-NZOIA', 1, 1, 'C');
	    $pdf -> Cell(160,20, 'Project proposal', 1, 1, 'C');
	    $pdf -> SetFont('Arial','','10');
	    $pdf -> Cell(40,10, 'Name', 1, 0);
	    $pdf -> Cell(120,10, $first, 1, 1);

	    $pdf -> Cell(40,10, 'Gender', 1, 0);
	    $pdf -> Cell(120,10, $gender, 1, 1);

	    $pdf -> Cell(40,10, 'Phone number', 1, 0);
	    $pdf -> Cell(120,10, $Phonenumber, 1, 1);

	    $pdf -> Cell(40,10, 'Sub-county', 1, 0);
	    $pdf -> Cell(120,10, $sub_county, 1, 1);

	    $pdf -> Cell(40,10, 'Area', 1, 0);
	    $pdf -> Cell(120,10, $area, 1, 1);

	    $pdf -> Cell(40,10, 'Project title', 1, 0);
	    $pdf -> Cell(120,10, $project, 1, 1);

	    $pdf -> Cell(40,10, 'Description', 1, 0);
	    $pdf -> Cell(120,10, $image_text, 1, 1);

	    $pdf -> Cell(40,20, 'I Would like the county government to consider my submission based on the above details.', 2, 1);
	    $pdf -> output();
	}
	


 ?>
