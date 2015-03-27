
	<?php 
	$query_category = "SELECT * FROM categories";
    $result_category = mysqli_query($con,$query_category)
    or die ('error'); 
    while($row = mysqli_fetch_array($result_category))
	{
    $id = $row['id'];
	$name = $row['name'];
    echo"
    <option value=''></option>
    <option value='$id'>{$name}</option>
    ";                                
     }
	 ?>