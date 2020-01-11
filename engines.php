<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="cars, car engines, diesel, gasoline, electric">
    <meta name="description" content="Short description of car engines available, such as diesel, electric etc">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Engines</title>
    <style>
        body {
            background-image: url("./img/engine.jpg");
            background-size: contain;
            background-position: center;
            background-repeat: repeat-x;
        }   
        body>table,
        details {
            margin: auto;
            margin-top: 20px;
            width: 50%;
            background-color: white;
            padding-bottom: 10px;
            border: green dashed 1.0px
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
    <!-- sub i sup to jest modyfikacja wzgledem lini bazowej -->
    <table class="main-table">
        <thead>
            <tr>
                <th>Type</th>
                <th>Datails</th>
                <th>Power</th>
                <th>Range</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Gasoline</td>
                <td>

                    <table class="nested-table">
                        <thead>
                            <tr>
                                <th>Cyliders number</th>
                                <th>Capacity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>4</td>
                                <td>1.5 dm<sup>3</sup></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>2 dm<sup>3</sup></td>
                            </tr>
                        </tbody>
                    </table>

                </td>
                <td colspan="2">
                    High
                </td>
            </tr>
            <tr>
                <td>Diesel</td>
                <td>

                    <table class="nested-table">
                        <thead>
                            <tr>
                                <th>Cyliders number</th>
                                <th>Capacity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>6</td>
                                <td>2 dm<sup>3</sup></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>4 dm<sup>3</sup></td>
                            </tr>
                        </tbody>
                    </table>

                </td>
                <td rowspan="2">
                    Low
                </td>
                <td>
                    Medium
                </td>
            </tr>
            <tr>
                <td>Hybrid</td>
                <td>

                    <table class="nested-table">
                        <thead>
                            <tr>
                                <th>H<sub>2</sub>O usage / 100km</th>
                                <th>Battery Voltage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>6 dm<sup>3</sup></td>
                                <td>54 Am</td>
                            </tr>
                            <tr>
                                <td>9 dm<sup>3</sup></td>
                                <td>32 Am</td>
                            </tr>
                        </tbody>
                    </table>

                </td>
                <td>
                    Low
                </td>
            </tr>
        </tbody>
    </table>
    <details>
        <summary>
            Overview
        </summary>
        <ul>
            <li>
                <h5>Gasoline</h5>
                <meter id="gas-meter" value="6" min="0" max="10">6 out of 10</meter>
                <label for="gas-meter">6 out of 10</label>
            </li>
            <li>
                <h5>Diesel</h5>
                <meter id="diesel-meter" value="7" min="0" max="10">7 out of 10</meter>
                <label for="diesel-meter">7 out of 10</label>
            </li>
            <li>
                <h5>Hybrid</h5>
                <meter id="hyb-meter" value="6.5" min="0" max="10">6.5 out of 10</meter>
                <label for="hyb-meter">6.5 out of 10</label>
            </li>
        </ul>
    </details>
    <footer>All rights reserved &copy;</footer>

</body>

</html>