<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>NASA API</title>
</head>
<body>
	<form method="get" name="query" action="get-images.php">
		<input type="text" name="text-search" autofocus required/>
		<input type="submit" name="search" value="Search" />
	</form>

	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
</body>
</html>
<!--
when the search is finished, the website has to dynamically create a responsive grid of images, adjusting the height based on the image, while the width is already set

first the website fetches the 100 images, afterwards it creates one image at time
each image can be contained in a bootstrap card (ordered in columns): <div class="card-columns"><div class="card"><img class="card-img" /></div></div>
	this way each image is in a card (with the image on the top and the description at the body of the card)
	card-columns puts the images in cards which vary the height but not the width. the columns are ordered from top to bottom, and then from left to right
	when it has shown images till the bottom of the screen, it finishes loading more. the page wait for the scroll to load more images at the bottom


add infinite scroll which finishes when it has already shown the 100 images
then it prompts the link to the next page (adding page=2 to the query of results)


-->
