<?php
$servername = "localhost";
$username = "root";
$password = "kvant05";
$dbname = "stars_uvals";

// Создаем соединение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
    die("Соединение с базой данных не удалось: " . $conn->connect_error);
}
////

if (isset($_COOKIE["admin"])){
    header('Location: admin.php');
}

if ((isset($_POST['log'])) && (isset($_POST['pas']))) {
    $a = 0;
    $query = 'SELECT `login`, `password` FROM `admin`';
    // выполняем запрос к базе данных
    $result = mysqli_query($conn, $query);
    while ($row = $result->fetch_assoc()) {
        if (($row['login'] == $_POST['log']) && ($row['password'] == $_POST['pas'])) {
            $a = 1;
            setcookie("admin", $a);
        }   
    }

    if ($a == 1) {
        if ((isset($_COOKIE["log"])) && (isset($_COOKIE["pas"]))) {
            setcookie("log", $_COOKIE["log"], time() - 3600, "/");
            setcookie("pas", $_COOKIE["logpass"], time() - 3600, "/");
            setcookie("log", $_POST['log'], time() + 3600, "/");
            setcookie("pas", $_POST['pas'], time() + 3600, "/");
            echo "cook=", $_COOKIE["log"];
        } else {
            setcookie("log", $_POST['log'], time() + 3600, "/");
            setcookie("pas", $_POST['pas'], time() + 3600, "/");
        }

        $new_url = 'admin.php';
        header('Location: ' . $new_url);
    } else {
        echo '<h2>Не правильно введен логин или пароль</h2>';
    }
}
?>
    <?php 

    if (isset($_POST["fio"]) && isset($_POST["date"]) && isset($_POST["spec"]) && isset($_POST["gen"])) {

        // Подготовка SQL запроса с параметрами
        $checkQuery = 'SELECT COUNT(*) as checkvoit FROM `voits` WHERE `FIO` = ?';
        
        // Подготовка и выполнение запроса с использованием подготовленного выражения
        $checkStatement = mysqli_prepare($conn, $checkQuery);
        mysqli_stmt_bind_param($checkStatement, 's', $_POST['fio']);
        mysqli_stmt_execute($checkStatement);
        
        // Получение результата запроса
        $result_check = mysqli_stmt_get_result($checkStatement);
        
        // Обработка результата запроса
        $qerycount = 0; // Инициализация переменной перед использованием
        if ($row = mysqli_fetch_assoc($result_check)) {
            $qerycount = $row['checkvoit'];
        }
        
        // Освобождение результата запроса
        mysqli_free_result($result_check);
        
        // Проверка количества результатов
        if ($qerycount > 0) {
            // Подготовка и выполнение запроса на обновление записи
            $query = 'UPDATE `voits` SET `FIO` = ?, `birthday` = ?, `gender` = ?, `field of activity` = ?, `voit` = ? WHERE `voits`.`FIO` = ?';
            $statement = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($statement, 'ssssss', $_POST['fio'], $_POST['date'], $_POST['gen'], $_POST['spec'], $_COOKIE['data-id'], $_POST['fio']);
            mysqli_stmt_execute($statement);
        } else {
            // Подготовка и выполнение запроса на вставку новой записи
            $query = 'INSERT INTO `voits` (`id`, `FIO`, `birthday`, `gender`, `field of activity`, `voit`) VALUES (NULL, ?, ?, ?, ?, ?)';
            $statement = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($statement, 'sssss', $_POST['fio'], $_POST['date'], $_POST['gen'], $_POST['spec'], $_COOKIE['data-id']);
            mysqli_stmt_execute($statement);
        }
        
        // Освобождение ресурсов
        mysqli_stmt_close($statement);
    
        // Перенаправление пользователя
        header('Location: ./index.php');
        exit(); // Прекращение выполнения скрипта после перенаправления
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проверочка</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/check_admin.css">
    <!-- JS-->
    <script src="js/main.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <!-- FAVICON-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
</head>

<body>
    <form action="check_admin.php" method="POST">
        <div class="block">
            <label for="log">Log-in : </label>
            <input type="text" name="log" id="log">
        </div>
        <div class="block">
            <label for="pas">Password : </label>
            <input type="password" name="pas" id="pas">
        </div>
        <div class="block_button">
            <button type="submit">Войти</button>
            <a href="index.php">На главную</a>
        </div>
    </form>
    <noscript>
      Включите пожалуйста JavaScript( JS ) в настройках, 
      иначе данный сайт будет некорректно работать
    </noscript>
</body>

</html>