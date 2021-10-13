<?php

$url = 'http://country.io/names.json';

	$curlSession = curl_init();
	curl_setopt($curlSession, CURLOPT_URL, $url);
	curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
	curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

	$jsonData = json_decode(curl_exec($curlSession));
	curl_close($curlSession);
	
	$buffer ='<select name="pais" id="pais">';
	foreach($jsonData as $key => $name){
		$buffer .='<option value="'.$key.'">'.$key.' - '.$name.'</option>';
	}
	$buffer .= '</select>';	
	
?>