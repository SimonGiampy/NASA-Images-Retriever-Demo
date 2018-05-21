<!DOCTYPE html>
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
		<!-- might use container class to organize better the content -->
		<form method="get" name="query" action="get-images.php">
			<input type="text" name="text-search" autofocus required/>
			<input type="submit" name="search" value="Search" />
		</form>
		<br />

		<p class="test">example text in teteg
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

			<div class="card bg-primary text-white text-center p-3">
				<blockquote class="blockquote mb-0">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
					<footer class="blockquote-footer">
						<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
					</footer>
				</blockquote>
			</div>
			<div class="card text-center">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
			<div class="card">
				<img class="card-img" src="https://images-assets.nasa.gov/image/PIA20602/PIA20602~thumb.jpg" alt="Card image">
			</div>
			<div class="card p-3 text-right">
				<blockquote class="blockquote mb-0">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<footer class="blockquote-footer">
						<small class="text-muted"> Someone famous in <cite title="Source Title">Source Title</cite></small>
					</footer>
				</blockquote>
			</div>
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
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

			<div class="card bg-primary text-white text-center p-3">
				<blockquote class="blockquote mb-0">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
					<footer class="blockquote-footer">
						<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
					</footer>
				</blockquote>
			</div>
			<div class="card text-center">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
			<div class="card">
				<img class="card-img" src="https://images-assets.nasa.gov/image/PIA20602/PIA20602~thumb.jpg" alt="Card image">
			</div>
			<div class="card p-3 text-right">
				<blockquote class="blockquote mb-0">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<footer class="blockquote-footer">
						<small class="text-muted">Someone famous in <cite title="Source Title">Source Title</cite></small>
					</footer>
				</blockquote>
			</div>
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
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

			<div class="card bg-primary text-white text-center p-3">
				<blockquote class="blockquote mb-0">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
					<footer class="blockquote-footer">
						<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
					</footer>
				</blockquote>
			</div>
			<div class="card text-center">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
			<div class="card">
				<img class="card-img" src="https://images-assets.nasa.gov/image/PIA20602/PIA20602~thumb.jpg" alt="Card image">
			</div>
			<div class="card p-3 text-right">
				<blockquote class="blockquote mb-0">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<footer class="blockquote-footer">
						<small class="text-muted">Someone famous in <cite title="Source Title">Source Title</cite></small>
					</footer>
				</blockquote>
			</div>
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
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

			<div class="card bg-primary text-white text-center p-3">
				<blockquote class="blockquote mb-0">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
					<footer class="blockquote-footer">
						<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
					</footer>
				</blockquote>
			</div>
			<div class="card text-center">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
			<div class="card">
				<img class="card-img" src="https://images-assets.nasa.gov/image/PIA20602/PIA20602~thumb.jpg" alt="Card image">
			</div>
			<div class="card p-3 text-right">
				<blockquote class="blockquote mb-0">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<footer class="blockquote-footer">
						<small class="text-muted">Someone famous in <cite title="Source Title">Source Title</cite></small>
					</footer>
				</blockquote>
			</div>
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
			</div>
		</div>


		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script src="myscript.js"></script>

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
