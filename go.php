<?php
$u = 'https://therotg.com/';
if (isset($_GET['url'])) {
$u = rawurldecode($_GET['url']);
}
header('Location: ' . $u);
exit();
?>
