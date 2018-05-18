<?php
$sampleQuery = "https://images-api.nasa.gov/search?q=etna&media_type=image";

//initialize curl request and sets the return transfer to 1 so it doesn't output it directly to the screen
//the json output from the get request is then decoded into an associative array
$curl = curl_init($sampleQuery);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$json = curl_exec($curl);
$decodeJson = json_decode($json, true);

//returns total number of results
$totalHits = $response["collection"]["metadata"]["total_hits"];

//close curl request
curl_close($curl);
