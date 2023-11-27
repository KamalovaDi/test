<?php
include ("main.php");
    $sql = $mysqli->query("SELECT `NameRegion` FROM `regions` WHERE `idRegions` = {$_POST['regions']}");
    $inp = $_POST['datav'];
    // $inp = $_POST['days'];
    if($result = mysqli_fetch_array($sql)){
        echo " {$result['NameRegion']} ";
        // echo " {$result['Days']} ";
        echo $inp;
    }

    $sql2 = $mysqli->query("SELECT `FIO` FROM `courier` WHERE `idCourier` = {$_POST['courer']}");
    if($result = mysqli_fetch_array($sql2)){
        echo "{$result['FIO']}";
    }
    
    $sql3 = $mysqli->query("SELECT `FIO` FROM `courier` WHERE `idCourier` = {$_POST['courer']} && `idCourier` = {$_POST['courer']}");
    if($result = mysqli_fetch_array($sql2)){
        echo "Курьер {$result['FIO']} занят";
    }

    // if(!isset($_POST['regions']) || !isset($_POST['courer']) || !isset($_POST['datav'])) die('Нет нужных данных');

    

    // $sql = mysqli_query($link, 'SELECT `ID`, `Name`, `Price` FROM `products`');
    // while ($result = mysqli_fetch_array($sql)) {
    //   echo "{$result['Name']}: {$result['Price']} рублей<br>";
    // }

    // $sql = $mysqli->query("SELECT * FROM `qwerty`");
    // if ($row = $sql->fetch_array()) {
    //     $rowsCount = mysqli_num_rows($sql);
    //     echo "<p>Получено объектов: $rowsCount</p>";
    //     echo "<table><tr><th>Id</th><th>Имя</th><th>Возраст</th><th>Gjk</th></tr>";
    //     foreach($sql as $row){
    //         echo "<tr>";
    //             echo "<td>" . $row["id"] . "</td>";
    //             echo "<td>" . $row["name"] . "</td>";
    //             echo "<td>" . $row["surname"] . "</td>";
    //             echo "<td>" . $row["sex"] . "</td>";
    //         echo "</tr>";
    //     }
    // }

?>