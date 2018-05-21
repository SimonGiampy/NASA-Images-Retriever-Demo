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
