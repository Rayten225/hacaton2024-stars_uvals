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

$Amphitheater = "SELECT SUM(count) as total_count FROM (SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%Amphitheater%' GROUP BY `voit`) as temp_table HAVING COUNT(*) > 1";
$result_Amphitheater = mysqli_query($conn, $Amphitheater);

if ($result_Amphitheater->num_rows > 0) {
    // Выводим количество одинаковых слов
    while ($row = $result_Amphitheater->fetch_assoc()) {
        echo "<h4>Голосов за: Amphitheater  " . $row['total_count'] . "</h4>";
        array_push($data, ["Amphitheater", $row['total_count']]);
        $data["Amphitheater"] = $row["total_count"];
    }
} else {
    echo "<h4>Amphitheater: 0 голосов</h4>";
}


$ArtPark = "SELECT SUM(count) as total_count FROM (SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%ArtPark%' GROUP BY `voit`) as temp_table HAVING COUNT(*) > 1";
$result_ArtPark = mysqli_query($conn, $ArtPark);

if ($result_ArtPark->num_rows > 0) {
    // Выводим количество одинаковых слов
    while ($row = $result_ArtPark->fetch_assoc()) {
        echo "<h4>Голосов за: ArtPark  " . $row['total_count'] . "</h4>";
        array_push($data, ["ArtPark", $row['total_count']]);
        $data["ArtPark"] = $row["total_count"];
    }
} else {
    echo "<h4>ArtPark: 0 голосов</h4>";
}


$Gazebos = "SELECT SUM(count) as total_count FROM (SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%Gazebos%' GROUP BY `voit`) as temp_table HAVING COUNT(*) > 1";
$result_Gazebos = mysqli_query($conn, $Gazebos);

if ($result_Gazebos->num_rows > 0) {
    // Выводим количество одинаковых слов
    while ($row = $result_Gazebos->fetch_assoc()) {
        echo "<h4>Голосов за: Gazebos  " . $row['total_count'] . "</h4>";
        $data["Gazebos"] = $row["total_count"];
    }
} else {
    echo "<h4>Gazebos: 0 голосов</h4>";
}


$WorkshopArea = "SELECT SUM(count) as total_count FROM (SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%WorkshopArea%' GROUP BY `voit`) as temp_table HAVING COUNT(*) > 1";
$result_WorkshopArea = mysqli_query($conn, $WorkshopArea);

if ($result_WorkshopArea->num_rows > 0) {
    // Выводим количество одинаковых слов
    while ($row = $result_WorkshopArea->fetch_assoc()) {
        echo "<h4>Голосов за: WorkshopArea  " . $row['total_count'] . "</h4>";
        $data["WorkshopArea"] = $row["total_count"];
    }
} else {
    echo "<h4>WorkshopArea: 0 голосов</h4>";
}


$Glamping = "SELECT SUM(count) as total_count FROM (SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%Glamping%' GROUP BY `voit`) as temp_table HAVING COUNT(*) > 1";
$result_Glamping = mysqli_query($conn, $Glamping);

if ($result_Glamping->num_rows > 0) {
    // Выводим количество одинаковых слов
    while ($row = $result_Glamping->fetch_assoc()) {
        echo "<h4>Голосов за: Glamping  " . $row['total_count'] . "</h4>";
        $data["Glamping"] = $row["total_count"];
    }
} else {
    echo "<h4>Glamping: 0 голосов</h4>";
}


$ChildrensPlayground = "SELECT SUM(count) as total_count FROM (SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%ChildrensPlayground%' GROUP BY `voit`) as temp_table HAVING COUNT(*) > 1";
$result_ChildrensPlayground = mysqli_query($conn, $ChildrensPlayground);

if ($result_ChildrensPlayground->num_rows > 0) {
    // Выводим количество одинаковых слов
    while ($row = $result_ChildrensPlayground->fetch_assoc()) {
        echo "<h4>Голосов за: ChildrensPlayground  " . $row['total_count'] . "</h4>";
        $data["ChildrensPlayground"] = $row["total_count"];
    }
} else {
    echo "<h4>ChildrensPlayground: 0 голосов</h4>";
}


$Houses = "SELECT SUM(count) as total_count FROM (SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%Houses%' GROUP BY `voit`) as temp_table HAVING COUNT(*) > 1";
$result_Houses = mysqli_query($conn, $Houses);

if ($result_Houses->num_rows > 0) {
    // Выводим количество одинаковых слов
    while ($row = $result_Houses->fetch_assoc()) {
        echo "<h4>Голосов за: Houses  " . $row['total_count'] . "</h4>";
        $data["Houses"] = $row["total_count"];
    }
} else {
    echo "<h4>Houses: 0 голосов</h4>";
}


$SkiBase = "SELECT SUM(count) as total_count FROM (SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%SkiBase%' GROUP BY `voit`) as temp_table HAVING COUNT(*) > 1";
$result_SkiBase = mysqli_query($conn, $SkiBase);

if ($result_SkiBase->num_rows > 0) {
    // Выводим количество одинаковых слов
    while ($row = $result_SkiBase->fetch_assoc()) {
        echo "<h4>Голосов за: SkiBase  " . $row['total_count'] . "</h4>";
        $data["SkiBase"] = $row["total_count"];
    }
} else {
    echo "<h4>SkiBase: 0 голосов</h4>";
}


$PicnicArea = "SELECT SUM(count) as total_count FROM (SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%PicnicArea%' GROUP BY `voit`) as temp_table HAVING COUNT(*) > 1";
$result_PicnicArea = mysqli_query($conn, $PicnicArea);

if ($result_PicnicArea->num_rows > 0) {
    // Выводим количество одинаковых слов
    while ($row = $result_PicnicArea->fetch_assoc()) {
        echo "<h4>Голосов за: PicnicArea  " . $row['total_count'] . "</h4>";
        $data["PicnicArea"] = $row["total_count"];
    }
} else {
    echo "<h4>PicnicArea: 0 голосов</h4>";
}


$RestingPlace = "SELECT SUM(count) as total_count FROM (SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%RestingPlace%' GROUP BY `voit`) as temp_table HAVING COUNT(*) > 1";
$result_RestingPlace = mysqli_query($conn, $RestingPlace);

if ($result_RestingPlace->num_rows > 0) {
    // Выводим количество одинаковых слов
    while ($row = $result_RestingPlace->fetch_assoc()) {
        echo "<h4>Голосов за: RestingPlace  " . $row['total_count'] . "</h4>";
        $data["RestingPlace"] = $row["total_count"];
    }
} else {
    echo "<h4>RestingPlace: 0 голосов</h4>";
}


$MiniZoo = "SELECT SUM(count) as total_count FROM (SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%MiniZoo%' GROUP BY `voit`) as temp_table HAVING COUNT(*) > 1";
$result_MiniZoo = mysqli_query($conn, $MiniZoo);

if ($result_MiniZoo->num_rows > 0) {
    // Выводим количество одинаковых слов
    while ($row = $result_MiniZoo->fetch_assoc()) {
        echo "<h4>Голосов за: MiniZoo  " . $row['total_count'] . "</h4>";
        $data["MiniZoo"] = $row["total_count"];
    }
} else {
    echo "<h4>MiniZoo: 0 голосов</h4>";
}


$PondArrangement = "SELECT SUM(count) as total_count FROM (SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%PondArrangement%' GROUP BY `voit`) as temp_table HAVING COUNT(*) > 1";
$result_PondArrangement = mysqli_query($conn, $PondArrangement);

if ($result_PondArrangement->num_rows > 0) {
    // Выводим количество одинаковых слов
    while ($row = $result_PondArrangement->fetch_assoc()) {
        echo "<h4>Голосов за: PondArrangement  " . $row['total_count'] . "</h4>";
        $data["PondArrangement"] = $row["total_count"];
    }
} else {
    echo "<h4>PondArrangement: 0 голосов</h4>";
}


$Greenhouse = "SELECT SUM(count) as total_count FROM (SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%Greenhouse%' GROUP BY `voit`) as temp_table HAVING COUNT(*) > 1";
$result_Greenhouse = mysqli_query($conn, $Greenhouse);

if ($result_Greenhouse->num_rows > 0) {
    // Выводим количество одинаковых слов
    while ($row = $result_Greenhouse->fetch_assoc()) {
        echo "<h4>Голосов за: Greenhouse  " . $row['total_count'] . "</h4>";
        $data["Greenhouse"] = $row["total_count"];
    }
} else {
    echo "<h4>Greenhouse: 0 голосов</h4>";
}


$ObservationTower = "SELECT SUM(count) as total_count FROM (SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%ObservationTower%' GROUP BY `voit`) as temp_table HAVING COUNT(*) > 1";
$result_ObservationTower = mysqli_query($conn, $ObservationTower);

if ($result_ObservationTower->num_rows > 0) {
    // Выводим количество одинаковых слов
    while ($row = $result_ObservationTower->fetch_assoc()) {
        echo "<h4>Голосов за: ObservationTower  " . $row['total_count'] . "</h4>";
        $data["ObservationTower"] = $row["total_count"];
    }
} else {
    echo "<h4>ObservationTower: 0 голосов</h4>";
}


$BiathlonStadium = "SELECT SUM(count) as total_count FROM (SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%BiathlonStadium%' GROUP BY `voit`) as temp_table HAVING COUNT(*) > 1";
$result_BiathlonStadium = mysqli_query($conn, $BiathlonStadium);

if ($result_BiathlonStadium->num_rows > 0) {
    // Выводим количество одинаковых слов
    while ($row = $result_BiathlonStadium->fetch_assoc()) {
        echo "<h4>Голосов за: BiathlonStadium  " . $row['total_count'] . "</h4>";
        $data["BiathlonStadium"] = $row["total_count"];
    }
} else {
    echo "<h4>BiathlonStadium: 0 голосов</h4>";
}


$DownhillTrack = "SELECT SUM(count) as total_count FROM (SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%DownhillTrack%' GROUP BY `voit`) as temp_table HAVING COUNT(*) > 1";
$result_DownhillTrack = mysqli_query($conn, $DownhillTrack);

if ($result_DownhillTrack->num_rows > 0) {
    // Выводим количество одинаковых слов
    while ($row = $result_DownhillTrack->fetch_assoc()) {
        echo "<h4>Голосов за: DownhillTrack  " . $row['total_count'] . "</h4>";
        $data["DownhillTrack"] = $row["total_count"];
    }
} else {
    echo "<h4>DownhillTrack: 0 голосов</h4>";
}


$TubingRoute = "SELECT SUM(count) as total_count FROM (SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%TubingRoute%' GROUP BY `voit`) as temp_table HAVING COUNT(*) > 1";
$result_TubingRoute = mysqli_query($conn, $TubingRoute);

if ($result_TubingRoute->num_rows > 0) {
    // Выводим количество одинаковых слов
    while ($row = $result_TubingRoute->fetch_assoc()) {
        echo "<h4>Голосов за: TubingRoute  " . $row['total_count'] . "</h4>";
        $data["TubingRoute"] = $row["total_count"];
    }
} else {
    echo "<h4>TubingRoute: 0 голосов</h4>";
}


$EcoSchool = "SELECT SUM(count) as total_count FROM (SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%EcoSchool%' GROUP BY `voit`) as temp_table HAVING COUNT(*) > 1";
$result_EcoSchool = mysqli_query($conn, $EcoSchool);

if ($result_EcoSchool->num_rows > 0) {
    // Выводим количество одинаковых слов
    while ($row = $result_EcoSchool->fetch_assoc()) {
        echo "<h4>Голосов за: EcoSchool  " . $row['total_count'] . "</h4>";
        $data["EcoSchool"] = $row["total_count"];
    }
} else {
    echo "<h4>EcoSchool: 0 голосов</h4>";
}


$TheSpring = "SELECT SUM(count) as total_count FROM (SELECT COUNT(*) as count FROM `voits` WHERE `voit` LIKE '%TheSpring%' GROUP BY `voit`) as temp_table HAVING COUNT(*) > 1";
$result_TheSpring = mysqli_query($conn, $TheSpring);

if ($result_TheSpring->num_rows > 0) {
    // Выводим количество одинаковых слов
    while ($row = $result_TheSpring->fetch_assoc()) {
        echo "<h4>Голосов за: TheSpring  " . $row['total_count'] . "</h4>";
        $data["TheSpring"] = $row["total_count"];
    }
} else {
    echo "<h4>TheSpring: 0 голосов</h4>";
}
                ?>
            </div>
        </div>

    </div>
    <div class="grid">
    </div>
</body>

</html>