<?php
// TODO: add link to next page for results, adding page=2 to the parameters of the query

$query = "https://images-api.nasa.gov/search?q=".$_GET['query']."&media_type=image";

//initialize curl request and sets the returntransfer to 1 so it doesn't output it directly to the screen
//the json output from the get request is then decoded into an associative array
$curl = curl_init($query);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$json = curl_exec($curl);
$decodedJson = json_decode($json, true);

//returns total number of results
// TODO: handle 0 as hits, or bad requests
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

for ($i = 0; $i < $maxNumber; $i++) {
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


/*example of relevant data to be acquired from the json. useless code for the moment

title
$title = $items[$i]["data"][0]["title"];
echo "title ".$i.": ".$title."<br />";

description
$description = $items[$i]["data"][0]["description"];
echo "description ".$i.": ".$description."<br />";

href image thumb | original
$previewImage = $items[$i]["links"][0]["href"];
$previewImage = str_replace("thumb", "orig", $previewImage);
echo "preview image link ".$i.": ".$previewImage."<br />";

date of upload
$date = $items[$i]["data"][0]["date_created"];
$date = substr($date, 0, 10);
$date = date("d m Y", strtotime($date));
echo "date of upload ".$i.": ".$date."<br />";

keywords
$keywords = $items[$i]["data"][0];
echo "keywords ".$i.": ";
if (array_key_exists("keywords", $keywords)) {
    $keywords = $keywords["keywords"];
}
foreach ($keywords as $keyword) {
    echo $keyword." ";
}
echo "<br />";
*/
