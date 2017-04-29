<?php
function userexists($e) {
	global $db;
	$result = $db->getItem([
		'TableName' => 'users',
		'Key' => [
			'Users' => [
				'S' => $e
			]
		]
	]);
	return $result['Item'] != null;
}
function getuser($e) {
	global $db;
	$result = $db->getItem([
		'TableName' => 'users',
		'Key' => [
			'Users' => [
				'S' => $e
			]
		]
	]);
	return $result['Item'];
}
function createaccount($e, $info) {
	global $db;
	$i = [];
	$i['Users'] = ['S' => $e];
	if (isset($info['name'])) {
		$i['name'] = ['S' => $info['name']];
	}
	if (isset($info['lang'])) {
		$i['lang'] = ['S' => $info['lang']];
	}
	if (isset($info['picture'])) {
		$i['picture'] = ['S' => $info['picture']];
	}
	$result = $db->putItem([
		'TableName' => 'users',
		'Item' => $i
	]);
	echo 'Success!<br>';
	echo '<pre>' . print_r($i, true) . '</pre>';

}
function showsignin() {
	global $secret;
	echo '
<html>
<head>
<meta name="google-signin-client_id" content="' . $secret['id'] . '.apps.googleusercontent.com">
</head>
<body>
<div id="my-signin2"></div>
  <script>
    function onSuccess(googleUser) {
      console.log("Logged in as: " + googleUser.getBasicProfile().getName());
	  document.getElementById("i").value = googleUser.getAuthResponse().id_token;
	  document.getElementById("s").click();
    }
    function onFailure(error) {
      alert("Error!");
    }
    function renderButton() {
		' . "
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
	  " . '
    }
  </script>
	<form method="POST" action="">
		<input id="i" type="text" name="idt" hidden>
		<input id="s" type="submit" hidden>
	</form>
  <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
</body>
</html>';
}
$cid = $secret['id'];
if (isset($_POST['idt'])) {
	$id_token = $_POST['idt'];
	$client = new Google_Client(['client_id' => $cid . '.apps.googleusercontent.com']);
	$payload = $client->verifyIdToken($id_token);
	if ($payload) {
		if (userexists($payload['email'])) {
			echo 'You exist!<br>';
			echo '<pre>' . print_r(getuser($payload['email']), true) . '</pre>';
			//loginemail($payload['email']);
		} else {
			echo 'Creating account<br>';
			createaccount($payload['email'], ['name' => $payload['name'], 'picture' => $payload['picture'], 'lang' => $payload['locale']]);
		}
	} else {
	  http_response_code(400);
	  echo "Failed to login!";
	  showsignin();
	}
	echo "<br>";
} else {
	showsignin();
}
