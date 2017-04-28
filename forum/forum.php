<html ng-app="" ng-init="title='Coding Forum'">
  <head>
    <title ng-bind="title"></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  </head>
  <body>
    <?php include "modules/header.php"; ?>

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
