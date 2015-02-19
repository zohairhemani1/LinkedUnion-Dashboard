<?php

	session_start();
	
	if(isset($_COOKIE['username']))
	{
		$cookie = $_COOKIE['username'];
		$query = "SELECT * FROM user where cookie like '$cookie'";
		$result = mysqli_query($con,$query);
		$row = mysqli_fetch_assoc($result);
		$_COOKIE['username'] = $row['app_id'];
	}
	else if(isset($_SESSION['user_name']))
	{
		$username = $_SESSION['user_name'];
		$username_allcaps = strtoupper($username);
	}
	else
	{
		header('Location: home.php');	
	}