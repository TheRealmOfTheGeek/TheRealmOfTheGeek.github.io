<?php
function getinfo($id) {
  return [];
}
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $info = getinfo($id);
} else if (isset($_POST['id'])) {
  $id = $_POST['id'];
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
      height:auto;
      padding-bottom: 20px;
      padding-left: 10px;
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
    <?php if (isset($_POST['id'])) { print_r($_POST); }?>
    <div id="su">
      <form action="setup" method="POST">
        <input type="text" value="<?php echo $id; ?>" name="id" />
        <h2>Username</h2>
        <div class="title">
          <input type="textbox" placeholder="Username" id="username" name="username" required />
        </div>

        <h2>Name</h2>
        <div class="title">
          <input type="textbox" placeholder="Name" id="name" name="name" required />
        </div>

        <h2>Email</h2>
        <div class="title">
          <input type="email" placeholder="Email" id="email" name="email" required />
        </div>

        <h2>Birthday</h2>
        <div class="title">
          <input type="date" placeholder="Birthday" id="bday" name="bday" required />
        </div>

        <h2>Website</h2>
        <div class="title">
          <input type="textbox" placeholder="Website" id="website" name="website" />
        </div>

        <input type="submit" />
      </form>
    </div>

    <div id="ad" class="right">
      <p>adz</p>
    </div>

  </body>
</html>
