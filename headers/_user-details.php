<?php
	include 'connect_to_mysql.php';
	$user_id = $_SESSION['user_id'];
	$query_detail = "SELECT * FROM `user` u, `app` a WHERE u.app_id = a.app_id and u.user_id = '{$user_id}'";
	$result_detail = mysqli_query($con,$query_detail);
	$row_query = mysqli_fetch_array($result_detail);
	$logo = $row_query['logo'];
	$cover = $row_query['cover'];
	$image = $row_query['image'];
	$appID = $row_query['app_id'];
	$username = $row_query['user_name'];
	$about_us = $row_query['about_us'];
	$password = $row_query['password'];
	$email = $row_query['email'];
	$image = $row_query['image'];
	$time_cone = $row_query['time_cone'];
	$username_allcaps = strtoupper($username);

?>
	

	
	
	