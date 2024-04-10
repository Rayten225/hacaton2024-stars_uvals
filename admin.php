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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/admin.css">
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
    <div class="wraper">
        <article>
            <h1>Админ-панель</h1>
            <a href="index.php">
                На главную
            </a>
        </article>
        <div class="vote">
            <article class="vote__title">
                <h2>Голоса</h2>
            </article>
            <div class="grid vote__grid">
                <?php
$data = array();

$MineImprovement = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%1%'";
$result_MineImprovement = mysqli_query($conn, $MineImprovement);

    // Выводим количество одинаковых слов
    while ($row = $result_MineImprovement->fetch_assoc()) {
        echo "<h4>Голосов за: Благоустроиство рудника  " . $row['count'] . "</h4>";
    }


$PondLandscaping = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%2%'";
$result_PondLandscaping = mysqli_query($conn, $PondLandscaping);

    // Выводим количество одинаковых слов
    while ($row = $result_PondLandscaping->fetch_assoc()) {
        echo "<h4>Голосов за: Благоустройство пруда  " . $row['count'] . "</h4>";
    }



$BiathlonStadium = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%3%'";
$result_BiathlonStadium = mysqli_query($conn, $BiathlonStadium);

    // Выводим количество одинаковых слов
    while ($row = $result_BiathlonStadium->fetch_assoc()) {
        echo "<h4>Голосов за: Биатлонный стадион  " . $row['count'] . "</h4>";
    }


$DownhillTrack = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%4%'";
$result_DownhillTrack = mysqli_query($conn, $DownhillTrack);

    // Выводим количество одинаковых слов
    while ($row = $result_DownhillTrack->fetch_assoc()) {
        echo "<h4>Голосов за: Трасса даунхилла  " . $row['count'] . "</h4>";
    }


$TubingTrack = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%5%'";
$result_TubingTrack = mysqli_query($conn, $TubingTrack);
    
    // Выводим количество одинаковых слов
    while ($row = $result_TubingTrack->fetch_assoc()) {
        echo "<h4>Голосов за: Трасса для тюбингов без подъемника " . $row['count'] . "</h4>";
    }


$TubingTrackLift = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%6%'";
$result_TubingTrackLift = mysqli_query($conn, $TubingTrackLift);
    
    // Выводим количество одинаковых слов
    while ($row = $result_TubingTrackLift->fetch_assoc()) {
        echo "<h4>Голосов за: Трасса для тюбингов с подьемом " . $row['count'] . "</h4>";
    }


$ChildrensPlayground = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%7%'";
$result_ChildrensPlayground = mysqli_query($conn, $ChildrensPlayground);
    
    // Выводим количество одинаковых слов
    while ($row = $result_ChildrensPlayground->fetch_assoc()) {
        echo "<h4>Голосов за: Детскую площадку " . $row['count'] . "</h4>";
    }


$Greenhouse = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%8%'";
$result_Greenhouse = mysqli_query($conn, $Greenhouse);
    
    // Выводим количество одинаковых слов
    while ($row = $result_Greenhouse->fetch_assoc()) {
        echo "<h4>Голосов за: Оранжерею (ботаничиский сад) " . $row['count'] . "</h4>";
    }


$Greenhouse = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%9%'";
$result_Greenhouse = mysqli_query($conn, $Greenhouse);
    
    // Выводим количество одинаковых слов
    while ($row = $result_Greenhouse->fetch_assoc()) {
        echo "<h4>Голосов за: Оранжерею (ботаничиский сад) " . $row['count'] . "</h4>";
    }

    
$Greenhouse = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%10%'";
$result_Greenhouse = mysqli_query($conn, $Greenhouse);
    
    // Выводим количество одинаковых слов
    while ($row = $result_Greenhouse->fetch_assoc()) {
        echo "<h4>Голосов за: Оранжерею (ботаничиский сад) " . $row['count'] . "</h4>";
    }

    
$Greenhouse = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%11%'";
$result_Greenhouse = mysqli_query($conn, $Greenhouse);
    
    // Выводим количество одинаковых слов
    while ($row = $result_Greenhouse->fetch_assoc()) {
        echo "<h4>Голосов за: Оранжерею (ботаничиский сад) " . $row['count'] . "</h4>";
    }


$Greenhouse = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%12%'";
$result_Greenhouse = mysqli_query($conn, $Greenhouse);
    
    // Выводим количество одинаковых слов
    while ($row = $result_Greenhouse->fetch_assoc()) {
        echo "<h4>Голосов за: Оранжерею (ботаничиский сад) " . $row['count'] . "</h4>";
    }


$Greenhouse = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%13%'";
$result_Greenhouse = mysqli_query($conn, $Greenhouse);
    
    // Выводим количество одинаковых слов
    while ($row = $result_Greenhouse->fetch_assoc()) {
        echo "<h4>Голосов за: Оранжерею (ботаничиский сад) " . $row['count'] . "</h4>";
    }

    
$Greenhouse = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%14%'";
$result_Greenhouse = mysqli_query($conn, $Greenhouse);
    
    // Выводим количество одинаковых слов
    while ($row = $result_Greenhouse->fetch_assoc()) {
        echo "<h4>Голосов за: Оранжерею (ботаничиский сад) " . $row['count'] . "</h4>";
    }

    
$Greenhouse = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%15%'";
$result_Greenhouse = mysqli_query($conn, $Greenhouse);
    
    // Выводим количество одинаковых слов
    while ($row = $result_Greenhouse->fetch_assoc()) {
        echo "<h4>Голосов за: Оранжерею (ботаничиский сад) " . $row['count'] . "</h4>";
    }


$Greenhouse = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%16%'";
$result_Greenhouse = mysqli_query($conn, $Greenhouse);
    
    // Выводим количество одинаковых слов
    while ($row = $result_Greenhouse->fetch_assoc()) {
        echo "<h4>Голосов за: Оранжерею (ботаничиский сад) " . $row['count'] . "</h4>";
    }

    
$Greenhouse = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%17%'";
$result_Greenhouse = mysqli_query($conn, $Greenhouse);
    
    // Выводим количество одинаковых слов
    while ($row = $result_Greenhouse->fetch_assoc()) {
        echo "<h4>Голосов за: Оранжерею (ботаничиский сад) " . $row['count'] . "</h4>";
    }

    
$Greenhouse = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%18%'";
$result_Greenhouse = mysqli_query($conn, $Greenhouse);
    
    // Выводим количество одинаковых слов
    while ($row = $result_Greenhouse->fetch_assoc()) {
        echo "<h4>Голосов за: Оранжерею (ботаничиский сад) " . $row['count'] . "</h4>";
    }
                ?>
            </div>
        </div>

    </div>
    <div class="grid">
    </div>
</body>

</html>