<?php

	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: index.php');
		exit();
	}


		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
        
        $users = array("zawisza"=>"czarny", "zbyszko" => "zBogdanca");
    
    
			if(array_key_exists($login, $users) and $users[$login] = $haslo)
			{
				$_SESSION['zalogowany'] = true;
				
			
				$_SESSION['user'] = $login;
			
				
				unset($_SESSION['blad']);

				header('Location: user_details.php');
				
			} else {
				
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: loguj.php');
				
			}
			

	
?>