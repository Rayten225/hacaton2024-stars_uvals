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

$login = "SELECT login FROM admin";
$result = $conn->query($login);

$password = "SELECT password FROM admin";
$result = $conn->query($password);

$row = $result->fetch_assoc() {
    echo "$row["login"];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>