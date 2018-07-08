<?php
// query to be processed in roder to search the images
$query = "https://images-api.nasa.gov/search?q=".$_GET['query']."&media_type=image";

//initialize curl request and sets the returntransfer to 1 so it doesn't output it directly to the screen
//the json output from the get request is then decoded into an associative array
$curl = curl_init($query);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$json = curl_exec($curl);
$decodedJson = json_decode($json, true);

//returns total number of results
$totalHits = $decodedJson["collection"]["metadata"]["total_hits"];

//array containing every item in the json
$items = $decodedJson["collection"]["items"];
//loops through each item in the set of images, maximum of 100 elements retrieved in first page
$maxNumber = 100;
//checks if the total number of results is less than 100 (the maximum quantity of images that can be shown in the first page)
if ($totalHits < 100) {
    $maxNumber = $totalHits;
}
//list of images to be sent to js
$list = array($maxNumber);
$list[0] = $totalHits;
for ($i = 1; $i < $maxNumber; $i++) {
    //gets from the json just the necessary values to be passed to the JavaScript file
    $previewImage = $items[$i]["links"][0]["href"];
    $nasaId = $items[$i]["data"][0]["nasa_id"];
    $title = $items[$i]["data"][0]["title"];

    $list[$i] = array("link"=>$previewImage, "id"=>$nasaId, "title"=>$title);
}
//encodes data in a multi-dimensional array so js receives it with the AJAX request and then it processes it
echo json_encode($list);

//closes curl request and finishes execution
curl_close($curl);
