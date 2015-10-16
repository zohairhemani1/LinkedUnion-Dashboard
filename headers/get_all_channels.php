<?php
	
	$installationData = file_get_contents('http://fajjemobile.info/ufcw5/mobile_app/headers/curl_parse_channels.php');
	$installationData = json_decode($installationData,true);
	$allChannels = array();
	
	
	$results = $installationData['results'];
	//print_r($results);
	
	
	foreach($results as $key=>$value){
     $channelsArray = $value['channels'];
	 
		 foreach($channelsArray as $key=>$individualChannel){
			$allChannels[] = $individualChannel;
		 }
	 
	}
	$allChannels = array_unique($allChannels);
	
	foreach($allChannels as $key=>$value){
		echo"<option value='$value'>$value</option>";
	}
	//echo json_encode($allChannels);
	
?>