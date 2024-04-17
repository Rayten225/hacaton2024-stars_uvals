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
    //   if ((isset($_POST["fio"]))&&(isset($_POST["date"]))&&(isset($_POST["spec"]))&&(isset($_POST["gen"]))){

    //       $query = 'INSERT INTO `voits` (`id`, `FIO`, `birthday`, `gender`, `field of activity`, `voit`) VALUES (NULL, "'.$_POST['fio'].'", "'.$_POST['date'].'", "'.$_POST['gen'].'", "'.$_POST['spec'].'", "'.$_COOKIE['data-id'].'")';


    //       $result = mysqli_query($conn, $query);
    //       header('Location: ./index.php');
    //   }


    if ((isset($_POST["fio"]))&&(isset($_POST["date"]))&&(isset($_POST["spec"]))&&(isset($_POST["gen"]))){

        $check = 'SELECT COUNT(*) as checkvoit FROM `voits` WHERE `FIO` = "'.$_POST['fio'].'"';
        $result_check = mysqli_query($conn, $check);
        while ($row = $result_check->fetch_assoc()) {
            $qerycount = $row['checkvoit'];
        }
        // var_dump($result_check);
        echo $qerycount;
        if ($qerycount > 0){
            $query = 'UPDATE `voits` SET `FIO` = "'.$_POST['fio'].'", `birthday` = "'.$_POST['date'].'", `gender` = "'.$_POST['gen'].'", `field of activity` = "'.$_POST['spec'].'", `voit` = "'.$_COOKIE['data-id'].'" WHERE `voits`.`FIO` = "'.$_POST['fio'].'"';
            $result = mysqli_query($conn, $query);
            header('Location: ./index.php');
            echo $result;
        }else{
            $query = 'INSERT INTO `voits` (`id`, `FIO`, `birthday`, `gender`, `field of activity`, `voit`) VALUES (NULL, "'.$_POST['fio'].'", "'.$_POST['date'].'", "'.$_POST['gen'].'", "'.$_POST['spec'].'", "'.$_COOKIE['data-id'].'")';
            $result = mysqli_query($conn, $query);
            header('Location: ./index.php');
            echo $result;

        }


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
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="js/main.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <!-- Chatra {literal}-->
    <script>
        (function(d, w, c) {
            w.ChatraID = 'HkjoreZ7TDjDoHKoE';
            var s = d.createElement('script');
            w[c] = w[c] || function() {
                (w[c].q = w[c].q || []).push(arguments);
            };
            s.async = true;
            s.src = 'https://call.chatra.io/chatra.js';
            if (d.head) d.head.appendChild(s);
        })(document, window, 'Chatra');
        // /Chatra {/literal}
    </script>
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
</body>

</html>