<pre>
<?php
$reqs = shell_exec('cat /home/ubuntu/web/access.log');
$u = shell_exec('cat /home/ubuntu/web/access.log | awk '{print $1}' | sort | uniq | wc -l');
$top = shell_exec("cat /home/ubuntu/web/access.log | awk '{print $5}' | sort | uniq -c | sort -rh");
$d = explode("\n",$reqs);
echo "Unique Visitors: " . $u . "\n";
echo "Total Requests: " . count($d) . "\n";
echo "Top Pages:\n" . $top . "\n";
foreach($d as $r) {
  $parts = explode(" ", $r);
  $parts[0] = substr(md5($parts[0]), 0, 8);
  echo implode(" ", $parts) . "\n";
}

?>
</pre>
