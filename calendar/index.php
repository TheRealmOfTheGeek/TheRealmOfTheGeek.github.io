<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		$page = basename(__FILE__, ".php");
		include("../modules/header.php");

	?>
</head>

<body>

<?php include("../modules/navbar.php"); ?>

<div class="jumbotron" id="header">
  <div class="container text-center">
    <h1>The Calendar</h1>
    <p><small>Learn When Kento Will Be Teaching And Posting</small></p>
  </div>
<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=dn0sg1o4icnhntir0k6umoqb0o%40group.calendar.google.com&amp;color=%232F6309&amp;ctz=America%2FNew_York" style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe></div>

<?php include("../modules/footer.php"); ?>


</body>
</html>
