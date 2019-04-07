<?php

    
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "e-governance");

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

    $sql = "INSERT INTO license (bs_id, bs_name, boxno, town, Land_zone, plot_no, physical_address, act_code, bs_descr, bs_tel, premise_area, emp_no, id_no, bs_rep, box1, destin) VALUES ('$bs_id','$bs_name','$boxno','$town','$Land_zone', '$plot_no','$physical_address','$act_code','$bs_descr','$bs_tel','$premise_area','$emp_no ','$id_no','$bs_rep', '$box1','$destin')";

    // execute query
    mysqli_query($db, $sql);
    include 'licensepdf1.php';
     header("Location: license.php?Upload=success");
      exit();
  }

    

?>