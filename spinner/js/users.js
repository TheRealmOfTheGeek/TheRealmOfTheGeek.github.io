
function checkEven(val){
     return (val%2 == 0);
}
var users = [ 'Delete Me and add real people pls!', 'Spin Again!' ];

$(document).ready(function() {



  for (i = 0; i < users.length; i++) {
     var table = document.getElementById("myTable");
     var row = table.insertRow(0);
     var user = row.insertCell(0);

     user.innerHTML = users[i] + "";

  }

  var table = document.getElementById("myTable"),
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
    var index = users.indexOf($(this).closest('tr').text());
    console.log($(this).closest('tr').text());
      users.splice(index, 1);


     $(this).closest('tr').remove();
     recreateWheel();

  })

});

function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;

    document.getElementById("myTable").deleteRow(i);
}

function addUser() {
  var usr = document.getElementById("userInput").value;
  var form = document.getElementById("form");




  users.push(usr+"");


  var table = document.getElementById("myTable");
      var row = table.insertRow(0);
      var cell1 = row.insertCell(0);
      cell1.innerHTML = usr;

      form.reset();

      recreateWheel();

}
