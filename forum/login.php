<?php
function userexists($e, $logintype) {
	global $db;
	$result = $db->getItem([
		'TableName' => 'users',
		'Key' => [
			'Users' => [
				'S' => $logintype . ':' . $e
			]
		]
	]);
	return $result['Item'] != null;
}
function getuser($e, $logintype) {
	global $db;
	$result = $db->getItem([
		'TableName' => 'users',
		'Key' => [
			'Users' => [
				'S' => $logintype . ':' . $e
			]
		]
	]);
	return $result['Item'];
}
function createaccount($e, $logintype, $info) {
	global $db;
	$i = [];
	$i['Users'] = ['S' => $logintype . ':' . $e];
	$i['logintype'] = ['S' => $logintype];
	$i['email'] = ['S' => $e];
	$i['setup'] = ['BOOL' => false];
	$i['cid'] = ['S' => json_decode(file_get_contents('https://api.nick.tools/random?length=50&lowercasecharacters=true'), true)['result'] ];
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
	//echo 'Success!<br>';
	//echo '<pre>' . print_r($i, true) . '</pre>';
  go('/account/setup?id=' . $i['cid']['S']);
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
		if (userexists($payload['email'], 'google')) {
			$info = getuser($payload['email'], 'google');
			if (!isset($info['setup']['BOOL']) || !$info['setup']['BOOL']) {
		  	go('/account/setup?id=' . $info['cid']['S']);
			}
			echo 'You exist!<br>';
			echo '<pre>' . print_r($info, true) . '</pre>';
			//loginemail($payload['email']);
		} else {
			echo 'Creating account<br>';
			createaccount($payload['email'], 'google',['name' => $payload['name'], 'picture' => $payload['picture'], 'lang' => $payload['locale']]);
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
