<?php
shell_exec('bash /home/ubuntu/web/pull.sh');
echo "The Server has updated from github successfully! You shouldn't be here if you aren't GitHub Webhooks, so <a href='/'>go to the main page</a>";
?>
