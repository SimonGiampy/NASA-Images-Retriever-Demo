$(document).ready(function() {

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
