<?php
include '../includes/rotg.php';
$info = file_get_contents('https://api.nick.tools/youtubechannel?id=UCuX4KZBMpQLToSwJWy-jCBw');
$info = json_decode($info, true);
$url = $info['channel']['image'];
$content = file_get_contents($url);
header('Content-Type: image/jpeg');
echo $content;
?>
