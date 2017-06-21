
var dur;
var tl;
var amnt;
var table;
var placedAt;
var curPrice;
var type = document.getElementById('sumname').textContent.split(" | ");

setInterval(function(){
  curPrice = document.getElementById('pri').textContent;
  table = document.getElementById("stat-table");

  for (var i = 1, row; row = table.rows[i]; i++) {
    if(row == null) {

    } else {
    var rw = row.className;
    var timeleft = row.cells[2];
    console.log(timeleft.textContent);
    var tl = timeleft.textContent;

    if(tl >= 1) {
      timeleft.textContent = "" + timeleft.textContent - i;
      if(row.cells[5].textContent == "up") {
        if(row.cells[0].textContent < curPrice) {
          console.log(parseInt(row.cells[4].textContent) + funds);

          row.className = "good";
        } else {
          row.className = "bad";
          console.log(parseInt(row.cells[4].textContent) + funds);
        }
      }

      if(row.cells[5].textContent == "down") {
        if(row.cells[0].textContent > curPrice) {
          console.log("GOOD");

          row.className = "good";
        } else {
          row.className = "bad";
          console.log("BAD!!");
        }
      }

    } else {
      if(row.className == "good") {
        funds = parseInt(row.cells[4].textContent) + funds;

        var tablez = document.getElementById("history-table");
        var rowz = tablez.insertRow(1);
        var cell0z = rowz.insertCell(0);
        var cell1z = rowz.insertCell(1);
        var cell2z = rowz.insertCell(2);
        var cell3z = rowz.insertCell(3);
        var cell4z = rowz.insertCell(4);
        var cell5z = rowz.insertCell(5);
        var cell6z = rowz.insertCell(6);

        rowz.className = row.className;
        cell0z.innerHTML = row.cells[0].textContent;
        cell1z.innerHTML = row.cells[1].textContent;
        cell2z.innerHTML = row.cells[2].textContent;
        cell3z.innerHTML = row.cells[3].textContent;
        cell4z.innerHTML = row.cells[4].textContent;
        cell5z.innerHTML = row.cells[5].textContent;
        cell6z.innerHTML = row.cells[6].textContent;

        table.deleteRow(i);
        saveScore();

        $.ajax({
            data: {
              symbol: row.cells[6].textContent + "",
              pro: row.cells[4].textContent + "",
              lw: 1
            },
            url: 'ss.php',
            method: 'POST', // or GET
            success: function(msg) {

            }
        });

      }

      if(row.className == "bad") {
        var tablez = document.getElementById("history-table");
        var rowz = tablez.insertRow(1);
        var cell0z = rowz.insertCell(0);
        var cell1z = rowz.insertCell(1);
        var cell2z = rowz.insertCell(2);
        var cell3z = rowz.insertCell(3);
        var cell4z = rowz.insertCell(4);
        var cell5z = rowz.insertCell(5);

        rowz.className = row.className;
        cell0z.innerHTML = row.cells[0].textContent;
        cell1z.innerHTML = row.cells[1].textContent;
        cell2z.innerHTML = row.cells[2].textContent;
        cell3z.innerHTML = row.cells[3].textContent;
        cell4z.innerHTML = row.cells[4].textContent;
        cell5z.innerHTML = row.cells[5].textContent;

        table.deleteRow(i);
        saveScore();

        $.ajax({
            data: {
              symbol: row.cells[6].textContent + "",
              pro: row.cells[4].textContent + "",
              lw: 0
            },
            url: 'ss.php',
            method: 'POST', // or GET
            success: function(msg) {

            }
        });
      }
    }

  }
  }
}, 1000);

function addToTable(variable) {
    var table = document.getElementById("stat-table");
    var row = table.insertRow(1);
    var cell0 = row.insertCell(0);
    var cell1 = row.insertCell(1);
    var cell2 = row.insertCell(2);
    var cell3 = row.insertCell(3);
    var cell4 = row.insertCell(4);
    var cell5 = row.insertCell(5);
    var cell6 = row.insertCell(6);

    row.className = "tl " + table.rows.length;
    cell0.innerHTML = placedAt;
    cell1.innerHTML = dur + " Seconds";
    cell2.innerHTML = tl + "";
    cell3.innerHTML = "$" + amnt;
    cell4.innerHTML = parseInt(amnt * 1.5) + ""; // PUT NEW MATH HERE TO FIGURE OUT HOW MUCH THE PERSON GETS BACK!!!!!
    cell5.innerHTML = variable;
    cell6.innerHTML = ss;

}

$("#up" ).click(function() {
  amnt = document.getElementById("bid-amnt").value;
  dur = document.getElementById("turbo-bid").value;
  tl = dur;

  if(parseInt(funds) >= parseInt(amnt)) {
    funds = funds - amnt;
    placedAt = document.getElementById('pri').textContent;
    addToTable("up");

  } else {
    alert("You don't have enough available funds for that amount.");
    console.log(amnt + ", " + funds);
  }
  document.getElementById('af').innerHTML = "$" + funds;
});

$("#down" ).click(function() {
  amnt = document.getElementById("bid-amnt").value;
  dur = document.getElementById("turbo-bid").value;
  tl = dur;

  if(funds >= amnt) {
    funds = funds - amnt;
    placedAt = document.getElementById('pri').textContent;
    addToTable("down");

  } else {
    alert("You don't have enough available funds for that amount.");
  }
  document.getElementById('af').innerHTML = "$" + funds;
});
