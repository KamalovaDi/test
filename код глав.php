<?php
include ("main.php");

// Проверка при добавлении 
    $date1 = $_POST['datav']; // дата, введенная пользователем
    $sql = "SELECT dateOtprav, idCour FROM chart WHERE dateOtprav = '" . date('Y-m-d', strtotime($date1)) . "' AND idCour = {$_POST['courer']}";
    $result = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "В это время курьер занят другой доставкой. Выберите другую дату или курьера!";

    } else {  
        //Добавляем запись
        $sql4 = $mysqli->query("INSERT INTO `chart` (`idReg`, `idCour`, `dateOtprav`) VALUES ('{$_POST['region']}', '{$_POST['courer']}', '{$_POST['datav']}')");
        
        $inp = $_POST['datav'];//считанные данные с формы
        $sql3 = $mysqli->query("SELECT `Days` FROM `regions` WHERE `idRegions` = {$_POST['region']}");
        if($result = mysqli_fetch_array($sql3)){
            $inp2 = $result['Days']; //дней из базы
            $u = "Запись добавлена. Курьер в доставит посылку: ". date('d.m.Y', strtotime('+ '. $inp2 .' day', strtotime(''.$inp .'')));
            echo $u;
        }
    }

?>