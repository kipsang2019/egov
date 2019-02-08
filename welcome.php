<?php 

include_once 'header.php';

 ?>

 <div class="body content">
 	<div class="alert alert-success"><? $_SESSION['message'] ?></div>
 	<span><img src="<?= $_SESSION['avatar'] ?>"></span>
 </div>
 <a href="index.php">Home</a>

 <?php 

include_once 'footer.php';

 ?>