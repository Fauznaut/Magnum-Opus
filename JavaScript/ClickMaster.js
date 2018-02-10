var timeLeft = 10;
var timerStarted = false;

$(document).ready(function(){
    var clicks = 0;
    $('#ClickMasterPlayArea').click(function(){
        console.log(timerStarted);
        if(!timerStarted) {
            timerStarted = true;
            $('#ClickMasterPlayAreaText').text("Click, you bitch!");
            var timer = setInterval(function(){
                timeLeft--;
                $('#ClickMasterTimer').text(timeLeft);
                if (timeLeft <= 0) {
                    clearInterval(timer);
                    timerStarted = false;
                }
            },1000);
        }
    });
    if (timeLeft > 0) {
        $('#ClickMasterPlayArea').click(function(){
            clicks++;
            $('#ClickMasterCounter').text(clicks);
        });
    }
});
