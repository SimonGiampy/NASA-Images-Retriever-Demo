<?php
$sampleQuery = "https://images-api.nasa.gov/search?q=etna&media_type=image";

//initialize curl request and sets the return transfer to 1 so it doesn't output it directly to the screen
//the json output from the get request is then decoded into an associative array
$curl = curl_init($sampleQuery);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$json = curl_exec($curl);
$decodedJson = json_decode($json, true);

echo "<p>";

//returns total number of results
$totalHits = $decodedJson["collection"]["metadata"]["total_hits"];
echo "total hits: ".$totalHits."<br />";

$items = $decodedJson["collection"]["items"];
for ($i = 0; $i < $totalHits; $i++) {
    //title
    $title = $items[$i]["data"][0]["title"];
    echo "title ".$i.": ".$title."<br />";

    //description
    $description = $items[$i]["data"][0]["description"];
    echo "description ".$i.": ".$description."<br />";

    //keywords
    $keywords = $items[$i]["data"][0];
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
//close curl request
curl_close($curl);
