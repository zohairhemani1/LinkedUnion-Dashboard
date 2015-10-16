<?php
	include 'parse-php-sdk/autoload.php';
	
	
	use Parse\ParseClient;
	use Parse\ParseInstallation;
	use Parse\ParseException;
	use Parse\ParsePush;
	use Parse\ParseQuery;
	

	ParseClient::initialize( $app_id_parse, $rest_key, $master_key );

	pushNotification($notificationMsg,$channels);
	
	
	// Notification for iOS users
	
	
	function pushNotification($notificationMessage,$channelsArray)
	{
	
		$queryIOS = ParseInstallation::query();
		//$queryIOS->equalTo('deviceType', 'android');
		//$queryIOS->equalTo('deviceType', 'ios');
		 
		ParsePush::send(array(
		  //"where" => $queryIOS,
		  "channels" => $channelsArray,
		  "data" => array(
			"alert" => $notificationMessage,
			"sound" => "cheering.caf"
		  )
		));
		
	}
?>