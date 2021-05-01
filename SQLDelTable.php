<?php
$dbc = mysqli_connect("localhost", "mysql", "mysql", "darknet") OR DIE('Ошибка подключения к базе данных');////дание
    $query ='DELETE FROM `chat`';
    mysqli_query($dbc,$query);
    mysqli_close($dbc);
    exit();
