<?php
$mysqli = new mysqli(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME); 
if ($mysqli->connect_error) { 
die('Ошибка подключения (' . $mysqli->connect_errno . ') ' 
. $mysqli->connect_error); 
} 
?>