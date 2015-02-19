<?php
	$app_id = $_SESSION['app_id'];
	$query = "SELECT * FROM user where `user_name` like 'ufcw5'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result);
	$logo = $row['logo'];
	$cover = $row['cover']; 
	$about_us = $row['about_us'];
	$image = $row['image'];
	
	//echo "User Details: {$about_us}";
	
?>
	

	
	
	