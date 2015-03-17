<?php 
	include 'headers/connect_to_mysql.php';
	
	if(isset($_GET['id']))
	{
	$categoryID = $_GET['categoryID'];
	$id = $_GET['id'];
	$query_delete = "DELETE FROM stayconected WHERE id = $id"
	or die('error while deleting stayconected');
	$result = mysqli_query($con,$query_delete);
	header ('Location: stay_connected.php?delete=true');		
	}
	
	if(isset($_GET['contact_id']))
	{
	$contact_id = $_GET['contact_id'];
	$query_delete = "DELETE FROM contact WHERE contact_id = $contact_id"
	or die('error while deleting contact');
	$result = mysqli_query($con,$query_delete);
	header ('Location: union_representatives.php?delete=true');		

	}
	
	if(isset($_GET['office_id']))
	{
	$office_id = $_GET['office_id'];  	
	$query_delete = "DELETE FROM location WHERE office_id = $office_id"
	or die('error while deleting office location');
	$result = mysqli_query($con,$query_delete);
	header ('Location: office_location.php?delete=true');		
	}
	
	if(isset($_GET['news_id']))
	{
	$news_id = $_GET['news_id'];	
	$categoryID = $_GET['categoryID'];
	$query_delete = "DELETE FROM news WHERE news_id = $news_id"
	or die('error while deleting news');
	$result = mysqli_query($con,$query_delete);
	header ("Location:news.php?categoryID=$categoryID&delete=true");		
	}

?>