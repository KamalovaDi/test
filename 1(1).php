<?php
include ("main.php");
    // $sql = $mysqli->query("SELECT `NameRegion` FROM `regions` WHERE `idRegions` = {$_POST['regions']}");
    // $inp = $_POST['datav'];
    // // $inp = $_POST['days'];
    // if($result = mysqli_fetch_array($sql)){
    //     echo " {$result['NameRegion']} ";
    //     // echo " {$result['Days']} ";
    //     echo $inp;
    // }

    // $sql2 = $mysqli->query("SELECT `FIO` FROM `courier` WHERE `idCourier` = {$_POST['courer']}");
    // if($result = mysqli_fetch_array($sql2)){
    //     echo "{$result['FIO']}";
    // }
    
    // $sql3 = $mysqli->query("SELECT `FIO` FROM `courier` WHERE `idCourier` = {$_POST['courer']} && `idCourier` = {$_POST['courer']}");
    // if($result = mysqli_fetch_array($sql2)){
    //     echo "Курьер {$result['FIO']} занят";
    // }

    // if(!isset($_POST['regions']) || !isset($_POST['datav'])) die('Нет нужных данных');

    // $inp = $_POST['datav'];//считанные данные с формы
    // $sql3 = $mysqli->query("SELECT `Days` FROM `regions` WHERE `idRegions` = {$_POST['regions']}");
    // if($result = mysqli_fetch_array($sql3)){
    //     $inp2 = $result['Days']; //дней из базы
    //     $u = "Курьер в пути до ". date('d.m.Y', strtotime('+ '. $inp2 .' day', strtotime(''.$inp .'')));
    //     echo date('d.m.Y', strtotime('+ '. $inp2 .' day', strtotime(''.$inp .'')));
    // }
    


// if (isset($_POST['ourForm_btn'])) echo "Курьер занят";
//     $sql4 = $mysqli->query("INSERT INTO `products` (`Name`, `Price`) VALUES ('{$_POST['Name']}', '{$_POST['Price']}')");
//    if($result = mysqli_fetch_array($sql4)) {
//     die('Нет нужных данных');
//    }
echo "Курьер занят";

    // if(!isset($_POST['regions']) || !isset($_POST['courer']) || !isset($_POST['datav'])) die('Нет нужных данных');



?>