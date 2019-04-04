<?php 

session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="main-cont">
		<?php
		if (isset($_SESSION['u_id'])) {
			echo '<ul>
			<li><a href="adminhome.php">Home</a></li>
			<li><a href="jobs.php">Jobs</a></li>
			<li><a href="projects.php">Citizens projects</a></li>
			<li><a href="countyproj.php">County projects</a></li>
			<li><a href="permits.php">permits</a></li>
			<li><a href="consapprovals.php">construction approvals</a></li>
			<li><a href="adminchat.php">Messages</a></li>
			</ul>
			';
		}else{
			echo '<ul>
				<li><a href="../index.php">Main page</a></li>
				</ul>';
		}

		 ?>