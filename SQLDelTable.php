<?php
$dbc = mysqli_connect("37.59.55.185", "zXZd1mnCT9", "Sp2hMtye0d", "zXZd1mnCT9") OR DIE('Ошибка подключения к базе данных');////дание
    $query ='DELETE FROM `chat`';
    mysqli_query($dbc,$query);
    mysqli_close($dbc);
    exit();
