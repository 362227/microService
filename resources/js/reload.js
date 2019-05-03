// Poll the server each 60 seconds
window.setInterval(function() {
    $.getJSON('/turns.php', function(data) {
        // Here the data JSON returned by a PHP script
        // e.g. data.count - count of sessions online
        // data.users - could be array of user objects, etc
        alert(data);
        $('#front').text(data.count); // Update some DOM element with new number
    });
}, 600);