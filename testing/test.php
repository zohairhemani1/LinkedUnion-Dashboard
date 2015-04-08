<?php


	$latlong    =   get_lat_long("327/3 D 3 Afshan Apartments Garden East Soldier Bazar # 3 Karachi"); // create a function with the name "get_lat_long" given as below
	$map        =   explode(',' ,$latlong);
	$mapLat         =   $map[0];
	$mapLong    =   $map[1];
	
	echo "Latitude: {$mapLat} <br/>";
	echo "Longitude: {$mapLong}";  
	
	



function get_lat_long($address){

    $address = str_replace(" ", "+", $address);

    $json = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=$region");
    $json = json_decode($json);

    $lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
    $long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
    return $lat.','.$long;
}

?>