<?php        //проверка на обновления записей в chat 

$conn = mysqli_connect("localhost", "mysql", "mysql", "darknet");
$result = mysqli_query($conn, 'SELECT * FROM chat order by id desc limit 1 ');
$data = array();

while ($row = mysqli_fetch_assoc($result)){
  $data = $row;
  if ($row['myid'] == '1') {
    echo $row['id'];
  }else {
    echo $row['id'];
  }
//  echo json_encode($data,JSON_UNESCAPED_UNICODE);
}
?>
