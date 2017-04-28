<?php
function showheader() {
     echo '
<div id="header">
      <h1 id="title" ng-bind="title"></h1>
      <input type="text" placeholder="Search the forums!" class="rightnav" />
      <small class="rightnav"><a href="login.php">Login / Register</a></small>
</div>';
}
?>
