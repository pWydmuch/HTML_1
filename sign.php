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




    $info = "<p><b>Invalid phone number</b></p>
    <p>A valid phone number must be in the form
    (+99) 999 999 999</p>";


    $info = preg_replace("/phone/i", "telephone", $info);
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    if (!preg_match(
        "/^\(\+[0-9]{2}\) [0-9]{3} [0-9]{3} [0-9]{3}$/",
        $tel
    )) {
        print($info);
    }

    if (!preg_match(
        "/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9-.]+$/",
        $email
    )) {
        print("<p><b>Invalid email</b></p><p>
        A valid email address must be in the form
    aaa@bbb.cc</p>");
    }
    if (preg_match(
        "/^\(\+[0-9]{2}\) [0-9]{3} [0-9]{3} [0-9]{3}$/",
        $tel
    ) && preg_match(
        "/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9-.]+$/",
        $email
    )) {
        print("Success");
    }
    ?>
</body>

</html>