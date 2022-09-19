$(document).ready(function() {
    var menu = document.getElementById("header");


    $(window).bind('mousewheel', function(event) {
        if (event.originalEvent.wheelDelta >= 0) {
            if (window.pageYOffset >= 100)
                menu.classList.add("sticky")
            else
                menu.classList.remove("sticky")
        } else {
            menu.classList.remove("sticky")
        }
    })
})