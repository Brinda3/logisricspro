//alt arrow ####################

    document.onkeydown = function(e) {
         if (e.altKey && (e.keyCode === 36)) {//Alt+home blocked.
            return false;
        }
        if (e.altKey && (e.keyCode === 70)) {//Alt+f blocked.
            return false;
        }
		if (e.altKey && (e.keyCode === 37)) {//Alt+left arrow  blocked.
            return false;
        }
		if (e.altKey && (e.keyCode === 39)) {//Alt+right arrow  blocked.
            return false;
        }
    };//alt arrow ###########################