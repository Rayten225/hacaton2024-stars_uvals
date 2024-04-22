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

if ($_COOKIE["admin"] == 0){
    header('Location: check_admin.php');
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
    <script src="js/main.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
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


$ecoSchool = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%9%'";
$result_ecoSchool = mysqli_query($conn, $ecoSchool);
    
    // Выводим количество одинаковых слов
    while ($row = $result_ecoSchool->fetch_assoc()) {
        echo "<h4>Голосов за: Экошкола " . $row['count'] . "</h4>";
    }

    
$areaTrails = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%10%'";
$result_areaTrails = mysqli_query($conn, $areaTrails);
    
    // Выводим количество одинаковых слов
    while ($row = $result_areaTrails->fetch_assoc()) {
        echo "<h4>Голосов за: Зоны отдыха вдоль тропинок, тротуаров " . $row['count'] . "</h4>";
    }

    
$PicnicArea = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%11%'";
$result_PicnicArea = mysqli_query($conn, $PicnicArea);
    
    // Выводим количество одинаковых слов
    while ($row = $result_PicnicArea->fetch_assoc()) {
        echo "<h4>Голосов за: Место для пикника " . $row['count'] . "</h4>";
    }


$Gazebos = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%12%'";
$result_Gazebos = mysqli_query($conn, $Gazebos);
    
    // Выводим количество одинаковых слов
    while ($row = $result_Gazebos->fetch_assoc()) {
        echo "<h4>Голосов за: Беседки " . $row['count'] . "</h4>";
    }


$GazebosCanopy = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%12%'";
$result_GazebosCanopy = mysqli_query($conn, $GazebosCanopy);
    
    // Выводим количество одинаковых слов
    while ($row = $result_GazebosCanopy->fetch_assoc()) {
        echo "<h4>Голосов за: Беседки (с навесом) " . $row['count'] . "</h4>";
    }

    
$workshopArea = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%14%'";
$result_workshopArea = mysqli_query($conn, $workshopArea);
    
    // Выводим количество одинаковых слов
    while ($row = $result_workshopArea->fetch_assoc()) {
        echo "<h4>Голосов за: Площадка для воркаута " . $row['count'] . "</h4>";
    }

    
$MiniZoo = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%15%'";
$result_MiniZoo = mysqli_query($conn, $MiniZoo);
    
    // Выводим количество одинаковых слов
    while ($row = $result_MiniZoo->fetch_assoc()) {
        echo "<h4>Голосов за: Мини зоопарк " . $row['count'] . "</h4>";
    }


$workshopArea_RubberCoating = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%14%'";
$result_workshopArea_RubberCoating = mysqli_query($conn, $workshopArea_RubberCoating);
    
    // Выводим количество одинаковых слов
    while ($row = $result_workshopArea_RubberCoating->fetch_assoc()) {
        echo "<h4>Голосов за: Площадка для воркаута (резиновое покрытие) " . $row['count'] . "</h4>";
    }

    
$Glamping = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%17%'";
$result_Glamping = mysqli_query($conn, $Glamping);
    
    // Выводим количество одинаковых слов
    while ($row = $result_Glamping->fetch_assoc()) {
        echo "<h4>Голосов за: Глемпинг " . $row['count'] . "</h4>";
    }

    
$Camping = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%18%'";
$result_Camping = mysqli_query($conn, $Camping);
    
    // Выводим количество одинаковых слов
    while ($row = $result_Camping->fetch_assoc()) {
        echo "<h4>Голосов за: Кэмпинг " . $row['count'] . "</h4>";
    }

$Toilet = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%19%'";
$result_Toilet = mysqli_query($conn, $Toilet);
    
    // Выводим количество одинаковых слов
    while ($row = $result_Toilet->fetch_assoc()) {
        echo "<h4>Голосов за: Туалет " . $row['count'] . "</h4>";
    }


$Amphitheater = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%20%'";
$result_Amphitheater = mysqli_query($conn, $Amphitheater);
    
    // Выводим количество одинаковых слов
    while ($row = $result_Amphitheater->fetch_assoc()) {
        echo "<h4>Голосов за: Амфитеатр " . $row['count'] . "</h4>";
    }


$RollerSkiTrack = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%21%'";
$result_RollerSkiTrack = mysqli_query($conn, $RollerSkiTrack);
    
    // Выводим количество одинаковых слов
    while ($row = $result_RollerSkiTrack->fetch_assoc()) {
        echo "<h4>Голосов за: Лыжероллерная трасса " . $row['count'] . "</h4>";
    }


$Footpaths = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%22%'";
$result_Footpaths = mysqli_query($conn, $Footpaths);
    
    // Выводим количество одинаковых слов
    while ($row = $result_Footpaths->fetch_assoc()) {
        echo "<h4>Голосов за: Пешеходные дорожки " . $row['count'] . "</h4>";
    }


$ArtObjects = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%23%'";
$result_ArtObjects = mysqli_query($conn, $ArtObjects);
    
    // Выводим количество одинаковых слов
    while ($row = $result_ArtObjects->fetch_assoc()) {
        echo "<h4>Голосов за: Арт объекты " . $row['count'] . "</h4>";
    }


$ArtObjectsSculpts = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%24%'";
$result_ArtObjectsSculpts = mysqli_query($conn, $ArtObjectsSculpts);
    
    // Выводим количество одинаковых слов
    while ($row = $result_ArtObjectsSculpts->fetch_assoc()) {
        echo "<h4>Голосов за: Арт объекты (скульптуры обитателей Увалов) " . $row['count'] . "</h4>";
    }


$CPSpace = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%25%'";
$result_CPSpace = mysqli_query($conn, $CPSpace);
    
    // Выводим количество одинаковых слов
    while ($row = $result_CPSpace->fetch_assoc()) {
        echo "<h4>Голосов за: Детская площадка «Космос» " . $row['count'] . "</h4>";
    }


$Lift = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%26%'";
$result_Lift = mysqli_query($conn, $Lift);
    
    // Выводим количество одинаковых слов
    while ($row = $result_Lift->fetch_assoc()) {
        echo "<h4>Голосов за: Подъемник " . $row['count'] . "</h4>";
    }


$ObservationDeck = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%27%'";
$result_ObservationDeck = mysqli_query($conn, $ObservationDeck);
    
    // Выводим количество одинаковых слов
    while ($row = $result_ObservationDeck->fetch_assoc()) {
        echo "<h4>Голосов за: Смотровая площадка с которой открывается вид на город " . $row['count'] . "</h4>";
    }


$SkiBase = "SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%28%'";
$result_SkiBase = mysqli_query($conn, $SkiBase);
    
    // Выводим количество одинаковых слов
    while ($row = $result_SkiBase->fetch_assoc()) {
        echo "<h4>Голосов за: Лыжная база " . $row['count'] . "</h4>";
    }
                ?>
            </div>
        </div>

    </div>
    <div class="grid">
    </div>
    <noscript>
      Включите пожалуйста JavaScript( JS ) в настройках, 
      иначе данный сайт будет некорректно работать
    </noscript>
</body>

</html>