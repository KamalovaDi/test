<head>
    <meta charset="UTF-8">
    <meta name="description" content="HTML+ - отправляем данные на сервер методом jQuery $.ajax">
    <title>Форма1</title>
    <link rel="stylesheet" href="st.css">
    <!-- <link rel="stylesheet" href="calend.css"> -->
</head>
<?php
include ("main.php");

?>
<body>

<form  name='ourForm' id="ourForm">

    <input type="date" id="datav" name='ourF'>
       <!-- <input type="text" id="courer" name="courer"> -->
    <select for="courer" id="courer1" name="courer1">
    <?php
        $result = $mysqli->query('SELECT * FROM `qwerty`');
        echo "<option value='0'></option>";
            while($object = mysqli_fetch_object($result)){
                echo "<option value = '$object->id' > $object->surname </option>";}
                echo "</select>"; 
    ?>
    </select>

    <!-- <p><label for="datav">Дата выезда из Москвы</label>
       <input type="date" id="datav" name="datav"></p> -->
    <button type="submit" name='ourForm_btn'>Отправить</button>

</form>
<div id="response">1</div>
<div id="response2">2</div>
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
<script src="main.js"></script>
<script src="jquery-3.5.1.min.js"></script>

</body>
</html>