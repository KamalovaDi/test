<?php
include ("main.php");
    // $sql = $mysqli->query("SELECT `surname` FROM `qwerty` WHERE `id` = {$_POST['courer1']}");
    // //$object = mysqli_fetch_object($res);
    // if($result = mysqli_fetch_array($sql)){
    //     echo "{$result['surname']}";
    // }
    $inp1 = $_POST['courer1'];
    echo $inp1;

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