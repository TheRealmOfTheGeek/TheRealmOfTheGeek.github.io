<?php
header('Server: ROTGServer');
$year = date('Y');
$email = 'contact@therotg.com';
$author = 'Kenton Vizdos';
$url = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$meta = '
		<meta name="reply-to" content="' . $email . '">
		<meta name="author" content="' . $author . ', ' . $email . '">
		<meta property="og:type" content="website" />
		<meta property="og:url" content="' . $url . '">
		<meta property="og:image" content="https://www.nick-e.co.uk/tools/api/webimg?getfull=true&url=' . rawurlencode($url) . '" />
';
?>
