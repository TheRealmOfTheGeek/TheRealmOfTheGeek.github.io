<?php
include '../includes/rotg.php';
$info = file_get_contents('https://api.nick.tools/youtubechannel?id=UCuX4KZBMpQLToSwJWy-jCBw');
$info = json_decode($info, true);
$url = $info['channel']['image'];
$ch = curl_init();

curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_USERAGENT, 'ROTG Logo');
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_HEADER, false);
$content = curl_exec($ch);
$ct = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
if ($code == 200) {
  header('Content-Type: ' . $ct);
  echo $content;
} else {
  http_response_code(503);
}
?>
