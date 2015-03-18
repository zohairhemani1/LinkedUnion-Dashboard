<?php
	include 'parse-php-sdk/autoload.php';
	
	/*$app_id = "Lr8VBQHTUyzw4RoFpcyHQnCcHJAQb1PPhBVzDtqK";
	$rest_key = "BfhbRn0mcXST0vxbSmLDgacHejVexmdBtnThCboZ";
	$master_key = "sOmMyLBOBSStGbiGL5EEAptl5G1H5fqQG7Os7NyF";*/
	
	echo $app_id_parse = $tempArray['applicationID'];
	echo "<br/>";
	echo $rest_key = $tempArray['restKey'];
	echo "<br/>";
	echo $master_key = $tempArray['masterKey'];
	
	use Parse\ParseClient;
	use Parse\ParseInstallation;
	use Parse\ParseException;
	use Parse\ParsePush;

	ParseClient::initialize( $app_id_parse, $rest_key, $master_key );

	pushNotification($notificationMsg);
	
	// Notification for iOS users
	
	function pushNotification($notificationMessage)
	{
		
		$queryIOS = ParseInstallation::query();
		$queryIOS->equalTo('deviceType', 'android');
		 
		ParsePush::send(array(
		  "where" => $queryIOS,
		  "data" => array(
			"alert" => $notificationMessage,
			"sound" => "cheering.caf"
		  )
		));
		
	}
?>