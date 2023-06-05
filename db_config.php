<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "valgas";

// Создаем подключение к базе данных
$mysql = new mysqli($servername, $username, $password, $dbname);

// Проверяем успешное подключение
if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}
?>