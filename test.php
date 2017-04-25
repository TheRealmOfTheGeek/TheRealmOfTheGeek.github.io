<!DOCTYPE html>
<html>
<body>

<?php
$file = fopen("supporters.txt","r");

while(! feof($file))
  {
  echo fgets($file). "<br />";
  }

fclose($file);

?>

<h2>Convert a string written in JSON format, into a JavaScript object.</h2>

<p id="demo"></p>

</body>
</html>
