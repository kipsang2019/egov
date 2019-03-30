<?php


  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "e-governance");

  // Initialize message variable
  $_SESSION['message'] = "";

  // If upload button is clicked ...
  if (isset($_POST['submit'])) {

  	
  	// Get text
  	$first = mysqli_real_escape_string($db, $_POST['first']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $Phonenumber = mysqli_real_escape_string($db, $_POST['Phonenumber']);
    $sub_county = mysqli_real_escape_string($db, $_POST['sub_county']);
    $area = mysqli_real_escape_string($db, $_POST['area']);
    $project = mysqli_real_escape_string($db, $_POST['project']);
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

    // Get image name
    $image = $_FILES['image']['name'];
    
    if (empty($first) || empty($gender) || empty($Phonenumber) || empty($sub_county) || empty($area) || empty($project) || empty($image_text)) {
      $_SESSION['message'] = 'We value your submission '.$first.',that is why the county requests you to fill all the fields to facilitate service delivery.';
      header("Location: projproposal.php? Make sure that you fill all the fields");
      exit();
    }else{
      $target = "images/".basename($image);
    
      $sql = "INSERT INTO proj_uploads (first, gender, Phonenumber, sub_county, area, project, image_text, image) 
              VALUES ('$first', '$gender', '$Phonenumber','$sub_county', '$area', '$project','$image_text','$image')";
          // execute query

          mysqli_query($db, $sql);
          include 'subproj.php';
           $_SESSION['msg'] = 'Thank you '.$first.' Your submission was successfull!!';
          header("Location: projproposal.php?Upload=success");
          exit();
          
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }
  	
}


?>