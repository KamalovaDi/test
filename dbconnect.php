<?php
$db_user = "root";
$db_password = "9346936";
$mysqli = new mysqli("localhost", $db_user, $db_password, "test");
if ($mysqli->connect_errno) {
    printf("Somehow we failed: %s\n", $mysqli->connect_error);
    exit();
}
?>