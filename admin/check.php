<?php
$i = file_get_contents('https://api.nick.tools/ipinfo?ip=' . $_SERVER['REMOTE_ADDR']);
$i = json_decode($i,true)['info'];
$allowed = $i['people']['nick'] || (isset($i['people']['kento']) && $i['people']['kento']);
if (!$allowed) {
echo '
<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PL8wKRvqDMhS-yaig0ZUkrNLBx2qvhIbaH&version=3&autoplay=1&loop=1" frameborder="0" allowfullscreen></iframe>
<--
';

for ($k = 0; $k < 200; $k++){
echo '
';
}
echo '

Error 403: Forbidden

-->';
exit();
}
?>
