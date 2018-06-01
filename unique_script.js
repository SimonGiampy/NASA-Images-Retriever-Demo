function doEverything() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			console.log(xhttp.responseText);
		}
	};
	var url = "https://images-api.nasa.gov/search?q=" + $("text-search2").value + "&media_type=image";
	var apodUrl = "https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY";
	var homeImage = "https://api.nasa.gov/planetary/earth/imagery/?lon=16.3130&lat=38.9639&api_key=DEMO_KEY";
	xhttp.open("GET", apodUrl, true);
	xhttp.send();
	return false;
};
