<pre>
<?php
$reqs = shell_exec("cat /home/ubuntu/web/access.log | grep -v '172.26.8.61 text/html; charset=UTF-8 \"-\" | \"Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2.13) Gecko/20101203 Firefox/3.6.13\"'");
$u = shell_exec("cat /home/ubuntu/web/access.log | grep -v '172.26.8.61 text/html; charset=UTF-8 \"-\" | \"Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2.13) Gecko/20101203 Firefox/3.6.13\"' |awk '{print $1}' | sort | uniq | wc -l");
$u = str_replace("\n","",$u);
$top = shell_exec("cat /home/ubuntu/web/access.log | grep -v '172.26.8.61 text/html; charset=UTF-8 \"-\" | \"Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2.13) Gecko/20101203 Firefox/3.6.13\"' | awk '{print $5}' | sort | uniq -c | sort -rh");
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
