<?php
	session_start();
	include '../headers/connect_to_mysql.php';
	include 'headers/_user-details.php';
	$name = "";
	$formAction = "";
	
	if(isset($_GET['id']))
{
		$id = $_GET['id'];
		$formAction = "?ANDid=$id";
		$query = "SELECT * FROM categories where id = $id ";
		$result = mysqli_query($con,$query);	
		$row = mysqli_fetch_array($result)
		or die ('error3');
		$name = $row['name'];
		$app_id = $row['app_id'];

	if($_POST)
	{
		$id=  $_GET['app_id'];
		$name = $_POST['app_name'];
		$app_id = $_POST['app_id'];
		$query = "UPDATE categories SET  name = '$name',app_id = '$app_id' WHERE id = '$id'";
		$result = mysqli_query($con,$query);
		header("Location: category.php?update=true");
	}
}	
else 
{
	if($_POST)
	{
		$name = $_POST['name'];
		$app_id = $_POST['app_id'];
		$query_inserting = "INSERT INTO categories(name,app_id)
		VALUES ('$name','$app_id')";
		mysqli_query($con,$query_inserting)
		or die('error while inserting Category');
		header("Location: category.php?insert=true");	
	}	
}

?>
<!DOCTYPE html>
<html>
<head>

   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   	<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   	<link href="../assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   	<link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   	<link href="../css/style.css" rel="assets" />
   	<link href="../css/style_responsive.css" rel="stylesheet" />
   	<link href="../css/style_default.css" rel="stylesheet" id="style_color" />
   	<link href="../assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   	<link rel="stylesheet" type="text/css" href="../assets/uniform/css/uniform.default.css" />
   	<link rel="stylesheet" type="text/css" href="../assets/jquery-ui/jquery-ui-1.10.1.custom.min.css"/>
   	<link rel="stylesheet" type="text/css" href="../assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
   	<link rel="stylesheet" type="text/css" href="../assets/jquery-tags-input/jquery.tagsinput.css" />    
   	<link rel="stylesheet" href="../assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
   	<link rel="stylesheet" type="text/css" href="../assets/gritter/css/jquery.gritter.css" />
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap-daterangepicker/daterangepicker.css" />
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap-datepicker/css/datepicker.css" />
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap-timepicker/compiled/timepicker.css" />
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="../assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
	<link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="../css/style.css" rel="stylesheet" />
	<link href="../css/style_responsive.css" rel="stylesheet" />
	<link href="../css/style_default.css" rel="stylesheet" id="style_color" />
	<link rel="stylesheet" href="../assets/data-tables/DT_bootstrap.css" />
   <link rel="stylesheet" type="text/css" href="../assets/chosen-bootstrap/chosen/chosen.css" />
</head>
<body>

 <select id="" class="span6 chosen" name="category" data-placeholder="Choose a Category" tabindex="1">
<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','ufcwfive');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM categories WHERE app_id = '".$q."'";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) 
{
  $id = $row['id'];
  $app_id = $row['app_id']; 
  $name = $row['name'];
 echo "
    <option value=''></option>
    <option value='$id'>$name</option>";
}

mysqli_close($con);
?>
</select>
<script src="../js/jquery-1.4.4.min.js"></script>  
  <script src="../js/jquery-1.8.3.min.js"></script>
   <script src="../assets/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>   
   <script src="../js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->   
   <script type="text/javascript" src="../assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="../assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="../assets/data-tables/DT_bootstrap.js"></script>
   <script type="text/javascript" src="../assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="../assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
   <script type="text/javascript" src="../assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
   <script type="text/javascript" src="../assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="../assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="../assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> 
	<script type="text/javascript" src="../assets/bootstrap-daterangepicker/date.js"></script> 
    <script type="text/javascript" src="../assets/bootstrap-daterangepicker/daterangepicker.js"></script> 
    <script type="text/javascript" src="../assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> 
    <script type="text/javascript" src="../assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script> 
   <script src="../js/scripts.js"></script>
      <script src="../js/table-editable.js"></script>
         <script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
         App.init();
		 UIJQueryUI.init();
      });
   </script>


</body>
</html>