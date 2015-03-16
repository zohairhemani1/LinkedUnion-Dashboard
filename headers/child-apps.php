<?php 
	$query_select = "select app.app_name, app.app_id from app where app.app_id in (SELECT c.app_id as childAppID from `app_relation` ar, `categories` c WHERE ar.parentID = 1 AND ar.catID = c.id)";
    $result_select = mysqli_query($con,$query_select)
    or die ('error'); 
    while($row = mysqli_fetch_array($result_select))
	{
    $app_id = $row['app_id'];
	$app_name = $row['app_name'];
    echo"
		<option value='{$app_id}'>{$app_name}</option>
		";                                
     }
?>