$(document).ready(function() {
	//press ctrl+f5 to refresh the page and apply the changes, or use incognito mode to debug javascript, or else disable caching in the browser advanced options
	//$("div").append("<b>Warning</b>");

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


});

function callPhp() {
	//create xmlHttpRequest to call the php server script
	var xHttp = new XMLHttpRequest();
	//when the response is ready from the server it sends a log message
	xHttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			console.log("triggered");
		}
	};
	//send request to php file, with random key to avoid cached file
	xHttp.open("GET", "get-images.php?t=" + Math.random(), true);
	xHttp.send();

	//don't know why but it's needed in order to work
	return false;
};
