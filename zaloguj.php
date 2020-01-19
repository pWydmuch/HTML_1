<?php

	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: loguj.php');
		exit();
	}

	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
		

	
		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT * FROM uzytkownicy WHERE login='%s' AND password='%s'",
		quotemeta($login),
		quotemeta($haslo))))
		{
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				$_SESSION['zalogowany'] = true;
				
				$wiersz = $rezultat->fetch_assoc();
				$_SESSION['id'] = $wiersz['ID'];
				$_SESSION['user'] = $wiersz['login'];

				
				unset($_SESSION['blad']);
				$rezultat->free_result();
				header('Location: user_details.php');
				
			} else {
				
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: loguj.php');
				
			}
			
		}
		
		$polaczenie->close();
	}
	
?>