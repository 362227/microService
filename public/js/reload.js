// Poll the server each 60 seconds
window.setInterval(function() {
    $.getJSON('/turns', function(data) {
        // Here the data JSON returned by a PHP script
        // e.g. data.count - count of sessions online
        // data.users - could be array of user objects, etc
        $('.front').text(data.value); // Update some DOM element with new number

		//responsiveVoice.speak("hello world");
        //$('.back').text(3); // Update some DOM element with new number
        //$(".title").flip(false);
    });
}, 1200);