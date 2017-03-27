function setHighscore(hs) {
	if (typeof(Storage) !== "undefined") {
	    // Store
	    localStorage.setItem("highscore", hs + '');
	} else {
	    document.getElementById("hs_death").innerHTML = "Sorry, your browser does not support our highscore system (local storage)...";
	}
}
