<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="mystyle.css">

		<title>NASA Description</title>
	</head>

	<body class="Description">

		<div id="nasa-id" class="d-none">
			<?php echo $_GET["id"]; ?>
		</div>

		<div class="container p-3">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<img id="preview" src="" />
				</div>
				<!-- better visualization -->
				<div class="col-md-6 col-sm-12">
					<div class="jumbotron">
						<div class="container">
							<h1 class="display-5" id="title"></h1>
							<p class="lead" id="description"></p>
							<p class="lead" id="date"></p>
							<p class="lead" id="preview"></p>
							<p class="lead" id="keywords"></p>
							<a class="lead" href="" id="orig-link">Visualizza immagine originale</a>
						</div>
					</div>
				</div>
			</div>
		</div>


		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script src="myscript.js"></script>
	</body>

</html>
