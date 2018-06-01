<!DOCTYPE html>
<!--
when the form is submitted, it calls the get-images script. then it has do send data (in some way) to the javascript, which then puts the data in the web page using jQuery
use ajax (AJAX = Asynchronous JavaScript And XML) to send a request from the js file when the form is submitted
the php script, after computing the result, sends in some way data to the js file, which uses them to chage the contents of the page

useful links:
https://stackoverflow.com/questions/23740548/how-to-pass-variables-and-data-from-php-to-javascript
https://stackoverflow.com/questions/14220321/how-do-i-return-the-response-from-an-asynchronous-call
look at the stored web pages in edge for details
-->

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="mystyle.css">

		<title>NASA API</title>
	</head>

	<body>
		<!--add container to the entire screen, with margins and paddings-->
		<!-- action="get-images.php" it isn't used because the php script is called from the js script. return callPhp is the js function to be called-->
		<p>
			<form method="get" name="query" onsubmit="return callPhp()">
				<input type="text" name="text-search" id="text-search" autofocus required/>
				<input type="submit" name="search" value="request through php, 1 method" />
			</form>
		</p>

		<p>
			<!-- this form sends the input to the unique_script.js which is just a test -->
			<form method="get" name="query2" onsubmit="return doEverything()">
				<input type="text" name="text-search2" id="text-search2" autofocus required/>
				<input type="submit" name="search2" value="direct js request" />
			</form>
		</p>

		<p class="test">example text
		</p>

		<div class="card-columns">
			<div class="card">
				<img class="card-img-top" src="https://images-assets.nasa.gov/image/PIA01971/PIA01971~thumb.jpg" />
				<div class="card-body">
					<h5 class="card-title">Image title</h5>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
				</div>
			</div>
		</div>


		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script src="myscript.js"></script>
		<script src="unique_script.js"></script>
	</body>

</html>
<!--
when the search is finished, the website has to dynamically create a responsive grid of images, adjusting the height based on the image, while the width is already set

first the website fetches the 100 images (just image link and title), then it creates one image at time, in a dynamic way
each image can be contained in a bootstrap card (and order them in columns): <div class="card-columns"><div class="card"><img class="card-img" /></div></div>
	this way each image is in a card (with the image on the top and the description at the body of the card)
	card-columns class puts the images in cards which vary the height but not the width. the columns are ordered from top to bottom, and then from left to right
	when it has shown all images that fill the screen up, it stops from loading more of them. the page waits for a scroll to load more images at the bottom (infinite scroll)
another method to add images is to use Masonry library, which uses jquery or js and css to do this task in an easier way
	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

clicking on a image results to head the user to another page, where the details about it are shown
	implement a way to pass data through the details page, which fetches all the relevant data about that single image and displays them

add infinite scroll which stops when it has already shown the 100 images
then it prompts the link to the next page (adding page=2 to the query of results)

-->
