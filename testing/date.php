<?php

	$validUpto = strtotime(date("Y-m-d", strtotime("2015-04-06")) . " +2 month");
	echo "VALID UPTO time: " . $validUpto;
	echo "VALID UPTO DATE: " . date('Y/d/m', $validUpto);

	
?>