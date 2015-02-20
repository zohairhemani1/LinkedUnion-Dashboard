<?php
	$user_id = $_SESSION['user_id'];
	
	$query = "SELECT * FROM user where `user_id` like '{$user_id}'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result);
	$logo = $row['logo'];
	$cover = $row['cover'];
	$image = $row['image'];
	$username = $row['user_name'];
	$username_allcaps = strtoupper($username);
	
	
?>
	

	
	
	