$(document).ready(function() {
    $('.reply').click(function() {
        var id = this.getAttribute('rep')
        document.getElementById(id).style.display = 'flex'
    })
})