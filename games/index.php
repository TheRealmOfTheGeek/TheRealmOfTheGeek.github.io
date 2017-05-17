<html>
<head>
	<?php
		$page = basename(__FILE__, ".php");
		include("../modules/header.php");

	?>
</head>

<body>

<?php include("../modules/navbar.php"); ?>

  <body>
<div class="container" id="roow">
  <h4><a href="../index.html"><span class="glyphicon glyphicon-home"></span> Back to the main site</a></h4>

  <h2>Games</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Game</th>
        <th>Version</th>
        <th>Status</th>
        <th>Release Date</th>
        <th>Credit</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><a href="lasers/index.html">Lasers</a></td>
        <td>0.1b</td>
        <td>3/15/17</td>
        <td class="indev">In Dev</td>
        <td>Nobody to credit</td>
      </tr>
      <tr>
        <td><a href="http://www.kentonvizdos.com/games/Snake">Snake</a></td>
        <td>1.2v</td>
        <td>X/X/X</td>
        <td class="comp">Complete</td>
        <td>Heavily modified from Patorjk</td>
      </tr>

    </tbody>
  </table>
</div>

	  <?php include("../modules/footer.php"); ?>


</body>

</html>
