<pre>
<?php
$reqs = shell_exec('cat /home/ubuntu/web/access.log');
foreach($reqs as $r) {
  $parts = explode(" ", $r);
  $parts[0] = substr(md5($parts[0]), 0, 8);
  echo implode(" ", $parts) . "\n";
}

?>
</pre>
