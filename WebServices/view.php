<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
<!--<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "614faf4b-56f5-4d25-9ca7-06b957f4ee83", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>-->

</head>

<body>

<?php

	include 'headers/connect_to_mysql.php';
	
	$facebook = "";
	$twitter = "";
	$google = "";
	$pinterest = "";
	
	$app_id = $_GET['app_id'];
	
	if(isset($_GET['news_id']))
		$news_id = $_GET['news_id'];
	
	if(isset($_GET['category']))
		$category = $_GET['category'];
	
	if(isset($category))
	{
		$query = "SELECT * from `news` WHERE `category` = '{$category}' LIMIT 1";
		$result = mysqli_query($con,$query);
		$row=mysqli_fetch_assoc($result);
		$title = $row['title'];
		$description = $row['description'];
		$social = $row['social'];
		
		echo "<p class='title'>{$title}</p>";
		echo"<p style='margin-bottom:100px; margin:7px;'>{$description}</p>";
	}
	else
	{
		$query = "select * from news WHERE news_id = '{$news_id}' and app_id = '$app_id'";
		$result = mysqli_query($con,$query);
		$row = mysqli_fetch_array($result);
		$title = $row['title'];
		
		echo "<p class='title'>{$title}</p>";
		$description = $row['description'];
		$social = $row['social'];
		echo"<p style='margin-bottom:100px; margin:7px;'>{$description}</p>";

	}
	
		if($social != null)
		{
			$facebook = $row['facebook'];
			$twitter = $row['twitter'];
			$google = $row['google'];
			$pinterest = $row['pinterest'];
			
		echo "<style type='text/css'>   
				.share {
				width: 100%;
				font-size: 18px;
				font-weight: bold;
				text-align: center;
				background-color: #3071A9;
				color: #FFF;
				border-radius: 2px;
				border-color: #285E8E;
				padding-bottom: 4px;
				height: 79px;
				font-family:'Times New Roman', Times, serif;

				}
				.share p {
					padding-bottom: 0px;
					padding-top: 4px;
				}
			 </style>";
		}
	
?>
<div class="share">
<div id="share-button">
    <ul class="share-buttons">
    <center>
	<?php
    if ($facebook != null){
		
echo "<p>Share This</p><li><a href='https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F{$facebook}&t=' 
target='_blank' onclick='window.open('https://www.facebook.com/sharer/sharer.php?u=' + www.linkedunion.com + '&t=' + encodeURIComponent(document.URL)); return false;'><img src='images/flat_web_icon_set/color/Facebook.png'></a></li>	"
; 	 	}
	else {
	}
		if ($twitter != null){
    echo" <li><a href='https://twitter.com/intent/tweet?source=http%3A%2F%2F
	<?php echo $twitter;?>&text=:%20http%3A%2F%2F{$twitter}' target='_blank' title='Tweet' onclick='window.open('https://twitter.com/intent/tweet?text=' + ':%20'  + 	encodeURIComponent(document.URL)); return false;'><img src='images/flat_web_icon_set/color/Twitter.png'></a></li>";
		}
		else{
		}
		if ($google != null){
	echo" <li><a href='https://plus.google.com/share?url=http%3A%2F%2F{$google}' target='_blank' title='Share on Google+' onclick='window.open('https://plus.google.com/share?url=') ; return false;'><img src='images/flat_web_icon_set/color/Google+.png'></a></li>";
		}
		else{
		}
		if ($pinterest != null){
	echo"<li><a href='http://pinterest.com/pin/create/button/?url=http%3A%2F%2F{$pinterest}&description=' target='_blank' title='Pin it' onclick='window.open('http://pinterest.com/pin/create/button/?url=' + '&description=' +  encodeURIComponent); return false;'><img src='images/flat_web_icon_set/color/Pinterest.png'></a></li>
</ul>";
		}
		else{
		}
	?>
    </center>
</ul>
</div>
</div>
</body>
</html>