<?php 
session_start();
?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Osadnicy - załóż darmowe konto!</title>
    <link rel="stylesheet" href="styles.css">
  <style>
        .error {
            color: red;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
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
            <li><a href="./loguj.php">Log in</a></li>
            <li><a href="./cookie.php">Cookie</a></li>
            <li><a href="./rejestracja.php">Sign up</a></li>
        </ul>
    </nav>
    <form method="post" action="DB_mod.php" style="margin-top:60px;">

        Nickname: <br /> <input type="text" value="<?php
                                                    if (isset($_SESSION['fr_nick'])) {
                                                        echo $_SESSION['fr_nick'];
                                                        unset($_SESSION['fr_nick']);
                                                    }
                                                    ?>" name="nick" /><br />

        <?php
        if (isset($_SESSION['e_nick'])) {
            echo '<div class="error">' . $_SESSION['e_nick'] . '</div>';
            unset($_SESSION['e_nick']);
        }
        ?>

        E-mail: <br /> <input type="text" value="<?php
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

        Twoje hasło: <br /> <input type="password" value="<?php
                                                            if (isset($_SESSION['fr_haslo1'])) {
                                                                echo $_SESSION['fr_haslo1'];
                                                                unset($_SESSION['fr_haslo1']);
                                                            }
                                                            ?>" name="haslo1" /><br />

        <?php
        if (isset($_SESSION['e_haslo'])) {
            echo '<div class="error">' . $_SESSION['e_haslo'] . '</div>';
            unset($_SESSION['e_haslo']);
        }
        ?>

        Powtórz hasło: <br /> <input type="password" value="<?php
                                                            if (isset($_SESSION['fr_haslo2'])) {
                                                                echo $_SESSION['fr_haslo2'];
                                                                unset($_SESSION['fr_haslo2']);
                                                            }
                                                            ?>" name="haslo2" /><br />


        <br />

        <input type="submit" value="Zarejestruj się" />

    </form>

</body>

</html>