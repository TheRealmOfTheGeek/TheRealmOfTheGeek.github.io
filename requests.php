<pre>
<?php
$reqs = shell_exec('cat /home/ubuntu/web/access.log');
$d = explode("\n",$reqs);
echo "Total Requests: " . count($d) . "\n";
foreach($d as $r) {
  $parts = explode(" ", $r);
  $parts[0] = substr(md5($parts[0]), 0, 8);
  echo implode(" ", $parts) . "\n";
}

?>
</pre>
