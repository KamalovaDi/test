<?php
// include ("..\php\main.php");
if(!isset($_POST['region']) || !isset($_POST['datav']) || !isset($_POST['courer'])) die('Нет нужных данных');

$res = '';
foreach($_POST as $key=>$value){
    if($key == 'region') $first = 'Имя (Логин)';
    if($key == 'datav') $first = 'Email';
    if($key == 'skills') {
        $first = 'Знания:';
        if(is_array ($value))$value = implode(', ', $value);
    }
    $res .= "<tr><td>$first</td><td>$value</td></tr>";
    
}
echo $res;
die();
//Если переменная Name передана
// if (isset($_POST["send"])) {
//     //Иначе вставляем данные, подставляя их в запрос
//     $sql = mysqli_query($link, "INSERT INTO `qwerty` (`name`, `surname`, `sex`) VALUES ('{$_POST['region']}', '{$_POST['courer']}, '{$_POST['datav']}')");

//   }

// $sql = $mysqli->query($link, 'SELECT `ID`, `name`, `surname` FROM `qwerty`');
// while ($result = mysqli_fetch_array($sql)) {
//   echo "{$result['name']}: {$result['surname']} рублей<br>";
// }
?>