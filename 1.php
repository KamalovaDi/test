<head>
    <meta charset="UTF-8">
    <meta name="description" content="HTML+ - отправляем данные на сервер методом jQuery $.ajax">
    <title>1</title>
    <link rel="stylesheet" href="st.css">
    <script src="11.js"></script>
    <!-- <link rel="stylesheet" href="calend.css"> -->
</head>
<?php
    include ("main.php");



?>
<body>

<form action="1(1).php" name='testForm' class="small-form" id="testForm">
<p>
    <label for="region">Регион</label>
    <select for="region" id="region" name="regions">
    <?php
            $result = $mysqli->query('SELECT * FROM `regions`');
            echo "<option value='0'></option>";
                while($object = mysqli_fetch_object($result)){
                    echo "<option value = '$object->idRegions' > $object->NameRegion </option>";}
                    echo "</select>"; 
    ?>
    </select></p>
    
    <p><label for="datav">Дата выезда из Москвы</label>
       <input type="date" id="datav" name="datav"></p>


    <p><label for="courer">Курьер</label>
       <!-- <input type="text" id="courer" name="courer"> -->
       <select for="courer" id="courer" name="courer">
       <?php
            $result = $mysqli->query('SELECT * FROM `courier`');
            echo "<option value='0'></option>";
                while($object = mysqli_fetch_object($result)){
                    echo "<option value = '$object->idCourier' > $object->FIO </option>";}
                    echo "</select>"; 
        ?>
       </select></p>

       <p><label for="ras">Дата доставки</label>
       <input type="text" id="ras" name="ras"></p>
     


    <button type="submit" name='ourForm_btn'>Записать</button>
    <!-- <button type="submit" name='ourForm_btn2'>Записать2</button> -->
    <!-- <p><button action = "2.php" type="submit" name='ourForm_btn'>Список</button></p> -->


    
</form>

 <div id="response"></div> 

<form  name='testForm2' class="small-form2" id="testForm2">
<?php
$sql = $mysqli->query("SELECT regions.idRegions, courier.idCourier, regions.NameRegion, courier.FIO, chart.dateOtprav FROM `regions`, `courier`, `chart` WHERE regions.idRegions = chart.idReg AND courier.idCourier = chart.idCour");
if ($row = $sql->fetch_array()) {
    $rowsCount = mysqli_num_rows($sql);
    // echo "<p>Получено объектов: $rowsCount</p>";
    // $rowsCount = 
    echo "<table><tr><th>Id</th><th>Имя</th><th>Дата выезда из Москвы</th><th>Дата доставки</th></tr>";
    foreach($sql as $row){
        echo "<tr>";
            echo "<td>" . $row["NameRegion"] . "</td>";
            echo "<td>" . $row["FIO"] . "</td>";
            echo "<td>" . $row["dateOtprav"] . "</td>";
           // echo "<td>" . $row["$response"] . "</td>";
        echo "</tr>";
    }
}
    ?>
</form>



</body>
</html>