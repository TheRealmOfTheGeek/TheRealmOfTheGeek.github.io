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
  <div class="container text-center   ">
      <center><h3>Currently at <span id='subs'>Loading..</span> subscribers, <span id='views'>Loading..</span> views and <span id='videos'>Loading..</span> videos</h3></center>

    <h1>Latest</h1>
    <p><small id='latestvideotitle'>Loading..</small></p>
    <div class="embed-responsive embed-responsive-16by9">
      <iframe id='latestvideoframe' src="" width="100%" class="embed-responsive-item"></iframe>
    </div>
    <h1>Previous Videos</h1>
    <p><small>LEARN TO CODE BUKKIT/SPIGOT!</small></p>
    <div class="embed-responsive embed-responsive-16by9">
      <iframe src="https://www.youtube.com/embed/?listType=user_uploads&list=therealmofthegeek&showinfo=1" width="100%" class="embed-responsive-item"></iframe>
    </div>
  </div>
</div>

<?php include("../modules/footer.php"); ?>

</body>
</html>
