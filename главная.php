<head>
    <meta charset="UTF-8">
    <meta name="description">
    <title>Доставка</title>
    <link rel="stylesheet" href="style.css">

</head>
<?php
    include ("main.php");
?>
<body>

<form  name='testForm' class="small-form" id="testForm">
<p>

    <label for="region">Регион</label>
    <select for="region" id="region" name="region">
    <?php
            $result = $mysqli->query('SELECT * FROM `regions`');
            echo "<option value='0'></option>";
                while($object = mysqli_fetch_object($result)){
                    echo "<option value = '$object->idRegions' > $object->NameRegion </option>";}
                    echo "</select>"; 
    ?>
    </select></p>
    
    <p><label for="datav">Дата выезда из Москвы</label>
       <input type="date" id="datav" name="datav"> 
    </p>

    <p><label for="courer">Курьер</label>
       <select for="courer" id="courer" name="courer">
       <?php
            $result = $mysqli->query('SELECT * FROM `courier`');
            echo "<option value='0'></option>";
                while($object = mysqli_fetch_object($result)){
                    echo "<option value = '$object->idCourier' > $object->FIO </option>";}
                    echo "</select>"; 
        ?></select></p>

    <button type="submit" name='ourForm_btn'>Записать</button>

    <p><label for="ras">Дата доставки</label>
       <div id="response"></div> 

</form>
<script src="ajax.js"></script>


<form name='testForm2' class="small-form2" id="testForm2" method="POST">
<p><label for="ras">Поиск по дате (пустая дата покажет все записи)</label>
<p><input type="date" id="dataf" name="dataf"> 
<button type="submit" name='ourForm_btn2'>Поиск</button>
<?php
 // дата, введенная пользователем
if(!empty($_POST['dataf'])){
    $date = $_POST['dataf'];
    $sql = $mysqli->query("SELECT regions.idRegions, courier.idCourier, regions.NameRegion, courier.FIO, chart.dateOtprav 
        FROM `regions`, `courier`, `chart` WHERE regions.idRegions = chart.idReg AND courier.idCourier = chart.idCour 
        AND chart.dateOtprav = '" . date('Y-m-d', strtotime($date)) . "'");
        if ($row = $sql->fetch_array()) {
        $rowsCount = mysqli_num_rows($sql);
            echo "<table><tr><th>Регион</th><th>Имя</th><th>Дата отправления из Москвы</th></tr>";
            foreach($sql as $row){
                echo "<tr>";
                    echo "<td>" . $row["NameRegion"] . "</td>";
                    echo "<td>" . $row["FIO"] . "</td>";
                    echo "<td>" . $row["dateOtprav"] . "</td>";
                echo "</tr>";
            }
        }
}else{
    $sql = $mysqli->query("SELECT regions.idRegions, courier.idCourier, regions.NameRegion, courier.FIO, chart.dateOtprav 
    FROM `regions`, `courier`, `chart` WHERE regions.idRegions = chart.idReg AND courier.idCourier = chart.idCour");
    if ($row = $sql->fetch_array()) {
    $rowsCount = mysqli_num_rows($sql);
    echo "<table><tr><th>Регион</th><th>Имя</th><th>Дата отправления из Москвы</th></tr>";
    foreach($sql as $row){
        echo "<tr>";
            echo "<td>" . $row["NameRegion"] . "</td>";
            echo "<td>" . $row["FIO"] . "</td>";
            echo "<td>" . $row["dateOtprav"] . "</td>";
                echo "</tr>";
    }
}
}

?>
</form>
