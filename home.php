<!DOCTYPE html>
<html lang="en">
<head>

	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

	<?php
		$page = basename(__FILE__, ".php");
		include("modules/header.php");

	?>

	<style>
	#header {
    background-image: url('banner.jpg');

    height: 745px;

    background-attachment: fixed;
    background-position: 54%, 0%;
    background-repeat: no-repeat;
    background-size: cover;
	}
	</style>
</head>
<body>
<script type="text/javascript">
    amzn_assoc_ad_type = "link_enhancement_widget";
    amzn_assoc_tracking_id = "kvizdos-20";
    amzn_assoc_linkid = "73d5627827ba2a986bc0cec78ac7c6da";
    amzn_assoc_placement = "";
    amzn_assoc_marketplace = "amazon";
    amzn_assoc_region = "US";
</script>
<script src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1&MarketPlace=US"></script>


<div class="jumbotron" id="header">
  <div class="container text-center" id="header-txt">
    <h1>The Realm Of The Geek</h1>
    <p style="color:#00b72d; font-family:'hacks';"><small>Only a little bit of awesomeness here.</p><br><a href="http://s.therotg.com/twitter?source=rotgwebsite" target="_blank">Twitter</a> | <a href="http://s.therotg.com/youtube?source=rotgwebsite" target="_blank">YouTube</a> | <a href="http://s.therotg.com/trello?source=rotgwebsite">Trello</a> | <a href="http://s.therotg.com/github?source=rotgwebsite">GitHub</a></small>
  </div>
</div>
<?php include("modules/navbar.php"); ?>

<div class="roow" id="about">
  <div class="container text-left">
    <h1>About me</h1>
    <p>I am Kenton, Also Known As Kento. I am a teenaged YouTube programmer that mainly focuses on creating helpful, inspiring coding tutorials. I also do LiveCoding, while practicing Scrum and Agile methods like TDD, Mob Programming, Pair Programming, and more. I have been programming for years, and knowledgeable in Java, Bukkit API, HTML/CSS, Bootstrap, JQuery, JavaScript, PHP, and more. The videos are always on a strict schedule of daily at 7am. If you would like to watch some of these, please visit https://yt.therotg.com!<br><br></p>
    <script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US&adInstanceId=2710c041-cd8a-4fc1-9206-8aede4fdd6b2"></script>
  </div>
</div>



<div class="roow" id="projects">
	<div class="container-fluid bg-3 text-center" id="main">
		<?php include("modules/tid.html"); ?>
	</div>
</div>

<div class="roow" id="hire">
  <div class="container text-left">
    <h1>FREELANCE / Hire Me</h1>
      <p>I do website development, for a low cost, The price varies, but it is usaully around ~$30 a website, but this price is 100% goig to change after I know what you want in it, because everyone is different. To find your price, please contact me using the "Contact Me" button right under this text (It opens a mailto: link, so if you don't like that, just contact me, contact@therotg.com).</p>
      <a href="mailto:contact@therotg.com"><button class="button btn-lg green">Contact Me</button></a><br><br>
  </div>
</div>

<div class="roow" id="supporters">
  <div class="container text-left">
		<?php include("modules/donators.html"); ?>
	</div>
</div>


<div class="roow" id="contact">
  <div class="container text-left">
    <h1>Contact Me</h1>
    <p>You Can Get In Touch With Me In Multiple Ways:<br><small>email: <a href="mailto:contact@therotg.com">contact@therotg.com</a><br>DM me on Twitter: <a href="http://s.therotg.com/twitter?source=rotgwebsite">@kvizdos</a></small></p>
  </div>
</div>

<?php include("modules/footer.php"); ?>

</body>

</html>
