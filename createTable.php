
<?php        //проверка на обновления записей в chat
$dbc = mysqli_connect("localhost", "mysql", "mysql", "darknet") OR DIE('Ошибка подключения к базе данных');////дание
    $query ='CREATE TABLE chat ( `id` INT(252) NOT NULL AUTO_INCREMENT ,  `idchat` INT(252) NOT NULL ,  `myid` INT(252) NOT NULL ,  `iduser` INT(252) NOT NULL ,  `idcod` INT(252) NOT NULL ,  `times` VARCHAR(252) NOT NULL ,  `temps` VARCHAR(252) NOT NULL ,
     `datas` VARCHAR(252) NOT NULL ,  `message` VARCHAR(252) NOT NULL ,    PRIMARY KEY  (`id`)) ENGINE = InnoDB';
    mysqli_query($dbc,$query);
    mysqli_close($dbc);
    exit();

?>
