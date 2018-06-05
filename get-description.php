<?php
//gets the id of the image, so it can create a query just with it, and retrieve all the relevant info about that specific image
$nasaId = $_GET["id"];
$query ="https://images-api.nasa.gov/search?nasa_id=".$nasaId;
//creates the curl request
$curl = curl_init($query);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$json = curl_exec($curl);
$decodedJson = json_decode($json, true);
//here it lists all the items
$items = $decodedJson["collection"]["items"][0];

//this array stores all the information to be passed with the AJAX request
$variables = array(6);
//0: title
$variables[0] = $items["data"][0]["title"];
//1: description
$variables[1] = $items["data"][0]["description"];
//2: date of upload
$date = $items["data"][0]["date_created"];
$date = substr($date, 0, 10);
$date = date("d m Y", strtotime($date));
$variables[2] = $date;
//3: preview
$previewImage = $items["links"][0]["href"];
$variables[3] = $previewImage;
//4: keywords
$keywordsArray = $items["data"][0];
$keywordsList = "";
if (array_key_exists("keywords", $keywordsArray)) {
    $keywordsArray = $keywordsArray["keywords"];
    $keywordsList = "Parole chiave: ";
    foreach ($keywordsArray as $keyword) {
        $keywordsList = $keywordsList.$keyword." ";
    }
}
$variables[4] = $keywordsList;
//5: origlink
//creates a new query to get data from the collection of different versions of the image
$assetQuery = "https://images-api.nasa.gov/asset/".$nasaId;
$curl2 = curl_init($assetQuery);
curl_setopt($curl2, CURLOPT_RETURNTRANSFER, 1);
$collection = curl_exec($curl2);
$decodedCollection = json_decode($collection, true);

$version = 0; //0 is the original picture, 1 is the large version
$original = $decodedCollection["collection"]["items"][$version]["href"];
$variables[5] = $original;

//now it encodes all the data in JSON format and echoes it output
echo json_encode($variables);

//closes the 2 curl requests and finishes the execution
curl_close($curl);
curl_close($curl2);
