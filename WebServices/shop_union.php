<?php
	
	include 'headers/connect_to_mysql.php';
	
	$city = $_POST['parameterOne'];
	
	$returnArray = array();
	$query = "SELECT * from shopunion where `app_id` = '$appID' AND `city` like '%$city%'";
	$result = mysqli_query($con,$query);
	while($row = mysqli_fetch_assoc($result))
	{
		$returnArray[] = $row;
	}
	
	echo json_encode($returnArray);
	
	/*
	
	
	shows shops within 1000 miles 
	
	$query = "SELECT *,acos(sin(0.43423933161) * sin(lat) + cos(0.43423933161) * cos(lat) * cos(`long` - (1.1699860019))) * 6371 as distance FROM shopunion WHERE acos(sin(0.43423933161) * sin(lat) + cos(0.43423933161) * cos(lat) * cos(`long` - (1.1699860019))) * 6371 <= 1000 order by distance";
	
	
	*/
	
?>