<?php 
	$db = mysqli_connect("localhost", "root", "", "test");

  if (isset($_POST['submit'])) {
    $bs_id = mysqli_real_escape_string($db, $_POST['bs_id']);
    $bs_name = mysqli_real_escape_string($db, $_POST['bs_name']);
    $boxno = mysqli_real_escape_string($db, $_POST['boxno']);
    $town = mysqli_real_escape_string($db, $_POST['town']);
    $Land_zone = mysqli_real_escape_string($db, $_POST['Land_zone']);
    $plot_no = mysqli_real_escape_string($db, $_POST['plot_no']);
    $physical_address = mysqli_real_escape_string($db, $_POST['physical_address']);
    $act_code = mysqli_real_escape_string($db, $_POST['act_code']);
    $bs_descr = mysqli_real_escape_string($db, $_POST['bs_descr']);
    $bs_tel = mysqli_real_escape_string($db, $_POST['bs_tel']);
    $premise_area = mysqli_real_escape_string($db, $_POST['premise_area']);
    $emp_no = mysqli_real_escape_string($db, $_POST['emp_no']);
    $id_no = mysqli_real_escape_string($db, $_POST['id_no']);
    $bs_rep = mysqli_real_escape_string($db, $_POST['bs_rep']);
    $box1 = mysqli_real_escape_string($db, $_POST['box1']);
    $destin = mysqli_real_escape_string($db, $_POST['destin']);


	require ('fpdf181/fpdf.php');
    $pdf = new FPDF('p', 'mm', 'A4');
    $pdf -> AddPage();
    $pdf -> SetFont('Arial','B','12');
    $pdf -> Cell(160,20, 'COUNTY GOVERNMENT OF TRANS-NZOIA', 1, 1, 'C');
    $pdf -> Cell(160,20, 'Single business Permit application', 1, 1, 'C');
    
    $pdf -> SetFont('Arial','B','8');
    $pdf -> Cell(170,10, '', 2, 1);
    $pdf -> Cell(50,10, 'B/S id NO.', 1, 0);
    $pdf -> Cell(50,10, $bs_id, 1, 1);
    $pdf -> Cell(50,10, 'Business name', 1, 0);
    $pdf -> Cell(50,10, $bs_name, 1, 1);
    $pdf -> Cell(50,10, 'P.O. BOX', 1, 0);
    $pdf -> Cell(50,10,  $boxno, 1, 1);
    $pdf -> Cell(50,10, 'Town', 1, 0);
    $pdf -> Cell(50,10, $town, 1, 1);

    $pdf -> Cell(170,10, '', 2, 1);
    $pdf -> Cell(80,10, 'Land Zone', 1, 0);
    $pdf -> Cell(80,10, $Land_zone, 1, 1);
    $pdf -> Cell(80,10, 'Plot No.', 1, 0);
    $pdf -> Cell(80,10, $plot_no, 1, 1);
    $pdf -> Cell(80,10, 'Business physical address', 1, 0);
    $pdf -> Cell(80,10, $physical_address, 1, 1);

    $pdf -> Cell(170,10, '', 2, 1);
    $pdf -> Cell(80,10, 'Activity code', 1, 0);
    $pdf -> Cell(80,10, $act_code, 1, 1);
    $pdf -> Cell(80,10, 'Business activity description.', 1, 0);
    $pdf -> Cell(80,10, $bs_descr, 1, 1);

    $pdf -> Cell(170,10, '', 2, 1);
    $pdf -> Cell(80,10, 'Business Tel', 1, 0);
    $pdf -> Cell(80,10, $bs_tel, 1, 1);

    $pdf -> Cell(170,10, '', 2, 1);
    $pdf -> Cell(80,10, 'Area of premise', 1, 0);
    $pdf -> Cell(80,10, $premise_area, 1, 1);
    $pdf -> Cell(80,10, 'No. of employees', 1, 0);
    $pdf -> Cell(80,10, $emp_no, 1, 1);

    $pdf -> Cell(170,10, '', 2, 1);
    $pdf -> Cell(80,10, 'Personal id NO.', 1, 0);
    $pdf -> Cell(80,10, $id_no, 1, 1);
    $pdf -> Cell(80,10, 'Name of B/S representative', 1, 0);
    $pdf -> Cell(80,10, $bs_rep, 1, 1);
    $pdf -> Cell(80,10, 'P.O. BOX', 1, 0);
    $pdf -> Cell(80,10, $box1, 1, 1);
    $pdf -> Cell(80,10, 'Town', 1, 0);
    $pdf -> Cell(80,10, $destin, 1, 1);

    $pdf -> Cell(170,10, '', 2, 1);
    $pdf -> Cell(170,10, 'I certify the information registered in this form is true and accrate based on my knowledge',1, 1);

    $pdf -> Cell(170,10, '', 2, 1);
    $pdf -> Cell(80,10, 'Name of the person filling this form', 1, 0);
    $pdf -> Cell(90,10, '....................................', 1, 1);

    $pdf -> Cell(170,10, '', 2, 1);
    $pdf -> Cell(80,10, 'Signature', 1, 0);
    $pdf -> Cell(90,10, '....................................', 1, 1);

    $pdf -> Cell(170,10, 'Date', 2, 1);
    $pdf -> Cell(30,10, 'DD', 1, 0);
    $pdf -> Cell(40,10, 'MM', 1, 0);
    $pdf -> Cell(100,10, 'YYYY', 1, 1);


    $pdf -> Cell(170,10, '', 2, 1);
    $pdf -> Cell(170,10, 'I certify this form was filled on the date as registered below',1, 1);

    $pdf -> Cell(170,10, '', 2, 1);
    $pdf -> Cell(80,20, 'Registration office clerk name', 1, 0);
    $pdf -> Cell(90,20, '......................................................', 1, 1);

    $pdf -> Cell(170,10, '', 2, 1);
    $pdf -> Cell(80,20, ' stamp and signature', 1, 0);
    $pdf -> Cell(90,20, '......................................................', 1, 1);

    $pdf -> Cell(170,10, 'Date', 2, 1);
    $pdf -> Cell(30,10, 'DD', 1, 0);
    $pdf -> Cell(40,10, 'MM', 1, 0);
    $pdf -> Cell(100,10, 'YYYY', 1, 1);

    $pdf -> Cell(170,20, '', 2, 1);
    $pdf -> Cell(80,10, 'Permit No.', 1, 0);
    $pdf -> Cell(90,10, '', 1, 1);
    $pdf -> Cell(80,10, 'Date', 1, 0);
    $pdf -> Cell(90,10, '', 1, 1);
    $pdf -> Cell(80,10, 'Receipt No.', 1, 0);
    $pdf -> Cell(90,10, '', 1, 1);
    $pdf -> Cell(80,10, 'Amount Ksh.', 1, 0);
    $pdf -> Cell(90,10, '', 1, 1);


    $pdf -> output();
    $pdf -> output();

}
 ?>