var users = [];




$(document).ready(function() {

  var table = document.getElementById("usrTable"),
      rows = table.getElementsByTagName("tr"),
      i;

  function onRowClick(tableId, callback) {
    for (i = 0; i < rows.length; i++) {
        table.rows[i].onclick = function (row) {
            return function () {
                callback(row);
            };
        }(table.rows[i]);
    }
  };






  $('table').on('click', 'tr', function(e){
    var index = users.indexOf($(this).closest('tr').value);
      users.splice(index, 1)

     $(this).closest('tr').remove()
     recreateWheel();

  })

});

function addUser() {
  var usr = document.getElementById("userInput").value;
  var form = document.getElementById("form");




  users.push(usr+"");

  var table = document.getElementById("usrTable");
      var row = table.insertRow(0);
      var cell1 = row.insertCell(0);
      cell1.innerHTML = usr;

      form.reset();

      recreateWheel();

      for (i = 0; i < users.length; i++) {
        console.log(users[i]);
      }
}
