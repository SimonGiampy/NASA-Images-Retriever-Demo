/*this function if called when the web page is initially shown*/
$(document).ready(function() {
	$("#result").toggle();
	if ($("body").hasClass("Description")) {
		/*here it sets the content of the web page of the description of the image chosen. it puts all the retrieved data from get-description.php script*/
		var nasa_id = $("#nasa-id").text();
		console.log(nasa_id);
		var xhttp2 = new XMLHttpRequest();
		xhttp2.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var json = JSON.parse(this.responseText);
				$("#title").text(json[0]); 
				$("#description").text(json[1]);
				$("#date").text("Data di creazione: " + json[2]);
				$("#preview").attr("src", json[3]); //image preview link source
				$("#keywords").text(json[4]); //key words
				$("#orig-link").attr("href", json[5]); //creates a href link to the original image
			}
		}
		/*it asks the php script to retrieve all the necessary info about the chosen image*/
		xhttp2.open("GET", "get-description.php?id=" + nasa_id);
		xhttp2.send();
	}
});

function callPhp() {
	clearPage();
	//create xmlHttpRequest to call the php server script
	var xHttp = new XMLHttpRequest();
	//callback function called when the response is ready to be processed
	xHttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			//it adds to the div card-columns tag all the cards representing the images
			//createImageCards calls the function (sending as a parameter the responseText from the php script) and receives all the html to be added to the page
			var json2 = JSON.parse(this.responseText);
			$("#result").toggle().text("Risultati trovati: " + json2[0]);
			$("#columns").append(createImageCards(json2));
		}
	};
	//send request to php file, with the value inserted in the text field
	xHttp.open("GET", "get-images.php?query=" + $("#text-search").val(), true);
	xHttp.send();

	//don't know why but it's needed
	return false;
};

//return a variable containing all the html needed to create the web page and filling it with the images
function createImageCards(data) {
	var i;
	var html = "";
	for (i = 1; i < data.length; i++) {
		var title = data[i]["title"];
		var link = data[i]["link"];
		var id = data[i]["id"];

		html = html + '<div class="card"><a href="description.php?id=' + id + '"><img class="card-img-top" src="' + link + '"/>' + '<div class="card-body"><h6 class="card-title">' + title + '</h6></div></div></a></div>';
	}
	return html;
};
/*this function clears the page when a new search is starting to be performed*/
function clearPage() {
	$("#result").hide();
	$("#columns").html("");
};
