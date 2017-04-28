<?php
include '/home/ubuntu/keys/oauth.php';
function showsignin() {
	global $secret;
	echo '
<meta name="google-signin-client_id" content="' . $secret['id'] . '.apps.googleusercontent.com">
<div id="my-signin2"></div>
  <script>
    function onSuccess(googleUser) {
      console.log("Logged in as: " + googleUser.getBasicProfile().getName());
	  getElement("i").value = googleUser.getAuthResponse().id_token;
	  getElement("s").click();
    }
    function onFailure(error) {
      alert("Error!");
    }
	function logout() {
		var auth2 = gapi.auth2.getAuthInstance();
		auth2.signOut().then(function () {
		});
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
  <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>';
}
$cid = $secret['id'];
if (isset($_POST['idt'])) {
	$id_token = $_POST['idt'];
	$client = new Google_Client(['client_id' => $cid . '.apps.googleusercontent.com']);
	$payload = $client->verifyIdToken($id_token);
	if ($payload) {
	  print_r($payload);
	} else {
	  http_response_code(400);
	  echo "Failed to login!";
	  showsignin();
	}
	echo "<br>";
} else {
	showsignin();
}
