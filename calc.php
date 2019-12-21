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
    define("RES_STR", "Result of the operation is:");

    $operation = 0.000;
    $operation = $_POST['op'];

    $fnum = $_POST['fnum'];
    settype($fnum,"double");
    $snum = $_POST['snum'];
    $res= '';
    if ($operation == 'add') {
        if ($snum >= 0) {

            for ($i = 0; $i < $snum; $i++) {
                $fnum = $fnum + 1;
            }
            $res = $fnum;
        } else $res = $fnum + (double) $snum;

        echo RES_STR . " $res";
        die();
    }
    if (strcmp($operation,'sub')==0) {
        $res = $fnum - $snum;
        echo RES_STR . " $res";
        die();
    }
    if ($operation == 'div') {
        $res = $fnum / $snum;
        echo RES_STR . " $res";
        die();
    }
    if ($operation == 'mul') {
        $res = $fnum * $snum;
        echo RES_STR . " $res";
        die();
    }
    ?>
</body>

</html>

