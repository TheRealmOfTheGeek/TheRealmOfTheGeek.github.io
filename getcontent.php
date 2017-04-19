<?php
if (!isset($_GET['url'])) {
http_response_code(400);
exit();
}
$url = rawurldecode($_GET['url']);
$ch = curl_init();
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt ($ch, CURLOPT_USERAGENT, '$_SERVER['HTTP_USER_AGENT']);
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_HEADER, false);
$content = curl_exec($ch);
$ct = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
http_response_code($code);
header('Content-Type: ' . $ct);
echo $content;
?>
