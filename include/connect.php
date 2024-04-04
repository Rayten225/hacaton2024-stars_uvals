<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stars_uvals";

// Создаем соединение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
    die("Соединение с базой данных не удалось: " . $conn->connect_error);
<<<<<<< Updated upstream
}
=======
<<<<<<< HEAD
}
////

=======
}
>>>>>>> 467890cc9156d3295edbd678f31dd63b001b1ec6
>>>>>>> Stashed changes
