<?php
	session_start();
	$user_id = $_SESSION['user_id'];
	$query = "SELECT * FROM `user` u, `app` a, `categories` c WHERE u.app_id = a.app_id and a.app_id = c.app_id and u.user_id = '$user_id'";
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_array($result);
	$logo = $row['logo'];
	$cover = $row['cover'];
	$image = $row['image'];
	$appID = $row['app_id'];
	$username = $row['user_name'];
	$username_allcaps = strtoupper($username);
	?>
	

	
	
	