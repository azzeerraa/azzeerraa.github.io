<?php
unset($_COOKIE['id753']);
setcookie('id753', '', -1, '/');
$home_url = 'http://' . $_SERVER['HTTP_HOST'];
 header('Location: ' . $home_url);
?>
