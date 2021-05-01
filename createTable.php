
<?php        //проверка на обновления записей в chat
$dbc = mysqli_connect("localhost", "mysql", "mysql", "darknet") OR DIE('Ошибка подключения к базе данных');////дание
    $query ='CREATE TABLE bbb
    (
        Id INT,
        username NVARCHAR(20),
        messages NVARCHAR(20),
    )';
    mysqli_query($dbc,$query);
    mysqli_close($dbc);
    exit();

?>
