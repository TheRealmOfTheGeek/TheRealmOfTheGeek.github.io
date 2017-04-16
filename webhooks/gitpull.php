<?php
$i = json_decode(file_get_contents('https://api.nick.tools/ipinfo?ip=' . $_SERVER['REMOTE_ADDR']), true)['info'];
$org = $i['org'];
if (stripos($org, 'GitHub') !== false) {
shell_exec('bash /home/ubuntu/web/pull.sh');
echo "The Server has updated from github successfully!";
} else {
  http_response_code(403);
}
?>

