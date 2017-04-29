<?php
include '/home/ubuntu/keys/oauth.php';
include '/home/ubuntu/keys/aws.php';
include '/home/ubuntu/keys/discord.php';
require '/home/ubuntu/composer/vendor/autoload.php';
include 'modules/header.php';
use Google\ApiClient;
use Aws\DynamoDb\DynamoDbClient;
use Discord\OAuth\Discord;
$db = new DynamoDbClient([
  'version' => 'latest',
  'region' => 'us-east-1',
  'credentials' => [
     'key' => $creds['access'],
      'secret' => $creds['secret'],
   ]
]);
$sub = '/forum';
$url = substr(explode("?",$_SERVER['REQUEST_URI'])[0],strlen($sub));
//$url = '/' . ltrim($url, '/');
function go($url) {
    if (substr($url, 0, 4) != 'http' && substr($url, 0, 1) == '/') {
        if ($_SERVER['HTTP_HOST'] == 'therotg.com') {
            $url = 'https://' . $_SERVER['HTTP_HOST'] . '/forum' . $url;
        } else {
            $url = 'http://' . $_SERVER['HTTP_HOST'] . $url;
        }
    }
    header('Location: ' . $url);
    exit();
}
if ($url == '/') {
  echo '
<html ng-app="" ng-init="title=\'Coding Forum\'">
  <head>
    <title ng-bind="title"></title>
    <link rel="stylesheet" type="text/css" href="/forum/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  </head>
  <body>
    ';
    showheader();
    echo '

    <div id="posts">

      <div id="ask">

        <h2 class="asktitle">Ask a question</h2>

        <div class="title">
          <input type="textbox" placeholder="Title" name="title" />
        </div>

        <div class="question">
          <textarea type="textbox" placeholder="Question" name="question"></textarea>
        </div>

        <input type="submit" />

        <div class="select-cat">
          <select>
            <option value="htmlcss">HTML/CSS</option>
            <option value="js">JS</option>
            <option value="php">PHP</option>
            <option value="bs">Bootstrap</option>
            <option value="sp">Plugin Dev</option>
            <option value="syc">Share your creations</option>
            <option value="offtopic">Off topic</option>
            <option value="gaming">Gaming</option>
          </select>
          <small><strong>Only post things about this category, nothing else</strong></small>
        </div>

      </div>

      <br>
      <div id="post">
        <p class="quest">Question...</p>
        <p class="user">User</p>
        <p class="cat">Category</p>
      </div>

      <div id="post">
        <p class="quest">Question...</p>
        <p class="user">User</p>
        <p class="cat">Category</p>
      </div>

      <div id="post">
        <p class="quest">Question...</p>
        <p class="user">User</p>
        <p class="cat">Category</p>
      </div>

      <div id="post">
        <p class="quest">Question...</p>
        <p class="user">User</p>
        <p class="cat">Category</p>
      </div>

      <div id="post">
        <p class="quest">Question...</p>
        <p class="user">User</p>
        <p class="cat">Category</p>
      </div>
    </div>

    <div id="ad" class="right">
      <p>adz</p>
    </div>
  </body>
</html>
';
} else if ($url == '/account/login') {
  include 'login.php';
} else if ($url == '/account/setup') {
  include 'setup-account.php';
} else {
  echo ' Page not found! URL: ' . $url;
}
