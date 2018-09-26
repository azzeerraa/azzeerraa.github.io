<?php date_default_timezone_set('UTC');

$dan = date('j');
$mes = date('m');
$gid = date('Y');
$dozor = ($dan+$mes+$gid);

$data = ($dan.$mes.$gid);
list($user, $pass, $uid,) = explode("0", $data);
$offzone = $user + $uid;


if(isset($_POST['dercool'])) {
  $user_password = $_POST['dercoll'];
  if($user_password == $offzone) {
      setcookie('id753','open', time() + (60*60*24*30));
      header('Location: '. '/panel.php');

  }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>test2</title>
  <link rel="shortcut icon" href="icons8.ico" type="image/x-icon">
  <link href="style.css" rel="stylesheet">
</head>
<body>
<div>
  <form action="index.php" method="POST">
    <button class="d5" type="submit" name="dercool">
    <input type="password" name="dercoll" class="d1">
    </form>
  <div>
</body>
</html>
