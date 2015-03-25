<?php

if (mysql_error()) {
    //echo "<h2>Failure:</h2><em>" . mysql_error() . "</em>";
} else {
    //echo "<h1>Success in database connection.</h1>";
}

$con = mysqli_connect("$db_host", "$db_username", "$db_pass", "$db_name");

if ($_FILES["logo"]["error"] > 0) {
    //echo "Error: " . $_FILES["logo"]["error"] . "<br>";
} else {
    //echo "Upload: " . $_FILES["logo"]["name"] . "<br>";
    //echo "Type: " . $_FILES["logo"]["type"] . "<br>";
    //echo "Size: " . ($_FILES["logo"]["size"] / 1024) . " kB<br>";
    //echo "Stored in: " . $_FILES["logo"]["tmp_name"];
}

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["logo"]["name"]);
$extension = end($temp);
if ((($_FILES["logo"]["type"] == "image/gif") || ($_FILES["logo"]["type"] == "image/jpeg") || ($_FILES["logo"]["type"] == "image/jpg") || ($_FILES["logo"]["type"] == "image/pjpeg") || ($_FILES["logo"]["type"] == "image/x-png") || ($_FILES["logo"]["type"] == "image/png")) && ($_FILES["logo"]["size"] < 20000000) && in_array($extension, $allowedExts)) {
    if ($_FILES["logo"]["error"] > 0) {
        //echo "Error: " . $_FILES["logo"]["error"] . "<br>";
    } else {
        //echo "Upload: " . $_FILES["logo"]["name"] . "<br>";
        //echo "Type: " . $_FILES["logo"]["type"] . "<br>";
        //echo "Size: " . ($_FILES["logo"]["size"] / 1024) . " kB<br>";
        //echo "Stored in: " . $_FILES["logo"]["tmp_name"];
    }
} else {
    //echo "Invalid file Restriction";
}

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["logo"]["name"]);
$extension = end($temp);
if ((($_FILES["logo"]["type"] == "image/gif") || ($_FILES["logo"]["type"] == "image/jpeg") || ($_FILES["logo"]["type"] == "image/jpg") || ($_FILES["logo"]["type"] == "image/pjpeg") || ($_FILES["logo"]["type"] == "image/x-png") || ($_FILES["logo"]["type"] == "image/png")) && ($_FILES["logo"]["size"] < 20000000) && in_array($extension, $allowedExts)) {
    if ($_FILES["logo"]["error"] > 0) {
        //echo "Return Code: " . $_FILES["logo"]["error"] . "<br>";
    } else {
        //echo "Upload: " . $_FILES["logo"]["name"] . "<br>";
        //echo "Type: " . $_FILES["logo"]["type"] . "<br>";
        //echo "Size: " . ($_FILES["logo"]["size"] / 1024) . " kB<br>";
        //echo "Temp file: " . $_FILES["logo"]["tmp_name"] . "<br>";

        if (file_exists("image/" . $_FILES["logo"]["name"])) {
            //echo $_FILES["logo"]["name"] . " already exists. ";
        } else {
            move_uploaded_file($_FILES["logo"]["tmp_name"], "img/image/" . $_FILES["logo"]["name"]);
			//echo "Stored in: " . "../upload/" . $_FILES["logo"]["name"];
            
            $logo = $_FILES['logo']['name'];
         }
    }
} else {
    //echo "Invalid file Saving";
}
