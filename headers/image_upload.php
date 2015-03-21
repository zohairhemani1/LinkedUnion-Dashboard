<?php

include "connect_to_mysql.php";

if (mysql_error()) {
    //echo "<h2>Failure:</h2><em>" . mysql_error() . "</em>";
} else {
    //echo "<h1>Success in database connection.</h1>";
}

$con = mysqli_connect("$db_host", "$db_username", "$db_pass", "$db_name");

if ($_FILES["profile"]["error"] > 0) {
    //echo "Error: " . $_FILES["profile"]["error"] . "<br>";
} else {
    //echo "Upload: " . $_FILES["profile"]["name"] . "<br>";
    //echo "Type: " . $_FILES["profile"]["type"] . "<br>";
    //echo "Size: " . ($_FILES["profile"]["size"] / 1024) . " kB<br>";
    //echo "Stored in: " . $_FILES["profile"]["tmp_name"];
}

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["profile"]["name"]);
$extension = end($temp);
if ((($_FILES["profile"]["type"] == "image/gif") || ($_FILES["profile"]["type"] == "image/jpeg") || ($_FILES["profile"]["type"] == "image/jpg") || ($_FILES["profile"]["type"] == "image/pjpeg") || ($_FILES["profile"]["type"] == "image/x-png") || ($_FILES["profile"]["type"] == "image/png")) && ($_FILES["profile"]["size"] < 20000000) && in_array($extension, $allowedExts)) {
    if ($_FILES["profile"]["error"] > 0) {
        //echo "Error: " . $_FILES["profile"]["error"] . "<br>";
    } else {
        //echo "Upload: " . $_FILES["profile"]["name"] . "<br>";
        //echo "Type: " . $_FILES["profile"]["type"] . "<br>";
        //echo "Size: " . ($_FILES["profile"]["size"] / 1024) . " kB<br>";
        //echo "Stored in: " . $_FILES["profile"]["tmp_name"];
    }
} else {
    //echo "Invalid file Restriction";
}

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["profile"]["name"]);
$extension = end($temp);
if ((($_FILES["profile"]["type"] == "image/gif") || ($_FILES["profile"]["type"] == "image/jpeg") || ($_FILES["profile"]["type"] == "image/jpg") || ($_FILES["profile"]["type"] == "image/pjpeg") || ($_FILES["profile"]["type"] == "image/x-png") || ($_FILES["profile"]["type"] == "image/png")) && ($_FILES["profile"]["size"] < 20000000) && in_array($extension, $allowedExts)) {
    if ($_FILES["profile"]["error"] > 0) {
        //echo "Return Code: " . $_FILES["profile"]["error"] . "<br>";
    } else {
        //echo "Upload: " . $_FILES["profile"]["name"] . "<br>";
        //echo "Type: " . $_FILES["profile"]["type"] . "<br>";
        //echo "Size: " . ($_FILES["profile"]["size"] / 1024) . " kB<br>";
        //echo "Temp file: " . $_FILES["profile"]["tmp_name"] . "<br>";

        if (file_exists("image/" . $_FILES["profile"]["name"])) {
            //echo $_FILES["profile"]["name"] . " already exists. ";
        } else {
            move_uploaded_file($_FILES["profile"]["tmp_name"], "img/image/" . $_FILES["profile"]["name"]);
			//echo "Stored in: " . "../upload/" . $_FILES["profile"]["name"];
            
            $profile = $_FILES['profile']['name'];
         }
    }
} else {
    //echo "Invalid file Saving";
}
