<?php
session_start();

if(isset($_POST['change'])){
    if (isset($_POST['email'])) {
        $email = $_POST['email'];

        $wszystko_OK = true;
        if (!preg_match(
            "/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9-.]+$/",
            $email
        )) {
            $wszystko_OK = false;
            $_SESSION['e_email'] = "Podaj poprawny adres e-mail!";
        }

        require_once "connect.php";

        try {
            $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
            if ($polaczenie->connect_errno != 0) {
                throw new Exception(mysqli_connect_errno());
            } else {
                //Czy email już istnieje?
                $rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE email='$email'");
    
                if (!$rezultat) throw new Exception($polaczenie->error);
    
                $ile_takich_maili = $rezultat->num_rows;
                if ($ile_takich_maili > 0) {
                    $wszystko_OK = false;
                    $_SESSION['e_email'] = "Istnieje już konto przypisane do tego adresu e-mail!";
                }
    
       
    
                if ($wszystko_OK == true) {
                    //Hurra, wszystkie testy zaliczone, dodajemy gracza do bazy
                     $user = $_SESSION['user'];   
                    if ($polaczenie->query("UPDATE uzytkownicy SET email='$email' WHERE login='$user'")) {
                        // $_SESSION['udanarejestracja'] = true;
                        header('Location: user_details.php');
                    } else {
                        throw new Exception($polaczenie->error);
                    }
                } else {
                    header('Location: zmien.php');
                }
    
                $polaczenie->close();
            }
        } catch (Exception $e) {
            echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
            echo '<br />Informacja developerska: ' . $e;
        }
    die();
}
}
if (isset($_POST['email'])) {
    //Udana walidacja? Załóżmy, że tak!
    $wszystko_OK = true;

    //Sprawdź poprawność nickname'a
    $nick = $_POST['nick'];

    //Sprawdzenie długości nicka
    if (!preg_match(
        "/^[a-zA-Z0-9]{3,20}$/",
        $nick
    )) {
        $wszystko_OK = false;
        $_SESSION['e_nick'] = "Nick musi posiadać od 3 do 20 znaków!";
    }


    // Sprawdź poprawność adresu email
    $email = $_POST['email'];


    if (!preg_match(
        "/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9-.]+$/",
        $email
    )) {
        $wszystko_OK = false;
        $_SESSION['e_email'] = "Podaj poprawny adres e-mail!";
    }

  

    //Sprawdź poprawność hasła
    $haslo1 = $_POST['haslo1'];
    $haslo2 = $_POST['haslo2'];

    if ((strlen($haslo1) < 8) || (strlen($haslo1) > 20)) {
        $wszystko_OK = false;
        $_SESSION['e_haslo'] = "Hasło musi posiadać od 8 do 20 znaków!";
    }

    if ($haslo1 != $haslo2) {
        $wszystko_OK = false;
        $_SESSION['e_haslo'] = "Podane hasła nie są identyczne!";
    }

    //Zapamiętaj wprowadzone dane
    $_SESSION['fr_nick'] = $nick;
    $_SESSION['fr_email'] = $email;
    $_SESSION['fr_haslo1'] = $haslo1;
    $_SESSION['fr_haslo2'] = $haslo2;

    require_once "connect.php";

    try {
        $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
        if ($polaczenie->connect_errno != 0) {
            throw new Exception(mysqli_connect_errno());
        } else {
            //Czy email już istnieje?
            $rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE email='$email'");

            if (!$rezultat) throw new Exception($polaczenie->error);

            $ile_takich_maili = $rezultat->num_rows;
            if ($ile_takich_maili > 0) {
                $wszystko_OK = false;
                $_SESSION['e_email'] = "Istnieje już konto przypisane do tego adresu e-mail!";
            }

            //Czy nick jest już zarezerwowany?
            $rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE login='$nick'");

            if (!$rezultat) throw new Exception($polaczenie->error);

            $ile_takich_nickow = $rezultat->num_rows;
            if ($ile_takich_nickow > 0) {
                $wszystko_OK = false;
                $_SESSION['e_nick'] = "Istnieje już gracz o takim nicku! Wybierz inny.";
            }

            if ($wszystko_OK == true) {
                //Hurra, wszystkie testy zaliczone, dodajemy gracza do bazy

                if ($polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL, '$nick', '$haslo1', '$email')")) {
                    $_SESSION['udanarejestracja'] = true;
                    header('Location: witamy.php');
                } else {
                    throw new Exception($polaczenie->error);
                }
            } else {
                header('Location: rejestracja.php');
            }

            $polaczenie->close();
        }
    } catch (Exception $e) {
        echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
        echo '<br />Informacja developerska: ' . $e;
    }
}
