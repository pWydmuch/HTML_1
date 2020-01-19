<?php

session_start();

if (!isset($_SESSION['zalogowany'])) {
    header('Location: loguj.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="User details, account">
    <meta name="description" content="Site that displays account's details">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Sign up</title>
</head>

<body>
    <nav>
        <ul class="menu">
            <li><a href="./index.php">Cars</a></li>
            <li><a href="./body_styles.php">Car Body Styles</a>
                <ul>
                    <li><a href="./body_styles.html#Wagon">Wagon</a>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>

                        </ul>
                    </li>
                    <li><a href="./body_styles.html#Sedan">Sedan</a>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="./engines.php">Engines</a>
                <ul>
                    <li><a href="#">Diesel</a></li>
                    <li><a href="#">Gasoline</a></li>
                    <li><a href="#">Hybrid</a></li>
                </ul>
            </li>
            <li><a href="./contact.php">Contact Us</a>
                <ul>
                    <li><a href="#">Tel</a></li>
                    <li><a href="#">Fax</a></li>
                    <li><a href="#">Mail</a></li>
                </ul>
            </li>
            <li><a href="./calc.php">Calc</a></li>
            <li><a href="./cookie.php">Cookie</a></li>
            <li><a href="./zmien.php">Change</a></li>
        </ul>
    </nav>
    <section>
        <h1 style="margin-top: 60px;">Change user data</h1>

        <form method="post" action="DB_mod.php">


            Change  E-mail: <br /> <input type="text" value="<?php
                                                        if (isset($_SESSION['fr_email'])) {
                                                            echo $_SESSION['fr_email'];
                                                            unset($_SESSION['fr_email']);
                                                        }
                                                        ?>" name="email" /><br />

            <?php
            if (isset($_SESSION['e_email'])) {
                echo '<div class="error">' . $_SESSION['e_email'] . '</div>';
                unset($_SESSION['e_email']);
            }
            ?>

                  
            <input type="submit" value="Zmien" />
            <input type="text" name="change" value="change" style="display: none"> 
                                                             
        </form>
    </section>
    <footer>All rights reserved &copy;</footer>

</body>

</html>