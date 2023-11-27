<!-- <?php
    include ("main.php");
    
    $sql = $mysqli->query("SELECT `NameRegion`,`FIO` FROM `regions`, `courier` WHERE `idCourier.courier` = {$_POST['courer']}, `idRegions.regions` = {$_POST['regions']}");
    if ($row = $sql->fetch_array()) {
        $rowsCount = mysqli_num_rows($sql);
        echo "<p>Получено объектов: $rowsCount</p>";
        echo "<table><tr><th>Id</th><th>Имя</th><th>Возраст</th><th>Gjk</th></tr>";
        foreach($sql as $row){
            echo "<tr>";
                echo "<td>" . $row["NameRegion"] . "</td>";
                echo "<td>" . $row["FIO"] . "</td>";
                // echo "<td>" . $row["surname"] . "</td>";
                // echo "<td>" . $row["sex"] . "</td>";
            echo "</tr>";
        }
    }
?> -->