<head>
    <meta charset="UTF-8">
    <meta name="description" content="HTML+ - отправляем данные на сервер методом jQuery $.ajax">
    <title>Форма1</title>
    <link rel="stylesheet" href="st.css">
    
    <!-- <link rel="stylesheet" href="calend.css"> -->
</head>
<?php
include ("..\php\main.php");

?>
<body>
<form action="reg.php" class="small-form" id="testForm">
    <p>
    <label for="region">Регион</label>
        <select for="region" id="region" name="region">
        <!-- <input type="text" id="region" name="region"></p> -->
        <?php
            $result = $mysqli->query('SELECT * FROM `regions`');
            echo "<option value='0'></option>";
                while($object = mysqli_fetch_object($result)){
                    echo "<option value = '$object->idRegions' > $object->NameRegion </option>";}
                    echo "</select>"; 
        ?>
        </select>
    </p>

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
       </select>
       </p>
    <button id="send" class="btn btn-info">Принять</button>
</form>

<div class="loader" style="display: none">
    <div id="loader-1">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<table class="small-width">
    <thead>
        <tr>
            <th>Регион</th>
            <th>Дата</th>
            <th>Курьер</th>
            <th>Дата прибытия</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>

<script src="jquery-3.5.1.min.js"></script>
<script src="jquery-ajax2.js"></script>

</body>
</html>