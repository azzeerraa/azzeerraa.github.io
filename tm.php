<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tm</title>
    <link rel="shortcut icon" href="icos.ico" type="image/ico">
  </head>
  <body>
<style media="screen">
  #row{
    position: absolute;
    right: 0px;
    width: 100%;
    height: 20px;

    border-bottom: 1px solid black;
    color: black;
  }
  #row1{
    position: absolute;
    right: 0px;
    width: 100%;
    height: 20px;

    border-bottom: 1px solid black;
    color: black;
  }
  br{
    margin-top: 0px;
padding-top: 0px;
margin-bottom: 10px;
  }
  #los{
    position: absolute;
    right: 30px;
    height: 100%;
    top: 0px;
  }
  a{font-size: 15px; }
  #fg{
    position: absolute;
    left: 48%;
    color: green;
  }
</style>
<div id="ds">

<?php

$conn = mysqli_connect("localhost", "mysql", "mysql", "darknet");
$result = mysqli_query($conn, 'SELECT * FROM chat WHERE idchat = "1" ');
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  $data = $row;
  if ($row['myid'] == '1') {
  echo '<div id="row">
          <a id="fg">'.$row['times'].'</a>
          <a >'.$row['datas'].'</a>
          <a >'.$row['message'].'</a>
        </div></br>';
  }else {
    echo '<div id="row1" ><div id="los">
    <a >'.$row['message'].'</a>
      <a >'.$row['datas'].'</a>
        </div>  <a id="fg">'.$row['times'].'</a>

          </div></br>';
  }
//  echo json_encode($data,JSON_UNESCAPED_UNICODE);
}
?>

</div>
  </body>
</html>
