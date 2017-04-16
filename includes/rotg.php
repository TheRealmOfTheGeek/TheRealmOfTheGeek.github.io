<?php
header('Server: ROTGServer');
if (isset($_GET['debug'])) {
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
}
$year = date('Y');
$email = 'contact@therotg.com';
$author = 'Kenton Vizdos';
$logo = 'https://therotg.com/static/logo.jpg';
$url = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$meta = '
		<meta name="language" content="en">
		
		<link rel="canonical" href="' . $url . '">
		<link rel="icon" href="' . $logo . '" sizes="16x16" type="image/jpeg">
		<link rel="shortcut icon" href="' . $logo . '" sizes="16x16" type="image/jpeg">

		<meta name="reply-to" content="' . $email . '">
		<meta name="author" content="' . $author . ', ' . $email . '">
		<meta property="og:type" content="website" />
		<meta property="og:url" content="' . $url . '">
		<meta property="og:image" content="https://www.nick-e.co.uk/tools/api/webimg?getsmall=true&url=' . rawurlencode($url) . '" />
';
?>
