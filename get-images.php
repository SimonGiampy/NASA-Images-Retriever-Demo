<?php
$query = "https://images-api.nasa.gov/search?q=".$_GET['text-search']."&media_type=image";

//initialize curl request and sets the returntransfer to 1 so it doesn't output it directly to the screen
//the json output from the get request is then decoded into an associative array
$curl = curl_init($query);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$json = curl_exec($curl);
$decodedJson = json_decode($json, true);

echo "<p>";

//returns total number of results
$totalHits = $decodedJson["collection"]["metadata"]["total_hits"];
echo "total hits: ".$totalHits."<br />";

//array containing every item in the json
$items = $decodedJson["collection"]["items"];
//loops through each item in the set of images, maximum of 100 elements retrieved in first page
for ($i = 0; $i < 100; $i++) {
    //title
    $title = $items[$i]["data"][0]["title"];
    echo "title ".$i.": ".$title."<br />";

    //description
    $description = $items[$i]["data"][0]["description"];
    echo "description ".$i.": ".$description."<br />";

    //date of upload
    $date = $items[$i]["data"][0]["date_created"];
    $date = substr($date, 0, 10);
    $date = date("d m Y", strtotime($date));
    echo "date of upload ".$i.": ".$date."<br />";

    //keywords
    $keywords = $items[$i]["data"][0];
    echo "keywords ".$i.": ";
    if (array_key_exists("keywords", $keywords)) {
        $keywords = $keywords["keywords"];
    }
    foreach ($keywords as $keyword) {
        echo $keyword." ";
    }
    echo "<br />";

    //href image thumb / original
    $previewImage = $items[$i]["links"][0]["href"];
    //$previewImage = str_replace("thumb", "orig", $previewImage);
    echo "preview image link ".$i.": ".$previewImage."<br />";
}
echo "</p>";

//// TODO: add link to next page for results
//close curl request
curl_close($curl);
