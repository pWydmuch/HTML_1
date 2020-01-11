<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Contact, email, phone number, ">
    <meta name="description" content="Site that enables to send a message to the site owner">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Contact us</title>
    <style>
        @-webkit-keyframes example {
            0% {
                background-image: radial-gradient(circle, red, yellow, green);
            }

            25% {
                background-image: radial-gradient(circle, green, red, yellow);
            }

            50% {
                background-image: radial-gradient(circle, yellow, green, red);
            }

            100% {
                background-image: radial-gradient(circle, red, yellow, green);
            }
        }

        @keyframes example {
            0% {
                background-image: -o-radial-gradient(circle, red, yellow, green);
                background-image: radial-gradient(circle, red, yellow, green);
            }

            25% {
                background-image: -o-radial-gradient(circle, green, red, yellow);
                background-image: radial-gradient(circle, green, red, yellow);
            }

            50% {
                background-image: -o-radial-gradient(circle, yellow, green, red);
                background-image: radial-gradient(circle, yellow, green, red);
            }

            100% {
                background-image: -o-radial-gradient(circle, red, yellow, green);
                background-image: radial-gradient(circle, red, yellow, green);
            }
        }

        body {
            background-image: -o-radial-gradient(circle, red, yellow, green);
            background-image: radial-gradient(circle, red, yellow, green);
            -webkit-animation-name: example;
            animation-name: example;
            -webkit-animation-duration: 2s;
            animation-duration: 2s;
        }

        footer {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: #efefef;
            text-align: center;
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
            <li><a href="./log.php">Log in</a></li>
        </ul>
    </nav>
    <section>
        <h1>Send us a message</h1>
        <form action="mailto:patryk.wydmuch@outlook.com" method="POST" enctype="text/plain">
            Name:<br>
            <input type="text" name="name"><br>
            E-mail:<br>
            <input type="text" name="mail"><br>
            Message:<br>
            <textarea maxlength="200"></textarea>
            <br><br>
            <input type="submit" value="Send">
            <input type="reset" value="Reset">
        </form>
    </section>
    <footer>All rights reserved &copy;</footer>
</body>

</html>