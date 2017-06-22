function saveScore() {
  if (typeof(Storage) !== "undefined") {
      // Store
      localStorage.setItem("score", funds);
    } else {
      document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
  }
}

function addFunds() {
  var addfund = document.getElementById('add-funds').value;
  funds = parseInt(addfund) + parseInt(funds);
  saveScore();
}
