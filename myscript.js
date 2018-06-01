$(document).ready(function() {
	//press ctrl+f5 to refresh the page and apply the changes, or use incognito mode to debug javascript, or else disable caching in the browser advanced options
	//$("div").append("<b>Warning</b>");  use this to add elements in web page
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
			// TODO: decode json contained in responseText and memorize it in an array
			console.log(this.responseText);
		}
	};
	//send request to php file, with the value inserted in the text field
	xHttp.open("GET", "get-images.php?query=" + $("#text-search").val() + "&media_type=image", true);
	xHttp.send();

	//don't know why but it's needed
	return false;
};
