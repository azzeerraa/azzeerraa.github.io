<?php       //подгрузка даних из бд chat из idchat и сортируэ на право и на ливо меседжи по id      "перша подгрузка"

$conn = mysqli_connect("37.59.55.185", "zXZd1mnCT9", "Sp2hMtye0d", "zXZd1mnCT9");
$result = mysqli_query($conn, 'SELECT * FROM chat WHERE idchat = "1" ');
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
