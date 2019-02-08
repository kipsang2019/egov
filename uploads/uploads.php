<?php 
if (isset($_POST['submit'])) {
	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActExt = strtolower(end($fileExt));

	$uploadable = array('jpg','jpeg','png');

	if (in_array($fileActExt, $uploadable)) {
		if ($fileError === 0) {
			if ($fileSize < 1000000) {
				$fileNamenew = uniqid('',true).".".$fileActExt;
				$fileDestin = '/uploads'.$fileNamenew;
				move_uploaded_file($fileTmpName, $fileDestin);
				header("Location: ..index.php?upload success"); 
			}else{
				echo "Your image is too big!";
			}
		}else{
			echo "there was an error in uploading this file!";
		}
	}else{
		echo "You cannot upload this file!";
	}
}

 ?>