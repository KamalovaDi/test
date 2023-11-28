<?php
    include ("main.php");
    
    $sql = $mysqli->query("SELECT regions.idRegions, courier.idCourier, regions.NameRegion, courier.FIO, chart.dateOtprav FROM `regions`, `courier`, `chart` WHERE regions.idRegions = chart.idReg AND courier.idCourier = chart.idCour");
    if ($row = $sql->fetch_array()) {
        $rowsCount = mysqli_num_rows($sql);
        // echo "<p>Получено объектов: $rowsCount</p>";
        echo "<table><tr><th>Id</th><th>Имя</th><th>Дата</th></tr>";
        foreach($sql as $row){
            echo "<tr>";
                echo "<td>" . $row["NameRegion"] . "</td>";
                echo "<td>" . $row["FIO"] . "</td>";
                echo "<td>" . $row["dateOtprav"] . "</td>";
                // echo "<td>" . $row["sex"] . "</td>";
            echo "</tr>";
        }
    }
?>