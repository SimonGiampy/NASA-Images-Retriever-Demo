$(document).ready(function() {
	//press ctrl+f5 to refresh the page and apply the changes, or use incognito mode to debug javascript, or else disable caching in the browser advanced options

	/*this is just a text of jquery functions
	$("p").on({
		mouseenter: function() {
			$(this).css("background-color", "lightgray");
		},
		mouseleave: function() {
			$(this).css("background-color", "lightblue");
		},
		click: function() {
			$(this).css("background-color", "yellow");
		}
	});
	*/

});

function callPhp() {
	//create xmlHttpRequest to call the php server script
	var xHttp = new XMLHttpRequest();
	//callback function called when the response is ready to be processed
	xHttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			//it adds to the div card-columns tag all the cards representing the images
			//createImageCards calls the function (sending as a parameter the responseText from the php script) and receives all the html to be added to the page
			$("#columns").append(createImageCards(this.responseText));
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
	var json = JSON.parse(data);
	var i;
	var html = "";
	// TODO: handle not valid (0 chars) json input
	for (i = 0; i < json.length; i++) {
		var title = json[i]["title"];
		var link = json[i]["link"];
		var origLink = link.replace("thumb", "orig");

		html = html + '<div class="card"><img class="card-img-top" src="' + link + '"/>' + '<div class="card-body"><h6 class="card-title">' + title + '</h6>';
		html = html + '<a href="#" class="card-link">Descrizione</a><a href="' + origLink + '" class="card-link">Originale</a></div></div></div>';
	}
	return html;
};
