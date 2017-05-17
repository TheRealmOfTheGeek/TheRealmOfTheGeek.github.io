<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		$page = basename(__FILE__, ".php");
		include("modules/header.php");

	?>
	<style>
	#header {
		/* The image used */
    background-image: url('banner.jpg');

    /* Full height */
    height: 745px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	}
	</style>
</head>

<body>


<div class="jumbotron" id="header">
  <div class="container text-center" id="header-txt">
    <h1>The Realm Of The Geek</h1>
    <p style="color:#ff6e00; font-family:'hacks';"><small>Only a little bit of awesomeness here.</p><br><a href="http://s.therotg.com/twitter?source=rotgwebsite" target="_blank">Twitter</a> | <a href="http://s.therotg.com/youtube?source=rotgwebsite" target="_blank">YouTube</a> | <a href="http://s.therotg.com/trello?source=rotgwebsite">Trello</a> | <a href="http://s.therotg.com/github?source=rotgwebsite">GitHub</a></small>
  </div>
</div>
<?php include("modules/navbar.php"); ?>

<div class="roow" id="about">
  <div class="container text-left">
    <h1>About me</h1>
    <p>I am Kenton, Also Known As Kento. I am a teenaged YouTube programmer that mainly focuses on creating helpful, inspiring coding tutorials. I also do LiveCoding, while practicing Scrum and Agile methods like TDD, Mob Programming, Pair Programming, and more. I have been programming for years, and knowledgeable in Java, Bukkit API, HTML/CSS, Bootstrap, JQuery, JavaScript, PHP, and more. The videos are always on a strict schedule of daily at 7am. If you would like to watch some of these, please visit https://yt.therotg.com!<br><br></p>
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
      <p>So, you want a Spigot / Bukkit plugin, right? Well, you've come to the right place. I can create anything* for $10 flat, cheaper than any other creator here, AND IN TWO DAYS**!. Other than doing three packages, I have decided to just do $10 for anything* you can possibly imagine. The reason these are so cheap is because everyone else is overpriced</p>
      <a href="http://s.therotg.com/fiverr?source=rotgwebsite"><button class="button btn-lg orange">Get in touch</button></a><br><br>
  </div>
</div>

<div class="roow" id="contact">
  <div class="container text-left">
    <h1>Contact Kento</h1>
    <p>You Can Get In Touch With Me In Multiple Ways:<br><small>email: contact@therotg.com<br>DM me on Twitter: <a href="http://s.therotg.com/twitter?source=rotgwebsite">@kvizdos</a></small></p>
  </div>
</div>

<?php include("modules/footer.php"); ?>
</body>
</html>
