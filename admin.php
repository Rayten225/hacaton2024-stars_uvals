<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    include "/xampp/htdocs/hacaton2024-stars_uvals/include/connect.php";
    ////

    $SkiBase = "SELECT `voit`, COUNT(*) as count FROM `voits` WHERE `voit` = 'SkiBase'";
    $result_SkiBase = mysqli_query($conn, $SkiBase);

if ($result_SkiBase->num_rows > 0) {
    // Выводим количество одинаковых слов
    while($row = $result_SkiBase->fetch_assoc()) {
        echo "Слово: " . $row["voit"] . " встречается " . $row["count"] . " раз(а)";
    }
} else {
    echo "0 результатов";
}

?>
<body>
    
</body>
</html>