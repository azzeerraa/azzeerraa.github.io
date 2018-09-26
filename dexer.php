<?php
date_default_timezone_set('UTC');

$dan = date('j');
$mes = date('m');
$gid = date('Y');
$dozor = ($dan+$mes+$gid);

$data = ($dan.$mes.$gid);
list($user, $pass, $uid,) = explode("0", $data);
echo $user + $uid;
$offzone = $user + $uid;

?>
