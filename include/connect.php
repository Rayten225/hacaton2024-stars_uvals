<?php
$servername = "webhack05.shspu.ru/";
$username = "root";
$password = "kvant05";
$dbname = "stars_uvals";

// Создаем соединение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
    die("Соединение с базой данных не удалось: " . $conn->connect_error);
}