<?php
$i = json_decode(file_get_contents('https://api.nick.tools/ipinfo?ip=' . $_SERVER['REMOTE_ADDR']), true)['info'];
$org = $i['org'];
if (stripos($org, 'GitHub') !== false) {
  echo "Starting the pull!!!\n";
echo shell_exec('bash /home/ubuntu/web/pull.sh');
echo shell_exec('bash /home/ubuntu/web/restart.sh');
echo "\n The Server has updated from github successfully!";
} else {
  http_response_code(403); // return error 403 forbidden if they're not allowed to pull
}
?>

