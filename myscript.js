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

/*
<script>
    function reqListener () {
      console.log(this.responseText);
    }

    var oReq = new XMLHttpRequest(); //New request object
    oReq.onload = function() {
        //This is where you handle what to do with the response.
        //The actual data is found on this.responseText
        alert(this.responseText); //Will alert: 42
    };
    oReq.open("get", "get-data.php", true);
    //                               ^ Don't block the rest of the execution.
    //                                 Don't wait until the request finishes to
    //                                 continue.
    oReq.send();
</script>

*/
