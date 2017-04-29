<?php
function getinfo($id) {
  return [];
}
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $info = getinfo($id);
} else {
  go('/account/login');
}
?>

<html>
  <head>
    <title>Coding Forums</title>
    <link rel="stylesheet" type="text/css" href="/forum/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  </head>
  <body ng-app="" ng-init="title='Coding Forum'">
    <?php echo showheader(); ?>

    <style>
    #su {
      display: inline-block;
      width: 78.5%;
      background-color: #FDFDFD;
      border: 5px solid #C7C7C7;
      border-radius: 10px 0px 0px 10px;
      margin-top: 20px;
      margin-left: 20px;
      height:485px;
    }

    #su .title {
      background-color: white;
      border: 3px solid #95989A;
      height: 55px;
      width: 97.5%;
      margin: 10px;
      color: #95989A;

    }
    #su input {
      font-size: 37px;
      width: 100%;
      padding-left: 5px;
    }
    </style>

    <div id="su">
      <h2>Username</h2>
      <div class="title">
        <input type="textbox" placeholder="Username" id="username" name="username" required="yes" />
      </div>

      <h2>Email</h2>
      <div class="title">
        <input type="email" placeholder="Email" id="email" name="email" required="yes" />
      </div>

      <h2>Password</h2>
      <div class="title">
        <input type="password" placeholder="Password" id="password" name="password" required="yes" />
      </div>

      <h2>Repeat Password</h2>
      <div class="title">
        <input type="password" placeholder="Repeat Password" id="password" name="repassword" required="yes" />
      </div>

      <input type="submit" />

    </div>

    <div id="ad" class="right">
      <p>adz</p>
    </div>

  </body>
</html>
