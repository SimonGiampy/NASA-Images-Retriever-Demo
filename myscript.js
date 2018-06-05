$(document).ready(function() {
	//press ctrl+f5 to refresh the page and apply the changes, or use incognito mode to debug javascript, or else disable caching in the browser advanced options
	$("#result").toggle();
	if ($("body").hasClass("Description")) {
		var nasa_id = $("#nasa-id").text();
		console.log(nasa_id);
		var xhttp2 = new XMLHttpRequest();
		xhttp2.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var json = JSON.parse(this.responseText);
				$("#title").text(json[0]);
				$("#description").text(json[1]);
				$("#date").text(json[2]);
				$("#preview").attr("src", json[3]);
				$("#keywords").text(json[4]);
				$("#orig-link").text(json[5]);
			}
		}
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

function clearPage() {
	$("#result").hide();
	$("#columns").html("");
};
