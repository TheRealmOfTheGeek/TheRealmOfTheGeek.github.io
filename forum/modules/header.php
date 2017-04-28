<?php
function showheader() {
     echo '
     <script>
          console.log("'.$secret['id'].'");
     </script>
     <meta name="google-signin-client_id" content="'.$secret['id'].'.apps.googleusercontent.com">
     <script src="https://apis.google.com/js/platform.js" async defer></script>
     <div id="header">
           <h1 id="title" ng-bind="title"></h1>
          <input type="text" placeholder="Search the forums!" class="rightnav" />
          <div class="g-signin2" data-onsuccess="onSignIn"></div>
     </div>
';
}
?>
