<?php
$affid = 3668;
$email = 'wisnu@indocpa.co.id';
$TOKEN = '20972971-c2a9-45af-a37b-068ed83067c7'; // wisnu 3668

function IndoCPA($TOKEN, $url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$headers = array();
	$headers[] = 'Authorization: Bearer ' . $TOKEN;
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$server_output = curl_exec($ch);
	$info = curl_getinfo($ch);
	curl_close($ch);
	return $server_output;
}


/* endpoints samples

// hotel_id
https://auth.indocpa.me/hotel/1

// user
https://auth.indocpa.me/user

// star_rating
https://auth.indocpa.me/hotel/?star_rating=3

// country
https://auth.indocpa.me/hotel/?country=india

// city
https://auth.indocpa.me/hotel/?city=paris

// rates_from
https://auth.indocpa.me/hotel/?rates_from=100

// max_rate
https://auth.indocpa.me/hotel/?max_rate=100

// min_rate
https://auth.indocpa.me/hotel/?min_rate=100

// recentlyBooked
https://auth.indocpa.me/hotel/recentlyBooked/14018

*/
