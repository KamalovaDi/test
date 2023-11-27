<head>
    <meta charset="UTF-8">
    <meta name="description" content="HTML+ - отправляем данные на сервер методом jQuery $.ajax">
    <title>1</title>
    <link rel="stylesheet" href="st.css">
    <!-- <link rel="stylesheet" href="calend.css"> -->
</head>
<?php
    include ("main.php");

?>
<body>

<form  name='ourForm' class="small-form" id="testForm">
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
       <!-- <p><label for="days">Дней в пути: </label></p> -->

    <button type="submit" name='ourForm_btn'>Записать</button>
    <p><button action = "2.php" type="submit" name='ourForm_btn'>Список</button></p>

</form>


 <div id="response"></div> 
 <div id="rip"></div> 
<!-- <div id="response2">2</div> -->

<script src="11.js"></script>
<!-- <script src="jquery-3.5.1.min.js"></script> --> 

</body>
</html>