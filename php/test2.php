<head>
    <meta charset="UTF-8">
    <meta name="description" content="HTML+ - отправляем данные на сервер методом jQuery $.ajax">
    <title>Форма1</title>
    <link rel="stylesheet" href="st.css">
    <!-- <link rel="stylesheet" href="calend.css"> -->
</head>

<body>
<form action="..\php\reg.php" class="small-form" id="testForm">
    <p><label for="region">Регион</label>
       <input type="text" id="region" name="region"></p>

    <p><label for="datav">дата выезда из Москвы</label>
       <input type="date" id="datav" name="datav"></p>

    <p><label for="courer">Курьер</label>
       <input type="text" id="courer" name="courer"></p>
    
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
<script src="..\php\jquery-ajax2.js"></script> 

</body>
</html>

<?php
// include ("..\php\main.php");

?>