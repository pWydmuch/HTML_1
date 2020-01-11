<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
 
        <link rel="stylesheet" href="cookie-style.php">
</head>
<body>
    <?php
       

        foreach ($_COOKIE as $key => $value )
        print( "<p>$key: $value</p>" );
    ?>
</body>
</html>