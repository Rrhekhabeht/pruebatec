<?php

$url = 'country.io/names.json';
$parts = parse_url($url);
echo '<pre>';
echo var_dump($parts);
echo '</pre>';

$curlSession = curl_init();
curl_setopt($curlSession, CURLOPT_URL, $url);
curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

$jsonData = json_decode(curl_exec($curlSession));
curl_close($curlSession);
echo '<pre>';
echo var_dump($jsonData);
echo '</pre>';

?>