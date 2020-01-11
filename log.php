<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Sign up">
    <meta name="description" content="Site that enables to sign up">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Log in</title>
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
            <li><a href="./log.php">Calc</a></li>
        </ul>
    </nav>


    <a href="./user_details.php">Already have an account?</a>

    <section>
        <h1>Log in</h1>
        <form name="additional" action="sign.php" method="POST" autocomplete="on">
            <label for="login">Login:</label>
            <input type="text" id="login" name="login">
            <label for="pass">Password: </label>
            <input type="password" id="pass" name="pass">
            <input type="submit">
        </form>
    </section>
    <footer>All rights reserved &copy;</footer>

</body>

</html>