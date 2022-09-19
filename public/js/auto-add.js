$(document).ready(function() {
    var menu = document.getElementById("header");
    var top = window.pageXOffset

    $(window).bind('mousewheel', function(event) {
        if (top >= 100) {
            if (event.originalEvent.wheelDelta >= 0) {
                menu.classList.add("sticky")
            } else {
                menu.classList.remove("sticky")
            }
        }
    })
})