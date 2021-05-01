<?php            //подгрузка ласт меседж из таблицы chat

$conn = mysqli_connect("localhost", "mysql", "mysql", "darknet");
$result = mysqli_query($conn, 'SELECT * FROM chat WHERE idchat = "1" order by id desc limit 1 ');
$data = array();

while ($row = mysqli_fetch_assoc($result)){
  $data = $row;
  if ($row['myid'] == '1') {
    echo '<div id="row1" >
    <div id="los">

      <a id="md2">'.$row['message'].' </a><a id="dmt2">  '.$row['temps'].'</a>
        </div>

          </div></br>';
  }else {
    echo '<div id="row">
  <div id="los1">
            <a id="md">'.$row['message'].' </a><a id="dmt">  '.$row['temps'].'</a></div></div>
          </br>';
  }
//  echo json_encode($data,JSON_UNESCAPED_UNICODE);
}
?>
