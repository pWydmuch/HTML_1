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
    $port = $_SERVER['REMOTE_PORT'];
    echo "<h2>Server uses port - $port<h2>";
    echo "<h2>Requirements for car are:</h2>";
    echo "<br>";
    $brand = $_POST["brand"];
    for (reset($_POST); $element = key($_POST); next($_POST)) {
        print("<p>$element is $_POST[$element]</p>");
    }
    $cars[0] = "A3";
    $cars[1] = "B7";
    $cars[2] = "C1";
    $cars[3] = "B1";
    echo "<h2>cars matching requirements:</h2>";
    echo "<br>";
    for ($i = 0; $i < count($cars); $i++) {
        print("$brand $cars[$i]");
        echo "<br>";
    }

    $recommend = array("SUV" => "BMW c3", "Wagon" => "Volkswagen f3", "Sedan" => "Fiat fiesta");

    echo "<h3>You may also like:</h3>";
    foreach ($recommend as $element => $value)
        print("<p>$element - $value</p>");

    ?>
</body>

</html>