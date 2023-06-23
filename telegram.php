<?php 


$api = "6289905434:AAH91s3SrQ9Umt3_1GmA1L3NE0ASmWDTlAM";#=====> Your IpTocken
$chatid = "1031782754";#=====> Your Chatb ID





function sendBot($url){
	$ci = curl_init();
	curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ci,CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ci, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ci, CURLOPT_URL, $url);
	return curl_exec($ci);
	curl_close($ci);
}



?>