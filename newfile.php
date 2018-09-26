<?php

if(isset($_POST['loadfile'])) {
  $user_username = mysqli_real_escape_string($con_753_mb, trim($_POST['finame']));
  $user_password = mysqli_real_escape_string($con_753_mb, trim($_POST['comment']));
  if(!empty($user_username) && !empty($user_password)) {
$file1 = '$user_username';
$file2 = '$user_password';
$file = "$file1.php";
//если файла нету... тогда
if (!file_exists($file)) {
 $fp = fopen($file, "w"); // ("r" - считывать "w" - создавать "a" - добовлять к тексту),мы создаем файл
fwrite($fp, "$file2");
 fclose($fp);
}
}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include "head.php"; ?>
</head>
<body>
  <div class="dz">
<div style="position:absolute;top:50px;width:90%;height:100%;">
  <form action="/newfile.php" method="POST">
    <input type="text" name="finame" style="position: absolute; font-size: 30px;color: #bbbbb5;width:400px;height:35px;left:100px;top:-1px;border: 1px solid #5fba7d00;border-radius:0px 0px 30px 30px;text-align: center;outline: none;" required>
    <textarea name="comment" cols="40" rows="3" value="" style="position: absolute; color: #bbbbb5;width:400px;height:600px;left:100px;top:100px;border: 1px solid #5fba7d00;border-radius:0px 0px 0px 0px;text-align: inherit;outline: none;"></textarea>
    <button type="button" name="loadfile" style="position:fixed; width:400px;height:35px;background-color: #4bbb78;left: 34%;top:96%;">Создать</button>
</form>
</div>
  </div>
<?php include "style.php"; ?>
<div style="position:fixed;width:100%;height:50px;left:0px;top:0px; background-color:#8e8e87;">
<div>
  <img src="icons8.ico" alt="logo" style="position:fixed;width:50px;height:50px;left:0px;top:0px;"></img>

</div>
</div>
<?php include "menu.php"; ?>
<script src="script.js"></script>
</body>
</html>
