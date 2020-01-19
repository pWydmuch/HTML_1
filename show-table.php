<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    $a  = "wyniki";
    $wyniki = "Wyniki z tabeli użytkownicy";


    require_once "connect.php";
    $conn = mysqli_connect($host, $db_user, $db_password, $db_name);
    $sql = "SELECT * FROM uzytkownicy";
    if(isset($_POST['nick']) and !empty($_POST['nick'])) {
        $nick = $_POST['nick']; 
        $sql = "SELECT * FROM uzytkownicy where login = '$nick'";
    }
    if (isset($_POST['haslo']) and !empty($_POST['haslo'])) {
        $haslo = $_POST['haslo'];
        $sql = "SELECT * FROM uzytkownicy where password = '$haslo'";
    } 
       

    $result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function
    echo "${$a}";
    echo "<br>";
    echo "<table border='1'>";
    while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
        echo "<tr>";
        foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
            echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function. 
        }
        echo "</tr>";
    }
    echo "</table>";

    ?>
    <br>

    <form method="post">
        Filtruj po haśle: <input type="text" name="haslo">
        <br>
        Filtruj po nicku: <input type="text" name="nick">
        <br>
        <input type="submit" value="slij">
    </form>
</body>

</html>