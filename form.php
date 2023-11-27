<?php
include ("main.php");
    
    // $inp = $_POST['ourForm_inp'];
    // echo $inp;
    // $inp = $_POST['courer1'];
    // echo $inp;
    // $sql = $mysqli->query("SELECT `surname` FROM `qwerty` WHERE `id` = {$_POST['courer1']}");
    // //$object = mysqli_fetch_object($res);
    // if($result = mysqli_fetch_array($sql)){
    //     echo "{$result['surname']}";
    // }
    // $inp1 = $_POST['ourF'];
    // echo $inp1;
    

    // $res = '';
    // foreach($_POST as $key=>$value){
    //     if($key == 'surname') $first = 'Имя (Логин)';
    //     if($key == 'datav') $first = 'Email';
    //     if($key == 'skills') {
    //         $first = 'Знания:';
    //         if(is_array ($value))$value = implode(', ', $value);
    //     }
    //     $res .= "<tr><td>$first</td><td>$value</td></tr>";
    // }
    // echo $res;
    // die();

    // if(!isset($_POST['username']) || !isset($_POST['useremail']) || !isset($_POST['skills'])) die('Нет нужных данных');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Обрабатываем запрос
        // Получаем данные из базы данных или других источников
        $data = array(
          'surname' => 'rfvfkjdf',
        );
        // Отправляем данные в формате JSON
        header('Content-Type: application/json');
        echo json_encode($data);
      }