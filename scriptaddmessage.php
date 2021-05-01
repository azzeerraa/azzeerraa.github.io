<?php                                             //Отсилаэ меседж в таблицю chat



          $dbc = mysqli_connect("localhost", "mysql", "mysql", "darknet") OR DIE('Ошибка подключения к базе данных');////дание
          $dates = date("m.d.y");   //месяц
          $times = date("H:i:s");  //часи
          $temps = date("H:i");  //часи
          $smd = $_COOKIE["masage"];
            $query = "SELECT * FROM `chat` WHERE times = '$times' && datas = '$dates'";
            $data = mysqli_query($dbc, $query);
            if(mysqli_num_rows($data) == 0) {
              $query ="INSERT INTO `chat` (idchat, myid, iduser, idcod, times, temps, datas, message) VALUES ('1', '1', '2','1200', '$times','$temps', '$dates', '$smd')";
              mysqli_query($dbc,$query);
              mysqli_close($dbc);
              $data1 = '2';
              echo json_encode($data2);
              exit();
                                           }else {
                                                 $data2 = '1';
                                                       echo json_encode($data2);
                                                      }
