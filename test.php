<html>
<body>
<?php
  $handle = fopen("supporters.txt", "r");
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
          var info = explode(" ||| ", fgets($file));

          var user = info[0];
          var msg = info[1];
          var dt = info[2];

          echo "'s said <br />";
        }

        fclose($handle);
    } else {
        // error opening the file.
    } 
/*
  while(! feof($file)) {
    
    var info = explode(" ||| ", fgets($file));

    var user = info[0];
    var msg = info[1];
    var dt = info[2];

    echo "'s said <br />";
    
    }
*/
  fclose($file);
  
  ?>


  <div>hi</div>
  
</body>
</html>
