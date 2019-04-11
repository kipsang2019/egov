<?php 

	include 'inc/db.inc.php';

	 function getData($user_id){
		$array = array();
		$sql = "SELECT * FROM users WHERE id='$id'";
		while ($row = mysqli_fetch_assoc($sql)) {
			$array['id'] = $row['id'];
			$array['user_id'] = $row['user_id'];
			$array['first'] = $row['first'];
			$array['last'] = $row['last'];
			$array['idno'] = $row['idno'];
			$array['subcounty'] = $row['subcounty'];
			$array['email'] = $row['email'];
			$array['uid'] = $row['uid'];
		}
		return $array;
	}

	function getId($uid)
	{
		$sql = "SELECT id FROM users WHERE uid='$uid'";
		while ($row = mysqli_fetch_assoc($sql)) {
			return $row['id'];
		}
	}


 ?>