$(document).ready(function() {
    $('.reply').click(function() {
        var id = this.getAttribute('rep')
        document.getElementById(id).style.display = 'flex'
    })
    $('btnRate').click(function() {
        alert('có')
        var idB = $('#idB').val()
        var idm = $('#idmem').val()
        var nd = $('#ratetext').text()
        var link = "/Rate?idB=" + idB + "&idm=" + idm + "&nd=" + nd
        alert(link)
        location.href = link
    })
})