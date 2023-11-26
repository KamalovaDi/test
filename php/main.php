<?php
$db_user = "root";
$db_password = "9346936";
$mysqli = new mysqli("localhost", $db_user, $db_password, "delivery");
if ($mysqli->connect_errno) {
    printf("Somehow we failed: %s\n", $mysqli->connect_error);
    exit();
}

// $result = $mysqli->query('SELECT * FROM `regions`'); // запрос на выборку
// while($row = $result->fetch_array())// получаем все строки в цикле по одной
// {
//     echo '<p>Запись id='.$row['idRegions'].'. Регион: '.$row['NameRegion'].'. Дней доставки: '.$row['Days'].'</p>';// выводим данные
// }
?>