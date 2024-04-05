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

if ((isset($_POST['log']))&&(isset($_POST['pas']))){
    $a = 0;
      $query = 'SELECT `login`, `password` FROM `admin`';
   // выполняем запрос к базе данных
      $result = mysqli_query($conn, $query);
        while($row = $result->fetch_assoc()){
        if (($row['login'] == $_POST['log']) && ($row['password'] == $_POST['pas'])){
    $a=1;
}
}


if ($a==1) {
    if ((isset($_COOKIE["log"]))&&(isset($_COOKIE["pas"]))){
        setcookie("log", $_COOKIE["log"],time()-3600,"/");
        setcookie("pas", $_COOKIE["logpass"],time()-3600,"/");
        setcookie("log", $_POST['log'],time()+3600,"/");
        setcookie("pas", $_POST['pas'],time()+3600,"/");
        echo "cook=",$_COOKIE["log"];
        
    }
    else {
        setcookie("log", $_POST['log'],time()+3600,"/");
        setcookie("pas", $_POST['pas'],time()+3600,"/");
    } 
    $new_url = 'admin.php';
    header('Location: '.$new_url);
}else{
echo '<h2>Не правильно введен логин или пароль</h2>';

}
}

?>
    <?php 
      if ((isset($_POST["fio"]))&&(isset($_POST["date"]))&&(isset($_POST["spec"]))&&(isset($_POST["gen"]))){

          $query = 'INSERT INTO `voits` (`id`, `FIO`, `birthday`, `gender`, `field of activity`, `voit`) VALUES (NULL, "'.$_POST['fio'].'", "'.$_POST['date'].'", "'.$_POST['gen'].'", "'.$_POST['spec'].'", "RestPlace")';


          $result = mysqli_query($conn, $query);
          header('Location: ./index.php');
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
    <form action="check_admin.php" method="POST">
        <input type="text" name="log">введите логин
        <input type="password" name="pas">введите пароль
        <input type="submit">
    </form>
</body>
</html>