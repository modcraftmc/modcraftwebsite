var seconds = 2;

    function countdown() {
        seconds = seconds - 1;
        if (seconds < 0) {
            document.getElementById('download').click();

          
        } else {

            window.setTimeout("countdown()", 1000);
        }
    }

    countdown();
