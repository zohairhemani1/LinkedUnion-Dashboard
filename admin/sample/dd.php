<?php

$con = mysqli_connect('localhost','root','','ufcwfive');

$app_id = $_GET['app_id']; 

?>

<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Multiple drop down list box from plus2net</title>
<SCRIPT language=JavaScript>
<!--
function reload(form)
{
var val=form.cat.options[form.cat.options.selectedIndex].value;
self.location='dd.php?cat=' + val ;
}
function disableselect()
{
<?Php
if(isset($app_id) and strlen($app_id) > 0){
echo "document.f1.subcat.disabled = false;";}
else{echo "document.f1.subcat.disabled = true;";}
?>
}

</script>
</head>

<body onload=disableselect();>

<?Php
$quer2="SELECT * from app"; 
if(isset($app_id) and strlen($app_id) > 0)
{
	$quer="SELECT * FROM categories where app_id = $app_id"; 
}
else
{
	$quer="SELECT * FROM categories"; 
}
echo "<form method=post name=f1 action='dd-check.php'>";
echo "<select name='cat' onchange=\"reload(this.form)\"><option value=''>Select one</option>";
while ($row = mysqli_fetch_array($quer2))
{
	if($row['app_id'] = $app_id)
	{
	echo 
	"<option selected value='$row[app_id]'>$row[app_name]</option>"."<BR>";
}
else
{
	echo  "<option value='$row[app_id]'>$row[app_name]</option>";}
}
echo "</select>";
echo "<select name='subcat'><option value=''>Select one</option>";
while ($row1 = mysqli_fetch_array($quer))
{
	echo  "<option value='$row1[id]'>$row1[categories]</option>";
}
echo "</select>";
echo "<input type=submit value=Submit>";
echo "</form>";
?>
<br><br>
<a href=dd.php>Reset and start again</a>
<br><br>
<center><a href='http://www.plus2net.com' rel="nofollow">PHP SQL HTML free tutorials and scripts</a></center> 
</body>
</html>
